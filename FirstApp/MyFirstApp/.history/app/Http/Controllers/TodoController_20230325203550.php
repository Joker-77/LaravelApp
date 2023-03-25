<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoCreateRequest;
use App\Http\Requests\TodoUpdateRequest;
use App\Models\Todo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mockery\Matcher\Type;

class TodoController extends Controller
{
    //
    public function index()
    {
        $todos = Todo::orderBy('title', 'desc')->get();
        return view('todos.index')->with(['todos' => $todos]);
    }
    public function create()
    {
        $data = [
            'title' => 'Create Todo',
            // 'message' => 'Hello to create'
        ];
        return view('todos.create', $data);
    }
    public function store(TodoCreateRequest $request)
    {
        // $request->validate([
        //     'title' => 'required|max:255',
        // ]);
        // $rules = [
        //     'title' => 'required|max:255'
        // ];
        // $messages = [
        //     'title.max' => 'Todo title should not be greater than 255 characters.'
        // ];
        // $validator = Validator::make($request->all(), $rules, $messages);
        // if ($validator->fails()) {
        //     return redirect()
        //         ->back()
        //         ->withErrors($validator)
        //         ->withInput();
        // }
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
    public function edit(Todo $entity)
    {
        // $todo = Todo::find($id);
        return view('todos.edit', compact('entity'));
    }

    public function update(TodoUpdateRequest $request, Todo $entity)
    {
        $entity->update(['title' => $request->title]);
        // Todo::where('id', $entity->id)->update(['title' => $request->title]);
        $data = [
            'success' => true,
            'message' => 'Todo updated succesfully'
        ];
        return redirect(route('entity.index'))->with('data', $data);
    }

    public function complete(Request $request)
    {
        return response()->json([
            'id' => $request->id,
            'success' => True,
            'message' => 'Todo completed successfully'
        ]); 
        # code...
    }
}
