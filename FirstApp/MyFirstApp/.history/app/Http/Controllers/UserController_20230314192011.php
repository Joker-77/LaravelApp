<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function uploadImage(Request $request)
    {
        // dd($request->file('image'));
        // dd($request->image);
        // dd($request->hasFile('image'));
        $user = auth()->user();
        var_dump($user);
        // User::find($user_id);
        if ($request->hasFile('image')) {
            // $request->file('image')->store('images');
            $filename = $request->file('image')->getClientOriginalName();
            $request->image->storeAs('images', $filename ,'public');
        }
        // dd($request->file('image')->getClientOriginalName());
        // return view('home');
        return redirect()->back();
    }
}
