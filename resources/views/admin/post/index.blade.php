@extends('layouts.admin')

@section('content')
    <div>
        <div>
            @foreach($post as $item)
                <div>{{$item->id}}. {{$item->title}}</div>
            @endforeach
            {{$post->withQueryString()->links()}}
        </div>
    </div>
@endsection
