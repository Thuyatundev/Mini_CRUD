<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Home Page
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(3); // DB data get & show => Read =>R
        return view('index', compact('posts'));
    }

    // Post Create => C
    public function createPost(Request $request)
    {
        $postData =  $this->getData($request);
        Post::create($postData);

        return redirect()->route('Post#index')->with(['createdData'=>'Post Created successfully...']);
    }

    // Post Delete => D
    public function deletePost($id)
    {
        // first way
        // Post::where('id', $id)->delete();

        // second way
        Post::find($id)->delete();

        return redirect()->route('Post#index')->with(['DeletePost' => 'Post Deleted Successfully...']);
    }

    // view Post => Read => R
    public function viewPost($id)
    {
        $post = Post::where('id', $id)->first()->toArray();
        return view('see', compact('post'));
    }

    // update Postpage
    public function updatePost($id)
    {
        $post = Post::where('id', $id)->first()->toArray();
        return view('update', compact("post"));
    }

    // Updated Post => Update => U
    public function UpdatedPost(Request $request)
    {
        $postValue = $this->getData($request);
        $id = $request->postId;
        Post::where('id', $id)->update($postValue);

        return redirect()->route('Post#index')->with(['updatedData'=>'Post Updated successfully...']);
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
