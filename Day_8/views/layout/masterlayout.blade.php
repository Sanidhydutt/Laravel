<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="{{asset('css/style.css') }}">
    <title>Sanidhy - @yield('title','Website')</title>
</head>

<body>

    @include('pages.header')

    <div class="container">
        <!-- Sidebar section -->
        <aside class="sidebar">
            @section('sidebar')
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/post">Post</a></li>
                </ul>
            @show
        </aside>

        <!-- Body section -->
        <main class="body_sec">
            @hasSection('content')
                @yield('content')
            @else
                <h2>No Content Found</h2>
            @endif
        </main>
    </div>

    @include('pages.footer')
</body>

</html>
