<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function showBlog(Request $request)
    {
        return view('pages.blog');

    }
    public function showPost(Request $request)
    {
        $data['slug'] = $request->slug;
        $data['body'] = $request->body;
        $data['bg'] = $request->bg;
        $data['title'] = str_replace("-"," ", $request->slug);
        return view('pages.post',$data);
    }
}
