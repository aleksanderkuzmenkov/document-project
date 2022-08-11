@extends('layouts.app')

@section('content')

@if(count( $persons ) == 0 )
    <div class="card">
        <div class="card-body">
        Sie haben noch keine Personen angelegt. Folgen Sie bitte dieses Link um Personen und Familienmitglieder anzulegen.
        </div>
    </div>
@endif

<div class="container mt-5 mb-3">
  <div class="row">
      <div class="col-md-4">
          <div class="card p-3 mb-2">
              <div class="d-flex justify-content-between">
                  <div class="d-flex flex-row align-items-center">
                      <div class="icon"> <i class="bx bxl-mailchimp"></i> </div>
                      <div class="ms-2 c-details">
                          <h6 class="mb-0">Mailchimp</h6> <span>1 days ago</span>
                      </div>
                  </div>
                  <div class="badge"> <span>Design</span> </div>
              </div>
              <div class="mt-5">
                @if(count( $persons ) > 0 )
                <h3 class="heading">Sie haben bereits {{ count( $persons ) }} Personen angelegt.</h3>
                @else
                <h3 class="heading">Sie haben noch keine Personen angelegt.</h3>
                @endif
                  <div class="mt-5">
                    <p>Sie bitte die Schaltfläsche "Personen bearbeiten" um weitere Personen anzulegen, oder breits angelegte zu bearbeten.</p>
                      <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="mt-3">
                        <i class="fa-solid fa-circle-check"></i>
                        <span class="text1">3 <span class="text2">von 3 Formularen ausgefüllt</span></span>
                      </div>
                  </div>
                  <div class="d-grid gap-2 col-12 mx-auto">
                    <a class="btn btn-primary" href="persons">Personen Verwalten</a>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-4 container">
        <a href="/"><img class="image" src="{{ URL::asset('images/document.jpg'); }}" alt="" ></a>
        <div class="middle">
            <a href="/"><img class="image" src="{{ URL::asset('images/plus.png'); }}" width="50px" alt="" ></a>
        </div>
      </div>
  </div>
</div>
@endsection
