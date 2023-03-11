<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //

    public function Index()
    {
        // return 'I am Home Controller';

        # $users = DB::table('users')->get();
        // DB::insert('insert into users (name, email, password) values (?,?,?)', [
        //     'basel', 'basel@mail.com', 'password'
        // ]);

        // $users = DB::select('select * from users');

        // DB::update('update users set name = \'Basel\' where id = 1');
        // DB::update('update users set name = ? where id = 1',['BASEL']);
        // DB::delete('delete from users where id = 1');
        $users = new User();
        var_dump($users);
        return view('home');
    }
}
