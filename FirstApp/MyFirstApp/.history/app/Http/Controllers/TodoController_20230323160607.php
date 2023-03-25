<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
            // 'message' => 'Hello to create'
        ];
        return view('todos.create', $data);
    }
    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => 'required|max:255',
        // ]);
        $rules = [
            'title' => 'required|max:255'
        ];
        $messages = [
            'title.max' => 'Todo title should not be greater than 255 characters.'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()){
            return redirect('post/create')
        }
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
