@extends('layouts.main.app')

@section('stylesheets')

@endsection

@section('content')

<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image:url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
                <div class="col-md-6 text ftco-animate">
                    <h1 class="mb-4">Helping Your <span>Stay Happy One</span></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item" style="background-image:url(images/bg_2.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
                <div class="col-md-6 text ftco-animate">
                    <h1 class="mb-4">We Care <span>About Your Health</span></h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-services ftco-no-pb">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-doctor"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Qualitfied Doctors</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-ambulance"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Emergency Care</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-stethoscope"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Outdoor Checkup</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-24-hours"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">24 Hours Service</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftc-no-pb">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url(images/about.jpg);">
            </div>
            <div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
                <div class="heading-section mb-5">
                    <div class="pl-md-5 ml-md-5">
                        <span class="subheading">About Dr.care</span>
                        <h2 class="mb-4" style="font-size: 28px;">Medical specialty concerned with the care of
                            acutely ill hospitalized patients</h2>
                    </div>
                </div>
                <div class="pl-md-5 ml-md-5 mb-5">
                    <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it
                        would have been rewritten a thousand times and everything that was left from its origin
                        would be the word.</p>
                    <div class="row mt-5 pt-2">
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-first-aid-kit"></span></div>
                                <div class="text">
                                    <h3>Primary Care</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-dropper"></span></div>
                                <div class="text">
                                    <h3>Lab Test</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-experiment-results"></span></div>
                                <div class="text">
                                    <h3>Symptom Check</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-heart-rate"></span></div>
                                <div class="text">
                                    <h3>Heart Rate</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <span class="subheading">Departments</span>
                <h2 class="mb-4">Clinic Departments</h2>
                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the
                    necessary regelialia. It is a paradisematic country</p>
            </div>
        </div>
        <div class="ftco-departments">
            <div class="row">
                <div class="col-md-12 nav-link-wrap">
                    <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">1st Trimeseter</a>

                        <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">2nd Trimeseter</a>

                        <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">3rd Trimeseter</a>

                        <a class="nav-link ftco-animate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Videso</a>
                       
                        <a class="nav-link ftco-animate" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false">Food Habits & Lifestyle</a>




                    </div>
                </div>
                <div class="col-md-12 tab-wrap">

                    <div class="tab-content bg-light p-4 p-md-5 ftco-animate" id="v-pills-tabContent">
                        <!-- 1st -->
                        <div class="tab-pane py-2 fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
                            <div class="row departments">
                                <div class="col-lg-4 order-lg-last d-flex align-items-stretch">
                                    <div class="img d-flex align-self-stretch" style="background-image: url(images/background1.jpg);"></div>
                                </div>
                                <div class="col-lg-8">
                                    <h2>1st Trimeseter </h2>
                                    <p>Your first visit will focus on assessing your overall health, identifying any risk factors and determining your baby's gestational age. Your health care provider will ask detailed questions about your health history. Be honest. If you're uncomfortable discussing your health history in front of your partner.</p>

                                    <a href="/article/1st-trimeseter" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a>
                                </div>
                            </div>
                        </div>
                        <!-- 1st -->

                        <!-- 2nd -->
                        <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
                            <div class="row departments">
                                <div class="col-lg-4 order-lg-last d-flex align-items-stretch">
                                    <div class="img d-flex align-self-stretch" style="background-image: url(images/background1.jpg);"></div>
                                </div>
                                <div class="col-md-8">
                                    <h2>Surgical Deparments</h2>
                                    <p>On her way she met a copy. The copy warned the Little Blind Text, that where
                                        it came from it would have been rewritten a thousand times and everything
                                        that was left from its origin would be the word.</p>
                                
                                        <a href="/article/2nd-trimeseter" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a>

                                </div>
                            </div>
                        </div>
                        <!-- 2nd -->
                        
                        <!-- 3rd -->

                        <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
                            <div class="row departments">
                                <div class="col-lg-4 order-lg-last d-flex align-items-stretch">
                                    <div class="img d-flex align-self-stretch" style="background-image: url(images/background1.jpg);"></div>
                                </div>
                                <div class="col-md-8">
                                    <h2>Dental Deparments</h2>
                                    <p>On her way she met a copy. The copy warned the Little Blind Text, that where
                                        it came from it would have been rewritten a thousand times and everything
                                        that was left from its origin would be the word.</p>
                                
                                        <a href="/article/3rd-trimeseter" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a>
                                
                                </div>
                            </div>
                        </div>
                        <!-- 3rd -->

                        <!-- 4th -->
                        <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-day-4-tab">
                            <div class="row departments">
                                <div class="col-lg-4 order-lg-last d-flex align-items-stretch">
                                    <div class="img d-flex align-self-stretch" style="background-image: url(images/background1.jpg);"></div>
                                </div>
                                <div class="col-md-8">
                                    <h2>Ophthalmology Deparments</h2>
                                    <p>On her way she met a copy. The copy warned the Little Blind Text, that where
                                        it came from it would have been rewritten a thousand times and everything
                                        that was left from its origin would be the word.</p>
                                        <a href="/article/1st-trimeseter" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a>
                                
                                </div>
                            </div>
                        </div>
                        <!-- 4th -->

                        <!-- 5th -->
                        <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-day-5-tab">
                            <div class="row departments">
                                <div class="col-lg-4 order-lg-last d-flex align-items-stretch">
                                    <div class="img d-flex align-self-stretch" style="background-image: url(images/foodhabbits.jpg);"></div>
                                </div>
                                <div class="col-md-8">
                                    <h2>Food Habbits & LifeStyle</h2>
                                    <p>On her way she met a copy. The copy warned the Little Blind Text, that where
                                        it came from it would have been rewritten a thousand times and everything
                                        that was left from its origin would be the word.</p>
                                        <a href="/article/1st-trimeseter" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a>
                                
                                </div>
                            </div>
                        </div>
                        <!-- 5th -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <span class="subheading">Blog</span>
                <h2 class="mb-4">Recent Blog</h2>
                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the
                    necessary regelialia. It is a paradisematic country</p>
            </div>
        </div>
        <div class="row">
            @foreach ($blogs as $key => $blog)
            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20" style="background-image: url('{{ $key % 2 == 0 ? asset('images/pregnant_background.jpg') : asset('images/pregnant_background2.jpg') }}');">
                        <div class="meta-date text-center p-2">
                            @php
                            $date = new DateTime($blog->created_at);
                            @endphp
                            <span class="day">{{ $date->format('d') }}</span>
                            <span class="mos">{{ $date->format('M') }}</span>
                            <span class="yr">{{ $date->format('Y') }}</span>
                        </div>
                    </a>
                    <div class="text bg-white p-4">
                        <h3 class="heading"><a href="/blogs/single/{{ $blog->id }}">{{ $blog->title }}</p>
                                <div class="d-flex align-items-center mt-4">
                                    <p class="mb-0"><a href="/blogs/single/{{ $blog->id }}" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                                    <p class="ml-auto mb-0">
                                        <a href="#" class="mr-2">Admin</a>
                                        <a href="#" class="meta-chat"><span class="icon-chat"></span>
                                            {{ $blog->views }}</a>
                                    </p>
                                </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


@endsection

@section('scripts')

@endsection