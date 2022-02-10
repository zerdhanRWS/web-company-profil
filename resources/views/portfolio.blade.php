@extends('layouts.main')
@section('portfolio')
    <!-- Portfolio Grid-->
    
    @if ($portfolio->count())
        
    
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">{{ $portfolio[0]->title1 }}</h2>
                <h3 class="section-subheading text-muted">{{ $portfolio[0]->title2 }}</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ ('assets/img/portfolio/'.$portfolio[0]->gambar1) }}" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">{{ $portfolio[0]->title3 }}</div>
                            <div class="portfolio-caption-subheading text-muted">{{ $portfolio[0]->title4 }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 2-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ ('assets/img/portfolio/'.$portfolio[1]->gambar1) }}" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">{{ $portfolio[1]->title3 }}</div>
                            <div class="portfolio-caption-subheading text-muted">{{ $portfolio[1]->title4 }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 3-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ ('assets/img/portfolio/'.$portfolio[2]->gambar1) }}" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">{{ $portfolio[2]->title3 }}</div>
                            <div class="portfolio-caption-subheading text-muted">{{ $portfolio[2]->title4 }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <!-- Portfolio item 4-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ ('assets/img/portfolio/'.$portfolio[3]->gambar1) }}" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">{{ $portfolio[3]->title3 }}</div>
                            <div class="portfolio-caption-subheading text-muted">{{ $portfolio[3]->title4 }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <!-- Portfolio item 5-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ ('assets/img/portfolio/'.$portfolio[4]->gambar1) }}" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">{{ $portfolio[4]->title3 }}</div>
                            <div class="portfolio-caption-subheading text-muted">{{ $portfolio[4]->title4 }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Portfolio item 6-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ ('assets/img/portfolio/'.$portfolio[5]->gambar1) }}" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">{{ $portfolio[5]->title3 }}</div>
                            <div class="portfolio-caption-subheading text-muted">{{ $portfolio[5]->title4 }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">{{ $portfolio[0]->title5 }}</h2>
                                    <p class="item-intro text-muted">{{ $portfolio[0]->title6 }}</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ ('assets/img/portfolio/'.$portfolio[0]->gambar1) }}" alt="..." />
                                    <p>{{ $portfolio[0]->title7 }}</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>{{ $portfolio[0]->title8 }}</strong>
                                            
                                        </li>
                                        <li>
                                            <strong>{{ $portfolio[0]->title9 }}</strong>
                                            
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        {{ $portfolio[0]->title10 }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">{{ $portfolio[1]->title5 }}</h2>
                                    <p class="item-intro text-muted">{{ $portfolio[1]->title6 }}</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ ('assets/img/portfolio/'.$portfolio[1]->gambar1) }}" alt="..." />
                                    <p>{{ $portfolio[1]->title7 }}</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>{{ $portfolio[1]->title8 }}</strong>
                                            
                                        </li>
                                        <li>
                                            <strong>{{ $portfolio[1]->title9 }}</strong>
                                            
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        {{ $portfolio[1]->title10 }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">{{ $portfolio[2]->title5 }}</h2>
                                    <p class="item-intro text-muted">{{ $portfolio[2]->title6 }}</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ ('assets/img/portfolio/'.$portfolio[2]->gambar1) }}" alt="..." />
                                    <p>{{ $portfolio[2]->title7 }}</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>{{ $portfolio[2]->title8 }}</strong>
                                            
                                        </li>
                                        <li>
                                            <strong>{{ $portfolio[2]->title9 }}</strong>
                                            
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        {{ $portfolio[2]->title10 }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">{{ $portfolio[3]->title5 }}</h2>
                                    <p class="item-intro text-muted">{{ $portfolio[3]->title6 }}</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ ('assets/img/portfolio/'.$portfolio[3]->gambar1) }}" alt="..." />
                                    <p>{{ $portfolio[3]->title7 }}</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>{{ $portfolio[3]->title8 }}</strong>
                                            
                                        </li>
                                        <li>
                                            <strong>{{ $portfolio[3]->title9 }}</strong>
                                            
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        {{ $portfolio[3]->title10 }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">{{ $portfolio[4]->title5 }}</h2>
                                    <p class="item-intro text-muted">{{ $portfolio[4]->title6 }}</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ ('assets/img/portfolio/'.$portfolio[4]->gambar1) }}" alt="..." />
                                    <p>{{ $portfolio[4]->title7 }}</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>{{ $portfolio[4]->title8 }}</strong>
                                            
                                        </li>
                                        <li>
                                            <strong>{{ $portfolio[4]->title9 }}</strong>
                                            
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        {{ $portfolio[4]->title10 }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">{{ $portfolio[5]->title5 }}</h2>
                                    <p class="item-intro text-muted">{{ $portfolio[5]->title6 }}</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ ('assets/img/portfolio/'.$portfolio[5]->gambar1) }}" alt="..." />
                                    <p>{{ $portfolio[0]->title7 }}</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>{{ $portfolio[5]->title8 }}</strong>
                                            
                                        </li>
                                        <li>
                                            <strong>{{ $portfolio[5]->title9 }}</strong>
                                            
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        {{ $portfolio[5]->title10 }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
@endsection