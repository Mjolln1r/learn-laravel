@extends('layouts.main')
@section('content')
<div>
        <div>
            <a href="{{route('post.show', $post->id)}}">{{$post->id}}. {{$post->title}}</a>
        </div>
</div>
@endsection
