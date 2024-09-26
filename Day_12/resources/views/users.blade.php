<h1>User Page</h1>

@foreach ($user as $id => $u )
    <h3> {{ $id }} {{ $u['name'] }} |  {{ $u['phone'] }} | {{ $u['city'] }}</h3>
    <a href="{{ route('view.user', $id)  }}">Show</a>
    @endforeach
