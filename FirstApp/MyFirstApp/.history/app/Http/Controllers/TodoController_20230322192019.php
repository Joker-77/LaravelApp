<?php

namespace App\Http\Controllers;

use App\Models\Todo;
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
    public function store(Request $request)
    {
        Todo::create($request->all());
        $data = [
            'success' => true,
            'message' => 'Todo Created Succesfully'
        ];
        return redirect()->to('todos')->with('message', $data);
    }
    public function edit()
    {
        return view('todos.edit');
    }
}
