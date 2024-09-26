<h1>User Page</h1>

<h3> Hello {{ $name  }}</h3>

{{-- <h3>City {{ $city }}</h3> --}}
{{-- if city value  is not set, it will throw an error so thats an solution --}}
<h3>City :{{ !empty($city) ? $city :  'Not City' }}</h3>

