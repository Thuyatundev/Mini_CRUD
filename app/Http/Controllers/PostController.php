<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // Home Page
    public function index()
    {
        return view('index');
    }
}
