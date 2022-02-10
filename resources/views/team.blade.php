@extends('layouts.main')
@section('team')
    <!-- Team-->
    @if ($team->count())
        
    
    <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">{{ $team[0]->title1 }}</h2>
                <h3 class="section-subheading text-muted">{{ $team[0]->title2 }}</h3>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{ ('assets/img/team/'.$team[0]->gambar1) }}" alt="..." />
                        <h4>{{ $team[0]->title3 }}</h4>
                        <p class="text-muted">{{ $team[0]->title4 }}</p>
                        <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/i/flow/login"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://id.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{ ('assets/img/team/'.$team[1]->gambar1) }}" alt="..." />
                        <h4>{{ $team[1]->title3 }}</h4>
                        <p class="text-muted">{{ $team[1]->title4 }}</p>
                        <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/i/flow/login"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://id.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{ ('assets/img/team/'.$team[2]->gambar1) }}" alt="..." />
                        <h4>{{ $team[2]->title3 }}</h4>
                        <p class="text-muted">{{ $team[2]->title4 }}</p>
                        <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/i/flow/login"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://id.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">{{ $team[0]->title5 }}</p></div>
            </div>
        </div>
    </section>
    @endif
@endsection