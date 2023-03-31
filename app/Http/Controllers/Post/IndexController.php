<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $post = Post::paginate(10);
        return view('post.index', compact('post'));
    }
}
