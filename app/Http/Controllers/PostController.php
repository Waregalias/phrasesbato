<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
  public function read()
  {
      $posts = Post::all();

      return view('index', compact('posts'));
  }

  public function write()
  {

  }
}
