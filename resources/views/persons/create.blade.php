@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center">
    <div class="contact-wrapper-form pt-115 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.5s">
        <h4 class="contact-title pb-10"><i class="lni-envelope"></i> {{__('Step 1/3')}} {{__('Please get your personal information')}}</h4>
        <form id="contact-form" action="{{ route('persons')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-form mt-45">
                        <label>Enter Your first name</label>
                        <input type="text" name="first_name" placeholder="First Name">
                    </div> <!-- contact-form -->
                </div>
                <div class="col-md-6">
                    <div class="contact-form mt-45">
                        <label>Enter Your last name</label>
                        <input type="text" name="last_name" placeholder="Last name">
                    </div> <!-- contact-form -->
                </div>
                <div class="col-md-12">
                    <div class="contact-form mt-45">
                        <label>Your date of bitrh</label>
                        <input type="date" name="date_of_birth" placeholder="Date of birth">
                    </div> <!-- contact-form -->
                </div>
                <div class="col-md-12">
                    <div class="contact-form mt-45">
                        <label>Your profession </label>
                        <input type="text" name="profession" placeholder="Profession">
                    </div> <!-- contact-form -->
                </div>
                <div class="col-md-12">
                    <div class="contact-form mt-45">
                        <label>Employed since </label>
                        <input type="date" name="employed_since" placeholder="Employed since">
                    </div> <!-- contact-form -->
                </div>
                <p class="form-message"></p>
                <div class="col-md-12">
                    <div class="contact-form mt-45">
                        <button type="submit" class="main-btn">Send Now</button>
                    </div> <!-- contact-form -->
                </div>
            </div> 
        </form>
    </div>
</div>

@endsection
