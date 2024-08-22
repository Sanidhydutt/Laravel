{!!  "<h1>Header page</h1>"  !!}

{{-- @foreach ($names as $value => $n)
<br>
{{ $value }}  -  {{ $n }}
@endforeach --}}

{{-- for else statement --}}

@forelse ($names as $n)
    <p>{{ $n }}</p>
@empty
    {{ "No values Found" }}
@endforelse

