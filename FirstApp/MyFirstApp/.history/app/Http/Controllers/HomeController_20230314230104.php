<?php

namespace App\Http\Controllers;

use App\Models\User;
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

        $data = array(
            'hello' => "Hello ",
            'name' => 'Basel'
        );
        // User::find(auth()->user()->id)->update(['image_url' => NULL]);
        // User::find(auth()->user()->id)->delete();
        // return view('home', ['name' => $name, 'hello' => $hello]);
        return view('home')->with($data);
    }
}
