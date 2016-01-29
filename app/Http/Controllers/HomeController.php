<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	// $notas = [

    	// 	0 => 'Anotação 01',
    	// 	1 => 'Anotação 02',
    	// 	2 => 'Anotação 03',
    	// 	3 => 'Anotação 04'
    	// ];

     //    return view('posts.home', compact('notas') );

      $dados = \App\Post::all();

        return view('posts.home', compact('dados'));
    }

   
}
