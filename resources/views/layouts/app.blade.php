<html>
    <head>
        <title>
            Yoga API
        </title>
        <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
    </head>
    <body>
        <section>
            @include('layouts.header')
        </section>
        <section>
            @yield('content')
        </section>
    </body>
</html>