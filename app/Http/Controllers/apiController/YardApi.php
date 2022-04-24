<?php

namespace App\Http\Controllers;
use App\Models\Yard;
use Illuminate\Http\Request;

class YardApi extends Controller
{
    public function index(){
        $yards = Yard::all();
        return response()->json($yards);
    }
    public function get_One($id){
        $yard = Yard::find($id);
        return response()->json($yard);
    }
}
