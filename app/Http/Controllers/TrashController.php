<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class TrashController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::get();

        if($request->has('view_deleted'))
        {
            $posts = Post::onlyTrashed()->get();
        }
        return view('trash', ['posts' => $posts]);
    }

    public function delete($id)
    {
        Post::withTrashed()->find($id)->forceDelete();

        return back();
    }

    public function restore($id)
    {
        Post::withTrashed()->find($id)->restore();

        return back();
    }

    public function restore_all()
    {
        Post::onlyTrashed()->restore();

        return back();
    }

}
