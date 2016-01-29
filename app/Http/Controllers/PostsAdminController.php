<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;

class PostsAdminController extends Controller
{

    private $post;

    public function __construct(Post $post){
        $this->post = $post;
    }


    public function index()
    {
        //$posts = \App\Post::all();
        // $posts = \App\Post::paginate(5);
        $posts = $this->post->paginate(5);
        return view('admin.posts.list', compact('posts'));
    }

    public function create()
    { 

    	return view('admin.posts.create');
    }


    public function store(PostRequest $request)
    {
         $this->post->create($request->all());

      //return redirect()->route('admin.posts.index');
        return redirect()->route('admin.posts.list');

    }

    public function show($id)
    {
        $post = $this->post->find($id);
        return view('admin.posts.show', compact('post'));
    }


    public function edit($id)
    {
        $post = $this->post->find($id);
        return view('admin.posts.edit', compact('post'));
    }


    public function update(PostRequest $request, $id)
    {
        $post = $this->post->find($id);
        if($post){
             $post->update($request->all());
             return redirect()->route('admin.posts.edit',['id' => $post->id]);
             //return redirect('admin/posts/edit/'.$post->id);
        }else{

        }


       
    }

  
    public function destroy($id)
    {
        $this->post->find($id)->delete();
        return redirect()->route('admin.posts.list');
    }
}
