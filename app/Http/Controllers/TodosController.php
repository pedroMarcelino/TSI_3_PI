<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(){
        return view ('todos.index')->with('todos', Todo::all());
    }

    public function show($todoId){
        return view ('todos.show')->with('todo', Todo::find($todoId));
    }

    public function create(){
        return view ('todos.create');
    }

    public function store(){
        request()->validate([
            'name'=> ['required', 'max:255'],
            'description'=> ['required', 'max:255']
        ]);

        $data = request()->all();
        $todo = new Todo();

        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;
        $todo->save();

        return redirect('/todos');
    }

    public function destroy($id){
        $todo = Todo::find($id);
        $todo->delete();

        return redirect('/todos');
    }

    public function edit($id){
        return view ('todos.edit')->with('todo', Todo::find($id));
    }

    public function update(){
        $data = request()->all();
        $todo = Todo::find($data['id']);

        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->save();

        return redirect('/todos');
    }


}
