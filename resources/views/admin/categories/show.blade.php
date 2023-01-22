@extends('layouts.admin')

@section('content')

    <h1>Progetti che contengono {{$category->name}}</h1>
    <ul>
        @foreach ($category->posts  as $post)
            <li>{{$post->title}}</li>
        @endforeach
    </ul>


@endsection