<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index(){
        
        $date = now()->format("Y-m-d");

        $trains = Train::where('start_time', 'LIKE', $date.'%')->get();

        return view('welcome', compact('trains'));
    }
}
