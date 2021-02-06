<!DOCTYPE html>
<html lang="en">

<head>
  <title>Dr.care - Free Bootstrap 4 Template by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="/css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="/css/animate.css">

  <link rel="stylesheet" href="/css/owl.carousel.min.css">
  <link rel="stylesheet" href="/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="/css/magnific-popup.css">

  <link rel="stylesheet" href="/css/aos.css">

  <link rel="stylesheet" href="/css/ionicons.min.css">

  <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="/css/jquery.timepicker.css">


  <link rel="stylesheet" href="/css/flaticon.css">
  <link rel="stylesheet" href="/css/icomoon.css">
  <link rel="stylesheet" href="/css/style.css">
</head>

<body>
  <nav class="navbar py-4 navbar-expand-lg ftco_navbar navbar-light bg-light flex-row">
    <div class="container">
      <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
        <div class="col-lg-2 pr-4 align-items-center">
          <a class="navbar-brand" href="/">Dr.<span>care</span></a>
        </div>
        <div class="col-lg-10 d-none d-md-block">
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
        </div>
      </div>
    </div>
  </nav>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      <p class="button-custom order-lg-last mb-0">
        @if(! Auth::check())
        <a class="btn btn-secondary py-2 px-3" href="/login">Login</a>
        <a class="btn btn-secondary py-2 px-3" href="/register">Register</a>
        @else

        @if( Auth::user()->role == 'admin')
        <a class="btn btn-secondary py-2 px-3" href="/admin/dashboard/doctor">Go to admin dashboard</a>
        @endif
        <a href="{{ route('logout') }}" class="btn btn-secondary py-2 px-3" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
        </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>

      @endif
      </a>
      </p>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item "><a href="/" class="nav-link pl-0">Home</a></li>
          <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
          <li class="nav-item active"><a href="/questions" class="nav-link">Questions</a></li>
          <li class="nav-item"><a href="/contact" class="nav-link">Service</a></li>
          <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>

          <!-- for notification -->
          <!-- <li class="nav-item">
						<a href="/login" class="nav-link">
							<div class="dropdown">
								<button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Dropdown button
								</button>
								<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<a class="dropdown-item" href="#">Something else here</a>
								</div>
							</div>
						</a>
					</li> -->
          <!-- for notification -->

        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Questioned asked by patients</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 ftco-animate">
          <h2 class="mb-3">#{{ $question->id }}. {{ $question->title }}</h2>

          <p>{{ $question->detailed_question }}</p>
          <div class="about-author d-flex p-4 bg-light">
            <div class="bio mr-5">
              <img src="/images/male.jpg" alt="Image placeholder" class="img-fluid mb-4">
            </div>
            <div class="desc">
              <h3>{{ $question->user->name }}</h3>
              <div class="meta mb-2">{{ $question->created_at }}</div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>
          </div>


          <div class="pt-5 mt-5">
            <h3 class="mb-5 h4 font-weight-bold">{{ $question->comments_count }} Comments</h3>
            <ul class="comment-list">
              @if($question->comments_count > 0)

              @foreach($question->comments as $comment)
              <li class="comment">
                <div class="vcard bio">
                  <img src="/images/male.jpg" alt="Image placeholder">
                </div>
                <div class="comment-body">
                  <h3>{{ $comment->user->name  }}</h3>
                  <div class="meta mb-2">{{ $comment->created_at }}</div>
                  <p>{{ $comment->comment }}</p>
                </div>

                <!-- <ul class="children">
                  <li class="comment">
                    <div class="vcard bio">
                      <img src="images/male.jpg" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                      <h3>John Doe</h3>
                      <div class="meta mb-2">January 03, 2019 at 2:21pm</div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                      <p><a href="#" class="reply">Reply</a></p>
                    </div>


                    <ul class="children">
                      <li class="comment">
                        <div class="vcard bio">
                          <img src="images/male.jpg" alt="Image placeholder">
                        </div>
                        <div class="comment-body">
                          <h3>John Doe</h3>
                          <div class="meta mb-2">January 03, 2019 at 2:21pm</div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                          <p><a href="#" class="reply">Reply</a></p>
                        </div>

                        <ul class="children">
                          <li class="comment">
                            <div class="vcard bio">
                              <img src="images/male.jpg" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                              <h3>John Doe</h3>
                              <div class="meta mb-2">January 03, 2019 at 2:21pm</div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                              <p><a href="#" class="reply">Reply</a></p>
                            </div>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul> -->
              </li>
              @endforeach
              @endif
            </ul>
            <!-- END comment-list -->

            @if(!Auth::check())
            <div class="comment-form-wrap pt-5">
              <div class="p-5 bg-light">
                <a href="/login" class="form-group">
                  <h3 class="btn py-3 px-4 btn-primary mb-5 h4 font-weight-bold">Sign in to comment</h3>
                </a>
              </div>
            </div>
            @else
            <div class="comment-form-wrap pt-5">
              <h3 class="mb-5 h4 font-weight-bold">Leave a comment</h3>
              <form action="{{ Auth::user()->role == 'doctor' ? '/app/doctor/add/comment' : '/app/patient/add/comment' }}" method="post" class="p-5 bg-light">
                @csrf
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea name="comment" id="message" cols="30" rows="10" class="form-control"></textarea>
                  <input name="question_id" value="{{ $question->id }}" style="display:none;">
                </div>
                <div class="form-group">
                  <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                </div>
              </form>
            </div>
            @endif
          </div>
        </div> <!-- .col-md-8 -->

      </div>
    </div>
  </section>

  <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-5">
            <h2 class="ftco-heading-2 logo">Dr.<span>care</span></h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
          <div class="ftco-footer-widget mb-5">
            <h2 class="ftco-heading-2">Have a Questions?</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-5 ml-md-4">
            <h2 class="ftco-heading-2">Links</h2>
            <ul class="list-unstyled">
              <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
              <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
              <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
              <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
            </ul>
          </div>
          <div class="ftco-footer-widget mb-5 ml-md-4">
            <h2 class="ftco-heading-2">Services</h2>
            <ul class="list-unstyled">
              <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Neurolgy</a></li>
              <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Dentist</a></li>
              <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Ophthalmology</a></li>
              <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Cardiology</a></li>
              <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Surgery</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-5">
            <h2 class="ftco-heading-2">Recent Blog</h2>
            <div class="block-21 mb-4 d-flex">
              <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
              <div class="text">
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> Dec 25, 2018</a></div>
                  <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                  <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
              </div>
            </div>
            <div class="block-21 mb-5 d-flex">
              <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
              <div class="text">
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> Dec 25, 2018</a></div>
                  <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                  <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
              </div>
            </div>
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
  <div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg>
  </div>


  <script src="/js/jquery.min.js"></script>
  <script src="/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/jquery.easing.1.3.js"></script>
  <script src="/js/jquery.waypoints.min.js"></script>
  <script src="/js/jquery.stellar.min.js"></script>
  <script src="/js/owl.carousel.min.js"></script>
  <script src="/js/jquery.magnific-popup.min.js"></script>
  <script src="/js/aos.js"></script>
  <script src="/js/jquery.animateNumber.min.js"></script>
  <script src="/js/bootstrap-datepicker.js"></script>
  <script src="/js/jquery.timepicker.min.js"></script>
  <script src="/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="/js/google-map.js"></script>
  <script src="/js/main.js"></script>

</body>

</html>