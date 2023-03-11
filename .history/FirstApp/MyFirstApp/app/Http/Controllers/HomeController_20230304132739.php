<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function Index()
    {
        // return 'I am Home Controller';
        return view('welcome');
    }
}
