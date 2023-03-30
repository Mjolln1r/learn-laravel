<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;

class CreateController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        return view('post.create', compact('categories'));    }
}
