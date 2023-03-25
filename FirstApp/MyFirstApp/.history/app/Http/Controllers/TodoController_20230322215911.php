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
            'message' => 'Hello to create'
        ];
        return view('todos.create', $data);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);
        Todo::create($request->all());
        $data = [
            'success' => true,
            'message' => 'Todo Created Succesfully'
        ];

            /* with after view is add a piece of data to the view */
        // return view('todos.index')->with('data', $data);

            /* with after redirect is flashing data to the session */
        return redirect('todos')->with('data', $data);
    }
    public function edit()
    {
        return view('todos.edit');
    }
}
