{{-- <h1>Welcome page</h1>

{{"hyyy"}}
<br>
<br>
{{ "lol" }}


{!! "<h1>hahah im h1 tag</h1>" !!}


{!! "<script>console.log('hyyywtf')</script>" !!}

@php
    $user = "SanidhyDutt";

    $arr = ["sanidhy","sani","yoo"];
@endphp

{{ $user }}

@{{ $user }}  --}}

{{-- loops --}}

{!! "<h1><center>Loops</center></h1>" !!}

@php
    $arr = ["Apple","Banana","Watermelon"];
@endphp

<ul>
    @foreach ($arr as $a)
        <li>{{ $loop->index }} - {{ $a }}</li>

        {{--{{ $loop->index }} 
        {{ $loop->iteration }}
        {{ $loop->count }}
        {{ $loop->first }}
        {{ $loop->last }}
        {{ $loop->odd }}
         {{ $loop->even }}
        --}}

        @endforeach
</ul>
