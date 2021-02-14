@extends('layouts.main.app')

@section('stylesheets')

@endsection

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">Blog</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ftco-animate">
                <h2 class="mb-3">#{{ $blog->id }}. {{ $blog->title }}</h2>

                <p>{{ $blog->description }}</p>
                <div class="about-author d-flex p-4 bg-light">
                    <div class="bio mr-5" style="width: 100px;">
                        <img src="/images/male.jpg" alt="Image placeholder" class="img-fluid mb-4">
                    </div>
                    <div class="desc">
                        <h3>Admin</h3>
                        <div class="meta mb-2">{{ $blog->created_at }}</div>
                    </div>
                </div>


                <div class="pt-5 mt-5">
                </div>
            </div> <!-- .col-md-8 -->

        </div>
    </div>
</section>


@endsection

@section('scripts')

@endsection