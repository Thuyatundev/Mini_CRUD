<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Home Page
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get()->toArray(); // DB data get & show => Read =>R
        return view('index', compact('posts'));
    }

    // Post Create => C
    public function createPost(Request $request)
    {
        $postData =  $this->getData($request);
        Post::create($postData);

        return redirect()->route('Post#index');
    }

    // get data form createPost
    private function getData($request)
    {
        $data = [
            'title' => $request->title,
            'Description' => $request->des
        ];

        return $data;
    }
}
