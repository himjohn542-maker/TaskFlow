<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo_list;   

class Todo_listController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todo_lists = Todo_list::orderBy('id', 'desc')->get();

    return view ('TaskFlow.index',[ 
        'todo_lists' => $todo_lists
        ]);


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('TaskFlow.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([ 
    'title' => 'required|unique:todo_lists,title|max:255', 
    'subject' => 'nullable|max:255', 
    'description' => 'required|max:1000', 
    'status' => 'required|boolean', 
]);

    Todo_list::create([
        'title' => $validatedData['title'],
        'subject' => $validatedData['subject'],
        'description' => $validatedData['description'],
        'status' => $validatedData['status']
        ]);

        return redirect()->route('todo_lists.index', [
            'todo_lists' => Todo_list::all()
        ]);
    }

    /**s
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('TaskFlow.edit', [
            'todo_list' => Todo_list::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    $validatedData = $request->validate([ 
    'title' => 'required|unique:todo_lists,title,' . $id . '|max:255', 
    'subject' => 'nullable|max:255', 
    'description' => 'required|max:1000', 
    'status' => 'required|boolean', 
]);

$todo_list = Todo_list::findOrFail($id);
$todo_list->update([
    'title' => $validatedData['title'],
    'subject' => $validatedData['subject'],
    'description' => $validatedData['description'],
    'status' => $validatedData['status']
]);

return redirect()->route('todo_lists.index', [
    'todo_lists' => Todo_list::all()
]);
    }

    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $todo_list = Todo_list::findOrFail($id);
        $todo_list->delete();

        return redirect()->route('todo_lists.index', [
            'todo_lists' => Todo_list::all()
        ]);
    }
}
