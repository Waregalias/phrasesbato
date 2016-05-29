<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
  public function read()
  {
      $posts = Post::where('validate', 0)->paginate(6);

      return view('index', compact('posts'));
  }

  public function write()
  {

  }
}
