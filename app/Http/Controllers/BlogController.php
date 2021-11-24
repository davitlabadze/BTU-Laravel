<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function showBlog(Request $request)
    {

        return view('pages.blog',['posts' => Post::SimplePaginate(5)]);

    }
    public function showPost(Post $post)
    {
        return view('pages.post',['post' => $post]);
    }
}
