@extends('layouts.main')
@section('profil')
    <!-- About-->
    @if ($profil->count())
        
    
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">{{ $profil[0]->title1 }}</h2>
                <h3 class="section-subheading text-muted">{{ $profil[0]->title2 }}</h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{('assets/img/about/'.$profil[0]->gambar1 )}}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>{{ $profil[0]->title3 }}</h4>
                            <h4 class="subheading">{{ $profil[0]->title4 }}</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">{{ $profil[0]->title5 }}</p></div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{('assets/img/about/'.$profil[1]->gambar1 )}}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>{{ $profil[1]->title3 }}</h4>
                            <h4 class="subheading">{{ $profil[1]->title4 }}</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">{{ $profil[1]->title5 }}</p></div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{('assets/img/about/'.$profil[2]->gambar1 )}}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>{{ $profil[2]->title3 }}</h4>
                            <h4 class="subheading">{{ $profil[2]->title4 }}</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">{{ $profil[2]->title5 }}</p></div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{('assets/img/about/'.$profil[3]->gambar1 )}}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>{{ $profil[3]->title3 }}</h4>
                            <h4 class="subheading">{{ $profil[3]->title4 }}</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">{{ $profil[3]->title5 }}</p></div>
                    </div>
                </li>        
            </ul>
        </div>
    </section>
    @endif
@endsection