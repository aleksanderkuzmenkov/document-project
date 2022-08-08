@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center">
    <div class="contact-wrapper-form pt-115 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.5s">
        <h4 class="contact-title pb-10"><i class="lni-envelope"></i> {{__('Step 2/3')}} {{__('Please get your contact information')}}</h4>
        <form id="contact-form" action="{{ route('personContacts')}}" method="post">
            @csrf
            <input name="person_id" type="hidden" value="{{$person_id}}">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-form mt-45">
                        <label>Enter Your phone number {{ $person_id }}</label>
                        <input type="tel" name="phone_number" placeholder="Phone Number">
                    </div> <!-- contact-form -->
                </div>
                <div class="col-md-12">
                    <div class="contact-form mt-45">
                        <label>Enter Your mobile number</label>
                        <input type="tel" name="mobile_number" placeholder="Mobile nmber">
                    </div> <!-- contact-form -->
                </div>
                <div class="col-md-12">
                    <div class="contact-form mt-45">
                        <label>Your date E-Mail address</label>
                        <input type="email" name="email_address" placeholder="E-Mail address">
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
