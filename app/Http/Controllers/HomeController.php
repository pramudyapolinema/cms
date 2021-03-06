<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Anggota;
use App\Models\Menu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index')
                ->with('posts', Post::index())
                ->with('anggotas', Anggota::anggota())
                ->with('menus', Menu::menu());
    }
}
