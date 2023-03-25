<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function uploadImage(Request $request)
    {
        // dd($request->file('image'));
        // dd($request->image);
        // dd($request->hasFile('image'));
        if ($request->hasFile('images')) {
            $request->file('image')->store('images');
            $request->image->store('images', 'public');
        }
    }
}
