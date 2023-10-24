<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index() {
        return view('homepage');
    }
    public function allTodo() {
        return view('todo.allTodo');
    }
    public function completeTodo() {
        return view('todo.completeTodo');
    }
    public function storeTodo(Request $request) {

       $request->validate(
        [
            'title' => 'required',
            'detail' => 'required|max:250'
        ],
        [
            'title.required' => "Please enter your title",
            'detail.required' => "Please enter your detail",
            'detail.max' => "You can not enter more than 250",
        ]
        );


        // store database
        $newTodo = new Todo();
        $newTodo->title = $request->title;
        $newTodo->detail = $request->detail;
        $newTodo->author = $request->author;

        $newTodo->save();       
    }
}
