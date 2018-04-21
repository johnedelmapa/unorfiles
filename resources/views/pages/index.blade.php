@extends('layouts.app')

@section('content')

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-5 font-weight-normal">The UNO-R Files</h1><br>
        <p class="lead font-weight-normal">Post your stories, complaints and confessions here with your own code name (for anonymity), college department, and category. Submitted stories without these three requirements will NOT be posted.</p>
        <a class="btn btn-outline-secondary" href="/posts/create">Create Post</a>
      </div>
      <div class="product-device box-shadow d-none d-md-block"></div>
      <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
    </div>

@endsection