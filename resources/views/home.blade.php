@extends('layouts.app')

@section('content')
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
                  <button type="button" class="btn btn-primary btn-lg btn-block">Personen Verwalten</button>
                @endif
              </div>
          </div>
      </div>
      <div class="col-md-4">
          <div class="card p-3 mb-2">
              <div class="d-flex justify-content-between">
                  <div class="d-flex flex-row align-items-center">
                      <div class="icon"> <i class="bx bxl-dribbble"></i> </div>
                      <div class="ms-2 c-details">
                          <h6 class="mb-0">Dribbble</h6> <span>4 days ago</span>
                      </div>
                  </div>
                  <div class="badge"> <span>Product</span> </div>
              </div>
              <div class="mt-5">
                  <h3 class="heading">Junior Product<br>Designer-Singapore</h3>
                  <div class="mt-5">
                      <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="mt-3"> <span class="text1">42 Applied <span class="text2">of 70 capacity</span></span> </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-4">
          <div class="card p-3 mb-2">
              <div class="d-flex justify-content-between">
                  <div class="d-flex flex-row align-items-center">
                      <div class="icon"> <i class="bx bxl-reddit"></i> </div>
                      <div class="ms-2 c-details">
                          <h6 class="mb-0">Reddit</h6> <span>2 days ago</span>
                      </div>
                  </div>
                  <div class="badge"> <span>Design</span> </div>
              </div>
              <div class="mt-5">
                  <h3 class="heading">Software Architect <br>Java - USA</h3>
                  <div class="mt-5">
                      <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="mt-3"> <span class="text1">52 Applied <span class="text2">of 100 capacity</span></span> </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
