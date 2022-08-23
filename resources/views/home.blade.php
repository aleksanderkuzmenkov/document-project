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
      <div class="col-md-4 document">
        <a href="/"><img class="image" src="{{ URL::asset('images/document.jpg'); }}" alt="" ></a>
        <div class="middle">
            <a href="/"><img class="image" src="{{ URL::asset('images/plus.png'); }}" width="50px" alt="" ></a>
        </div>
      </div>

      <div class="col-md-4 document">
        <a href="/"><img class="image" src="{{ URL::asset('images/document.jpg'); }}" alt="" ></a>
        <div class="middle">
            <a href="/"><img class="image" src="{{ URL::asset('images/plus.png'); }}" width="50px" alt="" ></a>
        </div>
      </div>
  </div>
</div>
@endsection
