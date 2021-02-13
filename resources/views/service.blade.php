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


                    @if($get_input == 'true')
                    <h3 class="mb-5 h4 font-weight-bold">Please Provide necessary information</h3>
                    <form action="/app/patient/service/add-stat" method="post" class="p-5 bg-light">
                        @csrf

                        <div class="form-group">
                            <label>You are now pregnant in week *</label>
                            <input type="number" value="{{ old('pregnancy_week') }}" name="pregnancy_week" class="form-control @error('pregnancy_week') is-invalid @enderror">
                        </div>
                        @error('pregnancy_week')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="form-group">
                            <label>Your Age *</label>
                            <input type="number" value="{{ old('age') }}" name="age" class="form-control @error('age') is-invalid @enderror">
                        </div>
                        @error('age')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="form-group">
                            <label>Is it you are carrying it for first child</label></br>
                            <input type="radio" id="carrying_first_child_yes" name="carrying_first_child" value="yes">
                            <label for="carrying_first_child_yes">Yes</label><br>
                            <input type="radio" id="carrying_first_child_no" name="carrying_first_child" value="no">
                            <label for="carrying_first_child_no">No</label><br>
                        </div>
                        @error('carrying_first_child')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="form-group">
                            <label>Your Height (in cm) *</label>
                            <input type="number" value="{{ old('height') }}" name="height" class="form-control @error('title') is-invalid @enderror">
                        </div>
                        @error('height')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="form-group">
                            <label>Your Weight (in lbs)*</label>
                            <input type="number" value="{{ old('weight') }}" name="weight" class="form-control @error('title') is-invalid @enderror">
                        </div>
                        @error('weight')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="form-group">
                            <label>Your BMI (before pregnancy) *</label>
                            <input type="text" value="{{ old('bmi') }}" name="bmi" class="form-control @error('title') is-invalid @enderror">
                        </div>
                        @error('bmi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="form-group">
                            <label>Your Blood Pressure *</label></br>
                            <select name="bp" class="form-control @error('title') is-invalid @enderror">
                                <option value="<120/80">Less than 120/80</option>
                                <option value=">120/80">More than 120/80</option>

                            </select>
                        </div>
                        @error('bp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="form-group">
                            <label>If you are in 20 weeks or more and you have proteinuria? *</label></br>
                            <input type="radio" id="have_proteinuria" name="have_proteinuria" value="yes">
                            <label for="have_proteinuria_yes">Yes</label><br>
                            <input type="radio" id="have_proteinuria_no" name="have_proteinuria" value="no">
                            <label for="have_proteinuria_no">No</label><br>
                        </div>
                        @error('have_proteinuria')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="form-group">
                            <label>Do you have any STI like HIV, Syphilis and genital herpes? *</label></br>
                            <input type="radio" id="have_STI" name="have_STI" value="yes">
                            <label for="have_STI_yes">Yes</label><br>
                            <input type="radio" id="have_STI_no" name="have_STI" value="no">
                            <label for="have_STI_no">No</label><br>
                        </div>
                        @error('have_STI')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="form-group">
                            <label>Do you have any heart diseases? *</label></br>
                            <input type="radio" id="have_heart_diseases" name="have_heart_diseases" value="yes">
                            <label for="have_heart_diseases_yes">Yes</label><br>
                            <input type="radio" id="have_heart_diseases_no" name="have_heart_diseases" value="no">
                            <label for="have_heart_diseases_no">No</label><br>
                        </div>
                        @error('have_heart_diseases')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="form-group">
                            <label>Do you have any kidney diseases? *</label></br>
                            <input type="radio" id="have_kidney_diseases" name="have_kidney_diseases" value="yes">
                            <label for="have_kidney_diseases_yes">Yes</label><br>
                            <input type="radio" id="have_kidney_diseases_no" name="have_kidney_diseases" value="no">
                            <label for="have_kidney_diseases_no">No</label><br>
                        </div>
                        @error('have_kidney_diseases')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="form-group">
                            <label>Do you have hypothyroidism? *</label></br>
                            <input type="radio" id="have_hypothyroidism" name="have_hypothyroidism" value="yes">
                            <label for="have_hypothyroidism_yes">Yes</label><br>
                            <input type="radio" id="have_hypothyroidism_no" name="have_hypothyroidism" value="no">
                            <label for="have_hypothyroidism_no">No</label><br>
                        </div>
                        @error('have_hypothyroidism')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="form-group">
                            <label>Do you have Anemia? *</label></br>
                            <input type="radio" id="have_anemia" name="have_anemia" value="yes">
                            <label for="have_anemia_yes">Yes</label><br>
                            <input type="radio" id="have_anemia_no" name="have_anemia" value="no">
                            <label for="have_anemia_no">No</label><br>
                        </div>
                        @error('have_anemia')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="form-group">
                            <label>Did you have previous miscarriage? *</label></br>
                            <input type="radio" id="have_previous_miscarriage" name="have_previous_miscarriage" value="yes">
                            <label for="have_previous_miscarriage_yes">Yes</label><br>
                            <input type="radio" id="have_previous_miscarriage_no" name="have_previous_miscarriage" value="no">
                            <label for="have_previous_miscarriage_no">No</label><br>
                        </div>
                        @error('have_previous_miscarriage')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="form-group">
                            <label>Did Previous child history in CS? *</label></br>
                            <input type="radio" id="have_previous_cs" name="have_previous_cs" value="yes">
                            <label for="have_previous_cs_yes">Yes</label><br>
                            <input type="radio" id="have_previous_cs_no" name="have_previous_cs" value="no">
                            <label for="have_previous_cs_no">No</label><br>
                        </div>
                        @error('have_previous_cs')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="form-group">
                            <label>Do you carrying twin or multiple babies after 12 weeks? *</label></br>
                            <input type="radio" id="is_carrying_twin_or_multiple" name="is_carrying_twin_or_multiple" value="yes">
                            <label for="is_carrying_twin_or_multiple_yes">Yes</label><br>
                            <input type="radio" id="is_carrying_twin_or_multiple_no" name="is_carrying_twin_or_multiple" value="no">
                            <label for="is_carrying_twin_or_multiple_no">No</label><br>
                        </div>
                        @error('is_carrying_twin_or_multiple')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="form-group">
                            <label>Glucose Before Fasting (in mg/dl)*</label>
                            <input type="number" value="{{ old('glucose_before_fasting') }}" name="glucose_before_fasting" class="form-control @error('title') is-invalid @enderror">
                        </div>
                        @error('glucose_before_fasting')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="form-group">
                            <label>Glucose After Fasting (in mg/dl)*</label>
                            <input type="number" value="{{ old('glucose_after_fasting') }}" name="glucose_after_fasting" class="form-control @error('title') is-invalid @enderror">
                        </div>
                        @error('glucose_after_fasting')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="form-group">
                            <input type="submit" value="Submit" class="btn py-3 px-4 btn-primary">
                        </div>
                    </form>
                    @else
                    <h3 class="mb-5 h4 font-weight-bold">Thank you for providing your information. You possible expected result in shown below: </h3>

                    <div class="d-flex justify-content-center font-weight-bold mb-5">
                        <h4>You have a high risk of C Section.</h4>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>1. You are now pregnant in week: </label>
                        </div>
                        <div class="col-6">
                            <p>10</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>2. Your Age: </label>
                        </div>
                        <div class="col-6">
                            <p>10</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>3. Is it you are carrying it for first child: </label>
                        </div>
                        <div class="col-6">
                            <p>10</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>4. Your Height: </label>
                        </div>
                        <div class="col-6">
                            <p>10cm</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>5. Your Height: </label>
                        </div>
                        <div class="col-6">
                            <p>10lbs</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>6. Your BMI (before pregnancy) : </label>
                        </div>
                        <div class="col-6">
                            <p>10</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>7. Your Blood Pressure: </label>
                        </div>
                        <div class="col-6">
                            <p>10</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>8. If you are in 20 weeks or more and you have proteinuria: </label>
                        </div>
                        <div class="col-6">
                            <p>10</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>9. Do you have any STI like HIV, Syphilis and genital herpes: </label>
                        </div>
                        <div class="col-6">
                            <p>10</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>10. Do you have any heart diseases: </label>
                        </div>
                        <div class="col-6">
                            <p>10</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>11. Do you have any kidney diseases: </label>
                        </div>
                        <div class="col-6">
                            <p>10</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>12. Do you have hypothyroidism: </label>
                        </div>
                        <div class="col-6">
                            <p>10</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>13. Do you have Anemia: </label>
                        </div>
                        <div class="col-6">
                            <p>10</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>14. Did you have previous miscarriage: </label>
                        </div>
                        <div class="col-6">
                            <p>10</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>15. Did Previous child history in CS: </label>
                        </div>
                        <div class="col-6">
                            <p>10</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>16. Do you carrying twin or multiple babies after 12 weeks: </label>
                        </div>
                        <div class="col-6">
                            <p>10</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>1. Glucose Before Fasting: </label>
                        </div>
                        <div class="col-6">
                            <p>10</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>1. Glucose After Fasting: </label>
                        </div>
                        <div class="col-6">
                            <p>10</p>
                        </div>
                    </div>
                    @endif
                </div>
            </div> <!-- .col-md-8 -->

        </div>
    </div>
</section>


@endsection

@section('scripts')

@endsection