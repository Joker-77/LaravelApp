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
            'title' => 'Create Todo',
        ];
        return view('todos.create', $data);
    }
    public function store(RequestType $var = null)
    {
        # code...
    }
    public function edit()
    {
        return view('todos.edit');
    }
}
