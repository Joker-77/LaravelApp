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

        /************************ Using Raw Sql Queries *****************/
        # $users = DB::table('users')->get();
        // DB::insert('insert into users (name, email, password) values (?,?,?)', [
        //     'basel', 'basel@mail.com', 'password'
        // ]);

        // $users = DB::select('select * from users');

        // DB::update('update users set name = \'Basel\' where id = 1');
        // DB::update('update users set name = ? where id = 1',['BASEL']);
        // DB::delete('delete from users where id = 1');

        /************************ Using Eloquent *****************/
        // # var_dump($user);
        // # dd($user);

        // insert
        $user = new User();
         $user->name = "Basel";
         $user->email = "Basel@mail.com";
         $user->password = "1234";
         $user->save();

        // retrieve all
        # $users = User::all();
        # return $users;
        
        // delete
        # User::where('id',3)->delete();
        return view('home');
    }
}
