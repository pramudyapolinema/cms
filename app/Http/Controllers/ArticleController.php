<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function article($id){
        echo "Halaman artikel dengan id $id";
    }

    public function news(){
        return redirect('https://www.educastudio.com/news');
    }

    public function newsString($string){
        return redirect("https://www.educastudio.com/news/" . $string );
    }
}
