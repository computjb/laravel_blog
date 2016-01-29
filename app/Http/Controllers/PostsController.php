<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{

    public function index()
    {

        $dados = \App\Post::all();

        return view('posts.home', compact('dados'));
    }
}
