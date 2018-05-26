<html>
    <head>
        <title>Adding new blog</title>
    </head>

    <body>
        <h1>Add New Blog</h1>
        {{ Form::open(array('url' => '/blogs/create'))}}
        <p>
            {{ Form::label('title','Title:') }} <br />
            {{ Form::text('title') }}
        </p>
        <p>
            {{ Form::label('body','Body:') }} <br />
            {{ Form::textarea('body') }}
        </p>
        <p>{{ Form::submit('Add blog') }}</p>
        {{ Form::close() }}

        @if (count($errors) > 0)
            <div class = "alert alert-danger" style="color: red">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </body>
</html>