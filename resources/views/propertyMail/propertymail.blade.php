<div>
    Sehr geehrte Damen und Herren,<br>

    ich bin

</div>



{{-- <table class="table table-bordered">
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

</table> --}}