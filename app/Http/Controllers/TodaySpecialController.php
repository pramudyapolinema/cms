<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodaySpecialController extends Controller
{
    public function index(){
        return view('today-special');
    }
}
