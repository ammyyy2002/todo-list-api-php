<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        return Todo::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'completed' => 'boolean'
        ]);

        return Todo::create($request->all());
    }

    public function show(Todo $todo)
    {
        return $todo;
    }

    public function update(Request $request, Todo $todo)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'completed' => 'boolean'
        ]);

        $todo->update($request->all());

        return $todo;
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();

        return response()->noContent();
    }
}
