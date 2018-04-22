@extends('layouts.app')

@section('content')
    <h1>Latest Posts</h1>

    @if(count($posts) > 0 )
        @foreach($posts as $post)
            <div class="card card-body bg-light">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Written on {{$post->created_at}} by {{$post->user->codename}}</small>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No Post found </p>
    @endif
@endsection