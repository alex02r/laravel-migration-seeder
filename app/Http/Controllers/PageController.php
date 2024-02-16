<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index(){
        //recuperiamo tutti i movie
        $trains = Train::orderBy('start_time', 'asc')->get();

        return view('welcome', compact('trains'));
    }
}
