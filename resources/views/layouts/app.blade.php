<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/custom.css')}}">
        {{-- <link rel="stylesheet" href="{{asset('css/material-kit.css')}}"> --}}
        <title>{{config('app.name', 'UNOR Files')}}</title>
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/unor.png')}}" />
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            <main class="py-4">
            @include('inc.messages')
            @yield('content')
            </main>
        </div>
 @include('inc.footer')