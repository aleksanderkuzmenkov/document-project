@extends('layouts.app')

@section('content')

{{--========================= EXPEREMENTAL CARDS =========================--}}
{{-- Line top --}}
{{-- <div class="line pt-75"></div> --}}

{{-- one horizontal --}}
{{-- <div class="d-flex justify-content-center pt-75">
    <div class="vl"></div>
</div> --}}

{{-- two --}}
{{-- <div class="d-flex justify-content-center">
    <div class="test"></div>
</div> --}}

{{-- <div class="d-flex justify-content-center">
    <div class="card clickable-row" style="width: 18rem;">
        <div class="card-header ">
            Featured
        </div>
        <ul class="list-group list-group-flush">
            @foreach ($persons as $person)
            <li class="list-group-item">Cras justo odio</li>
            @endforeach
        </ul>
    </div>
</div> --}}
{{--========================= EXPEREMENTAL CARDS END =========================--}}


<div class="container mt-5 mb-3 pt-100">
    <div class="row">
        <div class="text-right pb-30">
            <a class="btn btn-primary" href="{{url('persons/create')}}">Familienmitglieder hinzufügen</a>    
        </div>
        
        <table class="table table-bordered">
            <tr>
                <th>Vorname</th>
                <th>Nachname</th>
                <th>Geburtstag</th>
                <th>Beruf</th>
                <th>Angestellt seit</th>
            </tr>
            @foreach ($persons as $person)
            <tr class='clickable-row' data-href="persons/{{$person->id}}/edit">
                <td>{{ $person->first_name }}</td>
                <td>{{ $person->last_name }}</td>
                <td>{{ $person->date_of_birth }}</td>
                <td>{{ $person->profession }}</td>
                <td>{{ $person->employed_since }}</td>
                <td>

                    <form method="POST" action="{{ url('/persons' . '/' . $person->id) }}/delete" accept-charset="UTF-8" style="display:inline">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>                    
                </td>
            </tr>
            @endforeach
    
        </table>
    </div>
</div>

<script src="{{ URL::asset('js/person/person_index.js'); }}"></script>

@endsection
