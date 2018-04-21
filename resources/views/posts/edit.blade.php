@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>

     {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>

        <div class="form-group">
            {{Form::label('category', 'Category')}}
            {{Form::select('category',  [
                
                'Love/Romance' => 'Love/Romance',
                'Comedy' =>'Comedy',
                'Horror' => 'Horror',
                'Serious/Real Talk' =>'Serious/Real Talk',
                'Academics' => 'Academics',
                'Sad' => 'Sad',
                'Friendship' => 'Friendship',
                'ASAP/Shout-out' => 'ASAP/Shout-out',
                'Problems' => 'Problems',
                'SPG/18+' => 'SPG/18+',
                'Family' => 'Family',
                'LGBT' => 'LGBT'
            ],

            $post->category, ['class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body'])}}
        </div>

        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Update', ['class' =>'btn btn-primary'])}}
        
    {!! Form::close() !!}

@endsection

   