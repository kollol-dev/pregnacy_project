<!DOCTYPE html>
<html lang="en">

<head>
    <title>Apa - আপা</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('stylesheets')
</head>

<body>

    <nav class="navbar py-4 navbar-expand-lg ftco_navbar navbar-light bg-light flex-row">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
                <div class="col-lg-2 pr-4 align-items-center">
                    <a class="navbar-brand" href="/">Apa<span> আপা</span></a>
                </div>
                <!-- <div class="col-lg-10 d-none d-md-block">
                    <div class="row d-flex">
                        <div class="col-md-4 pr-4 d-flex topper align-items-center">
                            <div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span class="icon-map"></span></div>
                            <span class="text">Address: 198 West 21th Street, Suite 721 New York NY 10016</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                            <span class="text">Email: youremail@email.com</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                            <span class="text">Phone: + 1235 2355 98</span>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container d-flex align-items-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="button-custom order-lg-last mb-0 mt-2">
                @if (!Auth::check())
                <a class="btn btn-secondary py-2 px-3" href="/login">Login</a>
                <a class="btn btn-secondary py-2 px-3" href="/register">Register</a>
                @else

                @if (Auth::user()->role == 'admin')
                <a class="btn btn-secondary py-2 px-3" href="/admin/dashboard/doctor">Go to admin dashboard</a>
                @endif
                @if (Auth::user()->role == 'patient' && !Request::is('questions/add'))
                <a class="btn btn-secondary py-2 px-3" href="/questions/add">Ask questions</a>
                @endif
                <a href="{{ route('logout') }}" class="btn btn-secondary py-2 px-3" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

                <div class="dropdown" style="float: right; margin: 10px;">
                    <!-- <a class=" dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
                    <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="icon-bell"></span>
                    </a>
                    @php
                    $notifications = auth()->user()->notifications()->limit(9)->get();
                    @endphp

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        @foreach($notifications as $notification)
                        <a href="{{ $notification->data['link'] }}">
                            <div class="row">
                                <div class="col-lg-3 col-sm-3 col-3 text-center">
                                    <img src="/images/male.jpg" class="w-50 rounded-circle">
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8" style="overflow-wrap: break-word; word-wrap: break-word; hyphens: auto;">
                                    <span>
                                        {!! $notification->data['message'] !!}
                                    </span>
                                    <p style="color:#ff8000 !important">
                                        <small class="text-warning">{{ $notification['created_at'] }}</small>
                                    </p>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>

                </div>

                @endif
                </a>
            </div>


            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav mr-auto">
                    <li class="{{ Request::is('/') ? 'nav-item active' : 'nav-item' }}"><a href="/" class="nav-link pl-0">Home</a></li>
                    <li class="{{ Request::is('about') ? 'nav-item active' : 'nav-item' }}"><a href="/about" class="nav-link">About</a></li>
                    <li class="{{ Request::is('questions') ? 'nav-item active' : 'nav-item' }}"><a href="/questions" class="nav-link">Questions</a></li>
                    @if (Auth::check() && Auth::user()->role == 'patient')
                    <li class="{{ Request::is('service/add') ? 'nav-item active' : 'nav-item' }}"><a href="/service/add" class="nav-link">Check Up</a></li>
                    @endif
                    <li class="{{ Request::is('blogs') ? 'nav-item active' : 'nav-item' }}"><a href="/blogs" class="nav-link">Blogs</a></li>
                    <li class="{{ Request::is('contact') ? 'nav-item active' : 'nav-item' }}"><a href="/contact" class="nav-link">Contact</a></li>
                    @if (Auth::check() && Auth::user()->role == 'patient')
                    <li class="{{ Request::is('service/get/profile') || Request::is('service/result/get/{id}')? 'nav-item active' : 'nav-item' }}"><a href="/service/get/profile" class="nav-link">History</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    @yield('content')



    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2 logo">Apa - আপা</span></h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-5 ml-md-4">
                        <h2 class="ftco-heading-2">Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="/"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                            <li><a href="/about"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                            @if (Auth::check() && Auth::user()->role == 'patient')
                            <li><a href="/service/add"><span class="ion-ios-arrow-round-forward mr-2"></span>Check Up</a></li>
                            @endif
                            <li><a href="/blogs"><span class="ion-ios-arrow-round-forward mr-2"></span>Blogs</a></li>
                            <li><a href="/contact"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2">Recent Blog</h2>
                        @php
                        $recents = \App\Models\Blog::orderBy('id', 'desc')
                        ->limit('3')
                        ->get();
                        @endphp
                        @foreach ($recents as $key => $blog)
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url('{{ $key % 2 == 0 ? asset("images/pregnant_background.jpg") : asset("images/pregnant_background2.jpg") }}');"></a>
                            <div class="text">
                                <h3 class="heading"><a href="/blogs/{{ $blog->id }}">{{ $blog->title }}</a>
                                </h3>
                                <div class="meta">
                                    @php
                                    $date = new DateTime($blog->created_at);
                                    @endphp
                                    <div><a href="#"><span class="icon-calendar"></span>
                                            {{ $date->format('d M Y') }}</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> {{ $blog->views }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>

    <style>
        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            background-color: #17A2B8;
        }

        .dropdown-menu {
            top: 60px;
            right: 0px;
            left: unset;
            width: 460px;
            box-shadow: 0px 5px 7px -1px #c1c1c1;
            padding-bottom: 0px;
            padding: 0px;
        }

        .dropdown-menu:before {
            content: "";
            position: absolute;
            top: -20px;
            right: 12px;
            border: 10px solid #343A40;
            border-color: transparent transparent #343A40 transparent;
        }

        .notification-box {
            padding: 10px 0px;
        }

        .bg-gray {
            background-color: #eee;
        }

        @media (max-width: 640px) {
            .dropdown-menu {
                top: 50px;
                left: -16px;
                width: 290px;
            }

            .nav {
                display: block;
            }

            .nav .nav-item,
            .nav .nav-item a {
                padding-left: 0px;
            }

            .message {
                font-size: 13px;
            }
        }
    </style>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="{{ asset('js/google-map.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @yield('scripts')

</body>

</html>