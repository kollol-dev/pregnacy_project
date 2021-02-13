@extends('layouts.main.app')

@section('stylesheets')

@endsection

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <h1 class="mb-2 bread">As a question</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row">
      <div class="col-md-12 py-5 pr-md-5">
        <div class="heading-section heading-section-white ftco-animate mb-5">
          <span class="subheading">Consultation</span>
          <h2 class="mb-4">Free Consultation</h2>
          <p>Give a title to and describe what exactly do you want to know in the description box.</p>
        </div>
        <form action="/app/patient/add/question" method="post" class="appointment-form ftco-animate">
          @csrf
          <div class="d-md-flex">
            <div class="form-group">
              <input type="text" class="form-control" name="title" placeholder="Title">
            </div>
          </div>
          @if(isset($error->title))
          <div class="alert alert-danger" role="alert">
            Title is invalid or empty!
          </div>
          @endif
          <!-- <div class="d-md-flex">
	    					<div class="form-group">
		    					<div class="form-field">
          					<div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                      	<option value="">Select Your Services</option>
                        <option value="">Neurology</option>
                        <option value="">Cardiology</option>
                        <option value="">Dental</option>
                        <option value="">Ophthalmology</option>
                        <option value="">Other Services</option>
                      </select>
                    </div>
		              </div>
		    				</div>
	    					<div class="form-group ml-md-4">
		    					<input type="text" class="form-control" placeholder="Phone">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-md-calendar"></span></div>
		            		<input type="text" class="form-control appointment_date" placeholder="Date">
	            		</div>
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-ios-clock"></span></div>
		            		<input type="text" class="form-control appointment_time" placeholder="Time">
	            		</div>
		    				</div>
	    				</div> -->
          <div class="d-md-flex">
            <div class="form-group">
              <textarea cols="30" rows="8" class="form-control" name="description" placeholder="Description"></textarea>
            </div>
          </div>
          @if(isset($error->description))
          <div class="alert alert-danger" role="alert">
            Description is invalid or empty!
          </div>
          @endif

          <div class="d-md-flex">
            <div class="form-group ml-md-4">
              <input type="submit" value="Submit" class="btn btn-secondary py-3 px-4">
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>
</section>


@endsection

@section('scripts')

@endsection