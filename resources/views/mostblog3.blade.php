@extends('layouts.main')
@section('mostblog3')
@if ($mostblog3->count())
    

<div class="card mb-3">
    <img src="{{ ('assets/img/portfolio/'.$mostblog3[0]->gambar1) }}" class="card-img-top" alt="Wild Landscape"/>
    <div class="card-body">
      <h5 class="card-title">{{ $mostblog3[0]->title1 }}</h5>
      <p class="card-text">
        {{ $mostblog3[0]->title2 }}
      </p>
      <p class="card-text">
        <a href="blog">
        <small class="text-muted">{{ $mostblog3[0]->title3 }}</small>
        </a>
      </p>
    </div>
  </div>
  @endif 
@endsection