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

                    <div>
                        <h3 class="mb-5 h4 font-weight-bold">Thank you for providing your information. You possible expected result in shown below: </h3>
                    </div>
                    <div class="d-flex justify-content-center font-weight-bold mb-5">
                        <h4 style="border: 4px solid #e7e7e7;padding: 10px;">{{ $service->result }}</h4>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>1. You are now pregnant in week: </label>
                        </div>
                        <div class="col-6">
                            <p>{{ isset($service->pregnancy_week) ? $service->pregnancy_week : 'N\A' }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>2. Your Age: </label>
                        </div>
                        <div class="col-6">
                            <p>{{ isset($service->age) ? $service->age : 'N\A' }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>3. Is it you are carrying it for first child: </label>
                        </div>
                        <div class="col-6">
                            <p>{{ isset($service->carrying_first_child) ? $service->carrying_first_child : 'N\A' }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>4. Your Height: </label>
                        </div>
                        <div class="col-6">
                            <p>{{ isset($service->height) ? $service->height.'cm' : 'N\A' }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>5. Your Weight: </label>
                        </div>
                        <div class="col-6">
                            <p>{{ isset($service->weight) ? $service->weight.'lbs' : 'N\A' }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>6. Your BMI (before pregnancy) : </label>
                        </div>
                        <div class="col-6">
                            <p>{{ isset($service->bmi) ? $service->bmi : 'N\A' }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>7. Your Blood Pressure: </label>
                        </div>
                        <div class="col-6">
                            <p>{{ isset($service->bp) ? $service->bp : 'N\A' }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>8. If you are in 20 weeks or more and you have proteinuria: </label>
                        </div>
                        <div class="col-6">
                            <p>{{ isset($service->have_proteinuria) ? $service->have_proteinuria : 'N\A' }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>9. Do you have any STI like HIV, Syphilis and genital herpes: </label>
                        </div>
                        <div class="col-6">
                            <p>{{ isset($service->have_STI) ? $service->have_STI : 'N\A' }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>10. Do you have any heart diseases: </label>
                        </div>
                        <div class="col-6">
                            <p>{{ isset($service->have_heart_diseases) ? $service->have_heart_diseases : 'N\A' }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>11. Do you have any kidney diseases: </label>
                        </div>
                        <div class="col-6">
                            <p>{{ isset($service->have_kidney_diseases) ? $service->have_kidney_diseases : 'N\A' }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>12. Do you have hypothyroidism: </label>
                        </div>
                        <div class="col-6">
                            <p>{{ isset($service->have_hypothyroidism) ? $service->have_hypothyroidism : 'N\A' }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>13. Do you have Anemia: </label>
                        </div>
                        <div class="col-6">
                            <p>{{ isset($service->have_anemia) ? $service->have_anemia : 'N\A' }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>14. Did you have previous miscarriage: </label>
                        </div>
                        <div class="col-6">
                            <p>{{ isset($service->have_previous_miscarriage) ? $service->have_previous_miscarriage : 'N\A' }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>15. Did Previous child history in CS: </label>
                        </div>
                        <div class="col-6">
                            <p>{{ isset($service->have_previous_cs) ? $service->have_previous_cs : 'N\A' }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>16. Do you carrying twin or multiple babies after 12 weeks: </label>
                        </div>
                        <div class="col-6">
                            <p>{{ isset($service->is_carrying_twin_or_multiple) ? $service->is_carrying_twin_or_multiple : 'N\A' }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>1. Glucose Before Fasting: </label>
                        </div>
                        <div class="col-6">
                            <p>{{ isset($service->glucose_before_fasting) ? $service->glucose_before_fasting : 'N\A' }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>1. Glucose After Fasting: </label>
                        </div>
                        <div class="col-6">
                            <p>{{ isset($service->glucose_after_fasting) ? $service->glucose_after_fasting : 'N\A' }}</p>
                        </div>
                    </div>
                </div>
            </div> <!-- .col-md-8 -->

        </div>
    </div>
</section>


@endsection

@section('scripts')

@endsection