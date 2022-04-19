<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;
use App\Models\Yard;
use App\Models\Blog;
use App\Models\Booking;
use App\Models\typeYards;
use App\Models\bookingdetail;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Booking\TimeSlotGenerator;
use DB;
use Carbon\Carbon;

class YardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $districts = District::all();
        $yards = Yard::orderBy('total_booking', 'desc')->limit(8)->get();
        $blogs = Blog::orderBy('created_at', 'desc')->limit(3)->get();
        return view('content.index', compact('yards', 'districts', 'blogs'));
    }

    public function yard()
    {
        $districts = District::all();
        $category = Category::all();
        $yards = Yard::orderBy('view', 'desc')->simplePaginate(6);

        return view('content.yard.yard', compact('yards', 'districts', 'category'));
    }

    public function yard_district($param)
    {
        $districts = District::where('slug', $param)->first();
        $total_yard = Yard::where('id_districts', $districts->id)->count();
        $yards = Yard::where('id_districts', $districts->id)->simplePaginate(6);
        // var_dump($yards);
        return view('content.yard.yard_district', compact('yards', 'districts', 'total_yard'));
    }

    public function autocomplete(Request $request)
    {
        $data = Yard::where('name', 'LIKE', '%' . $request->get('query') . '%')->get();
        // $districts = District::where('name', 'LIKE', '%' . $request->get('query') . '%')->get();
        // $data = $yards->merge($districts);
        return response()->json($data);
    }
    public function pay()
    {
        return view('content.payment.pay');
    }
    public function pay_details()
    {
        return view('content.payment.pay-detail');
    }

    public function search(Request $request)
    {
        if (isset($_GET['name'])) {
            $search_text = $_GET['name'];
            $yards = Yard::where('name', 'LIKE', '%' . $search_text . '%')->get();
            $total_yard = $yards->count();

            return view('content.yard.yard-search', compact('yards', 'total_yard'));
        } else {
            return view('content.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($param)
    {

        $yard = Yard::where('id', $param)
            ->orWhere('slug', $param)
            ->firstOrFail();

        $yardLike = Yard::where('id_districts', $yard->id_districts)->limit(8)->get();

        $slots = (new TimeSlotGenerator($yard))->get();



        if (Auth::check()) {
            $yard->incrementReadCount();
        } // update view}

        return view('content.yard.yard-details', compact('yard', 'yardLike', 'slots'));
    }

    public function datsan($param, Request $request)
    {
        // $yard = Yard::where('id', $param)
        // ->orWhere('slug', $param)
        // ->firstOrFail();

        // $typeyard = typeYards::where('type', $yard->id_districts)->get();

        // $slots = (new TimeSlotGenerator($yard))->get();
        // return view('content.payment.pay', compact('yard','slots','typeyard'));


        $yard = Yard::where('id', $param)
            ->orWhere('slug', $param)
            ->firstOrFail();

        $typeyard = typeYards::where('type', $yard->id_districts)->get();

        $typeyard = typeYards::all();

        $services_cost = $yard->price * 0.1;
        $total_cost = $yard->price + $services_cost;
        $now = (new TimeSlotGenerator($yard))->getNow();

        $slots = (new TimeSlotGenerator($yard))->get();
        return view(
            'content.payment.pay',
            compact(
                'yard',
                'now',
                'services_cost',
                'slots',
                'typeyard',
                'total_cost'
            )
        );
    }


    public function themtimesan(Request $request)
    {
        $data = $request->all();
        $themtime = new bookingdetail();
        $themtime->yard = $data['time'];
        $themtime->time = $data['time'];
        $themtime->save();
    }

    public function thanhtoansan(Request $request)
    {
        // $request->validate([
        //     'hovaten' => 'required',
        //     'sodienthoai' => 'required',
        //     'email' => 'required',
        // ]);

        $data = $request->all();

        $thembookings = new Booking();

        $thembookings->user_id = \Auth::user()->id;
        $thembookings->name = $data['name'];
        $thembookings->type_yard = $data['yard_type'];
        $thembookings->address = $data['address'];
        $thembookings->phone = $data['phone'];
        $thembookings->date = $data['date'];
        $thembookings->time = $data['time'];

       // tính toán sau khi chọn time
        $change_format = strtotime($data['time']) ;
        $plus_time = $change_format + $data['time_da'] * (60 * 60);
        $thembookings->end_time = date('H:i', $plus_time);
        // thời gian đặt sân
        $thembookings->time_da = $data['time_da'];
        // trạng thái đặt sâan
        $thembookings->status = 1;
        $thembookings->total_price = (float)$data['price'] * $data['time_da'] ;
        if ($thembookings->save()) {
            $updatebk = new bookingdetail();
            $updatebk->booking_id = $thembookings->id;
            $updatebk->yard_id = $data['yard_id'];
            $updatebk->price = $data['price'];
            $updatebk->quanlity = 1;
            $updatebk->save();
        }

        echo 'done';


        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://localhost:8000/vnpay_return";
        $vnp_TmnCode = "2EHUOKRV"; //Mã website tại VNPAY
        $vnp_HashSecret = "KBRZDIHERPCFNIKVPQTOVZWPJOXCSYPP"; //Chuỗi bí mật

        $vnp_TxnRef = $thembookings->id; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = 'thanh toan hoa don web';
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = $thembookings->total_price * 100;
        $vnp_Locale = 'vn';
        $vnp_BankCode = 'NCB';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        //Add Params of 2.0.1 Version

        //Billing


        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,


        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }

        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array(
            'code' => '00', 'message' => 'success', 'data' => $vnp_Url
        );
        if (isset($_POST['redirect'])) {
            header('Location: ' . $vnp_Url);
            die();
        } else {
            echo json_encode($returnData);
        }
        // vui lòng tham khảo thêm tại code demo
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // if(Cookie::get($yard->id)!=''){
        //     Cookie::set('$yard->id', '1', 60);
        // $yard->incrementReadCount(); tự động tăng lượt xem

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function return()
    {
        return view('vnpay.vnpay_return');
    }
}
