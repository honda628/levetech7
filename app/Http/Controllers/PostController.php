<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
    }
    
    public function show(Post $post)
    {
      return view('posts/show')->with(['post' => $post]);
    }
    
        public function getPaginateByLimit(int $limit_count = 10)
        {
            return $this->orderBY('updated_at', 'DESC')->lomit($limit_count)->get();
    }
}
