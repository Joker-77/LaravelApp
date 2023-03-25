<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function uploadImage(Request $request)
    {
        // dd($request->file('image'));
        // dd($request->image);
        // dd($request->hasFile('image'));
        if ($request->hasFile('image')) {
            // $request->file('image')->store('images');
            User::uploadImage($request->image);
            session()->put('message','Image uploaded successfully');
            // $filename = $request->file('image')->getClientOriginalName();
            // $request->image->storeAs('images', $filename, 'public');
            // $user = auth()->user();
            // $user_id = $user->id;
            // User::find($user_id)->update(['image_url' => $filename]);
            // // auth()->user()->update(['image_url' => '']);
        }
        // dd($request->file('image')->getClientOriginalName());
        // return view('home');
        return redirect()->back();
    }
}
