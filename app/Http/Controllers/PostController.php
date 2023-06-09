<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::all();

        return view('post.index', compact('post'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('post.create', compact('categories'));
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => '',
        ]);
        Post::create($data);
        return redirect()->route('post.index');
    }

    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    public function update()
    {
        $post = Post::find(6);
        $post->update([
            'title' => 'updated',
            'content' => 'updated',
            'image' => 'updated.jpd',
            'likes' => 100,
            'is_published' => 1,
        ]);
        dd('updated');
    }

    public function delete()
    {
        $post = Post::withTrashed()->find(2);
        $post->restore();
        dd('restored');
    }

    public function firstOrCreate()
    {
        $anotherPost = [
            'title' => 'some post',
            'content' => 'some',
            'image' => 'some.jpd',
            'likes' => 110,
            'is_published' => 1,
        ];
        $post = Post::firstOrCreate([
            'title' => 'some title phpstorm',
        ], [
            'title' => 'some title phpstorm',
            'content' => 'some content',
            'image' => 'some.jpd',
            'likes' => 110,
            'is_published' => 1,
        ]);
        dump($post->content);
        dd('end');

    }

    public function updateOrCreate()
    {
        $anotherPost = [
            'title' => 'update or create some post',
            'content' => 'update or create some',
            'image' => 'update or create some.jpd',
            'likes' => 200,
            'is_published' => 0,
        ];
        $post = Post::updateOrCreate([
            'title' => 'some title not phpstorm'
        ], [
            'title' => 'some title not phpstorm',
            'content' => 'it is not  some content',
            'image' => 'noooooooooooo update or create some.jpd',
            'likes' => 200,
            'is_published' => 0,
        ]);
        dump($post->content);
        dd('updated');
    }
}
