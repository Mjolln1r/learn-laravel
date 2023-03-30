<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class EditController extends Controller
{
    public function __invoke(Post $post)
    {
        $post = Post::withTrashed()->find(2);
        $post->restore();
        dd('restored');
    }
}
