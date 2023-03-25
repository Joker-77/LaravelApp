<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    //
    public function index()
    {
        return view('todos.index');
    }
    public function create()
    {
        $data = [
            'title' => 'Create Todo'
        ];
        return view('todos.create');
    }
    public function edit()
    {
        return view('todos.edit');
    }
}
