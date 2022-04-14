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
        return view('content.index', compact('yards', 'districts','blogs'));
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
        $yards = Yard::where('name', 'LIKE', '%' . $request->get('query') . '%')->get();
        $districts = District::where('name', 'LIKE', '%' . $request->get('query') . '%')->get();
        $data = $yards->merge($districts);
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
        
        return view('content.yard.yard-details', compact('yard','yardLike', 'slots'));
    }

    public function datsan($param, Request $request){
        $yard = Yard::where('id', $param)
        ->orWhere('slug', $param)
        ->firstOrFail();

        $typeyard = typeYards::where('type', $yard->id_districts)->get();

        $slots = (new TimeSlotGenerator($yard))->get();
        return view('content.payment.pay', compact('yard','slots','typeyard'));
    }

    // public function themtimesan(Request $request){
    //     $data = $request->all();
    //     $themtime = new bookingdetail();
    //     $themtime->yard = $data['time'];
    //     $themtime->time = $data['time'];
    //     $themtime->save(); 

    // }

    public function thanhtoansan(Request $request){
  
        $data = $request->all();
        $thembookings = new Booking();
        $thembookings->address = $data['tenaddress'];
        $thembookings->email = $data['email'];
        $thembookings->phone = $data['sodienthoai'];
        $thembookings->total_price = $data['price'] * 2;
        $thembookings->save();
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


}
