<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
  public function read()
  {
      $posts = Post::where('validate', 1)->paginate(6);
      return view('index', compact('posts'));
  }

  public function write(Request $request)
  {
      //return view('index');
      return $request->all();

      // $request = Post::insert($addpost);
      // return view('index', compact('posts'));
  }

  public function search()
  {
      $posts_research = Post::where('tag', $value);
  }
}
