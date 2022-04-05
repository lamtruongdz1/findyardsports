<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;
use App\Models\Yard;
use App\Models\Blog;
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

        return view('yard.yard', compact('yards', 'districts', 'category'));
    }

    public function yard_district($param)
    {
        $districts = District::where('slug', $param)->first();
        $total_yard = Yard::where('id_districts', $districts->id)->count();
        $yards = Yard::where('id_districts', $districts->id)->simplePaginate(6);
        // var_dump($yards);
        return view('yard.yard_district', compact('yards', 'districts', 'total_yard'));
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
        return view('payment.pay');
    }
    public function pay_details()
    {
        return view('payment.pay-detail');
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
        return view('yard.yard-details', compact('yard','yardLike', 'slots'));
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
