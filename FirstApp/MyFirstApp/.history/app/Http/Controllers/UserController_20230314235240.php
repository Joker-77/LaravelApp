<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    protected function deleteOldImage()
    {
        if (auth()->user()->image_url) {
            Storage::delete('/public/images/' . auth()->user()->image_url);
        }
    }
}
