<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TrashController extends Controller
{

    public function delete_all()
    {
        Task::onlyTrashed()->forceDelete();
        return redirect()->route('tasks.index');
    }

}
