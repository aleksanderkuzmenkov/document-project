@extends('layouts.app')

@section('content')
{{$counter}}
<div class="d-flex justify-content-center">
    <div class="contact-wrapper-form pt-115 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.5s">
        <h4 class="contact-title pb-10"><i class="lni-envelope"></i> {{__('Step 3/3')}} {{__('Please get your Address information')}}</h4>
        <form id="contact-form" action="{{ route('personAddresses')}}" method="post">
            @csrf
            <input name="person_id" type="hidden" value="{{$person_id}}">
            <div class="row">
                <div class="col-md-9">
                    <div class="contact-form mt-45">
                        <label>Enter Your street</label>
                        <input type="text" name="street" placeholder="Street">
                    </div> <!-- contact-form -->
                </div>
                <div class="col-md-3">
                    <div class="contact-form mt-45">
                        <label>Enter Your house number</label>
                        <input type="text" name="house_number" placeholder="House nmber">
                    </div> <!-- contact-form -->
                </div>
                <div class="col-md-12">
                    <div class="contact-form mt-45">
                        <label>Your date city</label>
                        <input type="text" name="city" placeholder="City">
                    </div> <!-- contact-form -->
                </div>
                <div class="col-md-12">
                    <div class="contact-form mt-45">
                        <label>Your Zip code</label>
                        <input type="text" name="zip_code" placeholder="Zip Code">
                    </div> <!-- contact-form -->
                </div>
                <div class="col-md-12">
                    <div class="contact-form mt-45">
                        <label>Your Country</label>
                        <input type="text" name="country" placeholder="Country">
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
