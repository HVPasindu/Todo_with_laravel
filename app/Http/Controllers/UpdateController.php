<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class UpdateController extends Controller
{
    //

    public function updates($task_id){
         $task = Todo::find($task_id);

        if (!$task) {
            return redirect()->route('todo');
        }

        return view('pages.todo.update', compact('task'));
    }

    public function update(Request $request, $task_id)
    {
        $task = Todo::find($task_id);

        if (!$task) {
            return redirect()->route('todo');
        }

        $task->update([
            'name' => $request->name,
            'address' => $request->address,
        ]);

        return redirect()->route('todo');
    }
}
