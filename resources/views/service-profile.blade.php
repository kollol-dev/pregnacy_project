@extends('layouts.main.app')

@section('stylesheets')

@endsection

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">Service</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ftco-animate">
                <div class="comment-form-wrap pt-5">
                    <h3 class="mb-5 h4 font-weight-bold">All the previous history</h3>
                    <ul>
                        @foreach($services as $service)
                        <li>
                            <a href="{{ '/service/get/result/'.$service->id }}">{{ $service->result }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div> <!-- .col-md-8 -->

        </div>
    </div>
</section>


@endsection

@section('scripts')

@endsection