@extends('layouts.main')
@section('content')
<div>
    @foreach($post as $item)
        <div>{{$item->id}}. {{$item->title}}</div>
    @endforeach
    {{$post->withQueryString()->links()}}
</div>
@endsection
