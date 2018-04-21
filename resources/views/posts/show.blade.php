@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go back</a>
     <main class="py-2">
    <h1>{{$post->title}}</h1>
    <div>
       <h5><i> {{$post->category}} </i></h5>
    </div>
    <br>
    <div>
         {!!$post->body!!}
    </div>

     <hr><small>Written on {{$post->created_at}}</small>
    <hr>

    
    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

   {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST',
   'onsubmit' => 'return confirmDelete()'])!!}
   

        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close() !!}
     </main>
    
@endsection