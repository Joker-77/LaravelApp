<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $data = [
            $hello => "Hello User: ",
            $name = 'Basel'
        ];
        // return view('home', ['name' => $name, 'hello' => $hello]);
        return view('home')->with($data);
    }
}
