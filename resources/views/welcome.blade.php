<!DOCTYPE html>
<html lang="en">

<head>
	<title>Dr.care</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">


	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
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
					<li class="nav-item active"><a href="/" class="nav-link pl-0">Home</a></li>
					<li class="nav-item"><a href="/about" class="nav-link">About</a></li>
					<li class="nav-item"><a href="/questions" class="nav-link">Questions</a></li>
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
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
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
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
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
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
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
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
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
							<h2 class="mb-4" style="font-size: 28px;">Medical specialty concerned with the care of acutely ill hospitalized patients</h2>
						</div>
					</div>
					<div class="pl-md-5 ml-md-5 mb-5">
						<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
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
					<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
				</div>
			</div>
			<div class="ftco-departments">
				<div class="row">
					<div class="col-md-12 nav-link-wrap">
						<div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
							<a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Neurology</a>

							<a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Surgical</a>

							<a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Dental</a>

							<a class="nav-link ftco-animate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Ophthalmology</a>

							<a class="nav-link ftco-animate" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false">Cardiology</a>

						</div>
					</div>
					<div class="col-md-12 tab-wrap">

						<div class="tab-content bg-light p-4 p-md-5 ftco-animate" id="v-pills-tabContent">

							<div class="tab-pane py-2 fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
								<div class="row departments">
									<div class="col-lg-4 order-lg-last d-flex align-items-stretch">
										<div class="img d-flex align-self-stretch" style="background-image: url(images/dept-1.jpg);"></div>
									</div>
									<div class="col-lg-8">
										<h2>Neurological Deparments</h2>
										<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
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

							<div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
								<div class="row departments">
									<div class="col-lg-4 order-lg-last d-flex align-items-stretch">
										<div class="img d-flex align-self-stretch" style="background-image: url(images/dept-2.jpg);"></div>
									</div>
									<div class="col-md-8">
										<h2>Surgical Deparments</h2>
										<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
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
							<div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
								<div class="row departments">
									<div class="col-lg-4 order-lg-last d-flex align-items-stretch">
										<div class="img d-flex align-self-stretch" style="background-image: url(images/dept-3.jpg);"></div>
									</div>
									<div class="col-md-8">
										<h2>Dental Deparments</h2>
										<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
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

							<div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-day-4-tab">
								<div class="row departments">
									<div class="col-lg-4 order-lg-last d-flex align-items-stretch">
										<div class="img d-flex align-self-stretch" style="background-image: url(images/dept-4.jpg);"></div>
									</div>
									<div class="col-md-8">
										<h2>Ophthalmology Deparments</h2>
										<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
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

							<div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-day-5-tab">
								<div class="row departments">
									<div class="col-lg-4 order-lg-last d-flex align-items-stretch">
										<div class="img d-flex align-self-stretch" style="background-image: url(images/dept-5.jpg);"></div>
									</div>
									<div class="col-md-8">
										<h2>Cardiology Deparments</h2>
										<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
										<div class="row mt-5 pt-2">
											<div class="col-md-6">
												<div class="services-2 d-flex">
													<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-idea"></span></div>
													<div class="text">
														<h3>Primary Care</h3>
														<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="services-2 d-flex">
													<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-idea"></span></div>
													<div class="text">
														<h3>Lab Test</h3>
														<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="services-2 d-flex">
													<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-idea"></span></div>
													<div class="text">
														<h3>Symptom Check</h3>
														<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="services-2 d-flex">
													<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-idea"></span></div>
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
					<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 ftco-animate">
					<div class="blog-entry">
						<a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
							<div class="meta-date text-center p-2">
								<span class="day">23</span>
								<span class="mos">January</span>
								<span class="yr">2019</span>
							</div>
						</a>
						<div class="text bg-white p-4">
							<h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<div class="d-flex align-items-center mt-4">
								<p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
								<p class="ml-auto mb-0">
									<a href="#" class="mr-2">Admin</a>
									<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="blog-entry">
						<a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
							<div class="meta-date text-center p-2">
								<span class="day">23</span>
								<span class="mos">January</span>
								<span class="yr">2019</span>
							</div>
						</a>
						<div class="text bg-white p-4">
							<h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<div class="d-flex align-items-center mt-4">
								<p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
								<p class="ml-auto mb-0">
									<a href="#" class="mr-2">Admin</a>
									<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="blog-entry">
						<a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
							<div class="meta-date text-center p-2">
								<span class="day">23</span>
								<span class="mos">January</span>
								<span class="yr">2019</span>
							</div>
						</a>
						<div class="text bg-white p-4">
							<h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<div class="d-flex align-items-center mt-4">
								<p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
								<p class="ml-auto mb-0">
									<a href="#" class="mr-2">Admin</a>
									<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
								</p>
							</div>
						</div>
					</div>
				</div>
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
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
		</svg></div>


	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/jquery.timepicker.min.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>

</body>

</html>