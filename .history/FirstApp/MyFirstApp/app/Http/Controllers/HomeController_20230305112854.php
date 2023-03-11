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

        // DB::insert('insert into users (name, email, password) values (?,?,?)', [
        //     'basel', 'basel@mail.com', 'password'
        // ]);

        // $users = DB::select('select * from users');
        DB::update('update [dbo].[users] set [name] = "Basel" where id = 1');
        return view('home');
    }
}
