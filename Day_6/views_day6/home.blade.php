@php
    
    $fruits = [1 => "Apple", 2 => "Bananaa",3 => "pineapple"];
    $var = "";
    //$fruits = [];
@endphp


{{-- @include('pages.header',['names' => $fruits]) --}}
{{-- @includeWhen(empty($var),'pages.header',['names' => $fruits]) --}}
@includeUnless(empty($var),'pages.header',['names' => $fruits])

            {{-- true --}}

{!!  "<h1>Home page</h1>"  !!}

@include('pages.footer')

{{-- @include('page.content') --}}
{{-- @includeIf('page.content') --}}