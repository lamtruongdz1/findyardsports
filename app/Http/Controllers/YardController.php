<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;
use App\Models\Yard;
use App\Models\Category;
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
        $yards = Yard::orderBy('total_booking','desc')->limit(8)->get();
        return view('index',compact('yards','districts'));
    }

    public function yard()
    {
        $districts = District::all();
        $category = Category::all();
        $yards = Yard::orderBy('view','desc')->simplePaginate(6);

        return view('yard',compact('yards','districts','category'));
    }

    public function yard_district($param)
    {
        $districts = District::where('id',$param)
                ->orWhere('slug',$param)
                ->firstOrFail();
        // $yards = Yard::whereHas('district', function ($query) use ($param) {
        //     $query->where('slug','like', $param);
        // })->get();
        // dd($yards);

        return view('yard_district',compact('yards','districts'));
    }

    public function autocomplete(Request $request)
    {
        $yards = Yard::where('name', 'LIKE', '%'. $request->get('query'). '%')->get();
        $districts = District::where('name', 'LIKE', '%'. $request->get('query'). '%')->get();
        $data = $yards->merge($districts);
        return response()->json($data);
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
       $yard = Yard::where('id',$param)
                ->orWhere('slug',$param)
                ->firstOrFail();
        return view('yard-details',compact('yard'));
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
        //
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
