<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo "Selamat Datang";
    }

    public function about(){
        echo "Nama : Pramudya Wibowo <br> NIM : 1941720054";
    }

    public function articles($id){
        echo "Halaman artikel dengan id $id";
    }
}
