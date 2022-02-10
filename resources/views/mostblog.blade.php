@extends('layouts.main')
@section('mostblog')
@if ($mostblog->count())
    

<div class="card mb-3">
    <img src="{{ ('assets/img/portfolio/'.$mostblog[0]->gambar1) }}" class="card-img-top" alt="Wild Landscape"/>
    <div class="card-body">
      <h5 class="card-title">{{ $mostblog[0]->title1 }}</h5>
      <p class="card-text">
        {{ $mostblog[0]->title2 }}
      </p>
      <p class="card-text">
        <a href="blog">
        <small class="text-muted">{{ $mostblog[0]->title3 }}</small>
        </a>

      </p>
    </div>
  </div>
  @endif
@endsection