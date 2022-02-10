@extends('layouts.main')
@section('home')
@foreach ($home as $homes)
    

<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">{{ $homes->title1 }}</div>
        <div class="masthead-heading text-uppercase">{{ $homes->title2 }}</div>
        <a class="btn btn-primary btn-xl text-uppercase" href="/blog">{{ $homes->title3 }}</a>
    </div>
</header>
@endforeach
@endsection