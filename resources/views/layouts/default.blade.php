<html>
    <head>
        <title>View Blogs</title>
    </head>

    <body>
        @if (session('message'))
            <div class="alert alert-success" style="color: green">
                {{ session('message') }}
            </div>
        @endif
        @yield('content')
    </body>
</html>