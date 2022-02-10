@extends('layouts.main')
@section('blog')
    <!-- Services-->
    @if ($blog->count())
        
    
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">{{ $blog[0]->title1 }}</h2>
                <h3 class="section-subheading text-muted">{{ $blog[0]->title2 }}</h3>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                  <div class="card h-100">
                    <img src="{{ ('assets/img/portfolio/'.$blog[0]->gambar1) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $blog[0]->title3 }}</h5>
                      <p class="card-text">{{ $blog[0]->title4 }}</p>
                    </div>
                    <div class="card-footer">
                      <a href="mostblog">
                        <small class="text-muted">{{ $blog[0]->title5 }}</small>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="{{ ('assets/img/portfolio/'.$blog[1]->gambar1) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $blog[1]->title3 }}</h5>
                      <p class="card-text">{{ $blog[1]->title4 }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="mostblog2">
                          <small class="text-muted">{{ $blog[1]->title5 }}</small>
                        </a>
                      </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="{{ ('assets/img/portfolio/'.$blog[2]->gambar1) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $blog[2]->title3 }}</h5>
                      <p class="card-text">{{ $blog[2]->title4 }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="mostblog3">
                          <small class="text-muted">{{ $blog[2]->title5 }}</small>
                        </a>
                      </div>
                  </div>
                </div>
              </div>
        </div>
    </section>
    @endif
@endsection