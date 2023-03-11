<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //

    public function Index()
    {
        // return 'I am Home Controller';

        # $users = DB::table('users')->get();
        $users = null;
        return view('home', ['users' => $users]);
    }
}
