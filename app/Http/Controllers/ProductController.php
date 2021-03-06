<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class ProductController extends Controller
{
    public function index(){
        return view('product')
            ->with('menus', Menu::menu());
    }
}
