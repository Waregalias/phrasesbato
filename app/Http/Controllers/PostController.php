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
  public function search(Request $search)
  {
      $posts = Post::where('tag', $search->tag)->paginate(6);
      return view('search', compact('posts'));
  }

  public function write(Request $request)
  {
      $result = $request->all();
      unset($result['_token']);
      if (Post::insert($result)) {
        return $this->read();
      }
  }
}
