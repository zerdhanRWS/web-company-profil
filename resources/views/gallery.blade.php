@extends('layouts.main')
@section('gallery')
    <!-- Gallery Grid-->
    @if ($gallery->count())
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">{{ $gallery[0]->title1 }}</h2>
                <h3 class="section-subheading text-muted">{{ $gallery[0]->title2 }}</h3>
            </div>  
   
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Gallery item 1-->
                    <div class="portfolio-item">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"></div>
                        </div>
                        <img class="img-fluid" src="{{ ('assets/img/portfolio/'.$gallery[0]->gambar1) }}" alt="..." />
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">{{ $gallery[0]->subtitle1 }}</div>
                            <div class="portfolio-caption-subheading text-muted">{{ $gallery[0]->subtitle2 }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Gallery item 2-->
                    <div class="portfolio-item">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"></div>
                            </div>
                            <img class="img-fluid" src="{{ ('assets/img/portfolio/'.$gallery[1]->gambar1) }}" alt="..." />
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">{{ $gallery[1]->subtitle1 }}</div>
                            <div class="portfolio-caption-subheading text-muted">{{ $gallery[1]->subtitle2 }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Gallery item 3-->
                    <div class="portfolio-item">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"></div>
                            </div>
                            <img class="img-fluid" src="{{ ('assets/img/portfolio/'.$gallery[2]->gambar1) }}" alt="..." />
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">{{ $gallery[2]->subtitle1 }}</div>
                            <div class="portfolio-caption-subheading text-muted">{{ $gallery[2]->subtitle2 }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <!-- Gallery item 4-->
                    <div class="portfolio-item">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"></div>
                            </div>
                            <img class="img-fluid" src="{{ ('assets/img/portfolio/'.$gallery[3]->gambar1) }}" alt="..." />
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">{{ $gallery[3]->subtitle1 }}</div>
                            <div class="portfolio-caption-subheading text-muted">{{ $gallery[3]->subtitle2 }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <!-- Gallery item 5-->
                    <div class="portfolio-item">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"></div>
                            </div>
                            <img class="img-fluid" src="{{ ('assets/img/portfolio/'.$gallery[4]->gambar1) }}" alt="..." />
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">{{ $gallery[4]->subtitle1 }}</div>
                            <div class="portfolio-caption-subheading text-muted">{{ $gallery[4]->subtitle2 }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Gallery item 6-->
                    <div class="portfolio-item">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"></div>
                            </div>
                            <img class="img-fluid" src="{{ ('assets/img/portfolio/'.$gallery[5]->gambar1) }}" alt="..." />
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">{{ $gallery[5]->subtitle1 }}</div>
                            <div class="portfolio-caption-subheading text-muted">{{ $gallery[5]->subtitle2 }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <br><br>
            <div class="text-center">
                <h2 class="section-heading text-uppercase">{{ $gallery[0]->title3 }}</h2>
                <h3 class="section-subheading text-muted">{{ $gallery[0]->title4 }}</h3>
            </div> 

            <video width="360px" height="350px" controls>
                <source src="{{ ('assets/img/video/'.$gallery[0]->video1) }}" type="video/mp4">
                <source src="{{ ('assets/img/video/'.$gallery[0]->video1) }}" type="video/ogg">
            </video>

            <video width="360px" height="350px" controls>
                <source src="{{ ('assets/img/video/'.$gallery[1]->video1) }}" type="video/mp4">
                <source src="{{ ('assets/img/video/'.$gallery[1]->video1) }}" type="video/ogg">
            </video>

            <video width="360px" height="350px" controls>
                <source src="{{ ('assets/img/video/'.$gallery[2]->video1) }}" type="video/mp4">
                <source src="{{ ('assets/img/video/'.$gallery[2]->video1) }}" type="video/ogg">
            </video>

            <video width="360px" height="350px" controls>
                <source src="{{ ('assets/img/video/'.$gallery[3]->video1) }}" type="video/mp4">
                <source src="{{ ('assets/img/video/'.$gallery[3]->video1) }}" type="video/ogg">
            </video>

            <video width="360px" height="350px" controls>
                <source src="{{ ('assets/img/video/'.$gallery[4]->video1) }}" type="video/mp4">
                <source src="{{ ('assets/img/video/'.$gallery[4]->video1) }}" type="video/ogg">
            </video>

            <video width="360px" height="350px" controls>
                <source src="{{ ('assets/img/video/'.$gallery[5]->video1) }}" type="video/mp4">
                <source src="{{ ('assets/img/video/'.$gallery[5]->video1) }}" type="video/ogg">
            </video>
        </div>
    </section>
    @endif
@endsection

