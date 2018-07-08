<head>
    <script src="{{setting('site.url')}}storage/main.min.js"></script>
    <link href="{{setting('site.url')}}storage/main.min.css" rel="stylesheet">@include('inc.jquerybs')
    <meta content="width=device-width,initial-scale=1,shrink-to-fit=no" name="viewport">
    <title>Request - {{setting('site.title')}}</title>
</head>@include('inc.navbar')

<br><body style="text-align: center;">
    <h1>Request song</h1>
    <section class="py-5">
        <div class="container">
            @if(count($errors) > 0)@foreach($errors->all() as $error)
                <div class="alert alert-danger"><br>{{$error}}<br></div>
            @endforeach @endif

            {!! Form::open(['url' => 'requests/new']) !!}
            <div class="form-group">{{Form::label('song', 'Song')}} {{Form::text('song', '', ['class' => 'form-control', 'placeholder' => 'Enter song'])}}</div>
            <div class="form-group">{{Form::label('anime', 'Anime')}} {{Form::text('anime', '', ['class' => 'form-control', 'placeholder' => 'Enter anime title'])}}</div>
            <div class="form-group">{{Form::label('link', 'Link')}} {{Form::text('link', '', ['class' => 'form-control', 'placeholder' => 'Enter a URL that links to this song (e.g. YouTube, Spotify, CDJapan, ...)'])}}</div>
            <div>{{Form::submit('Submit', ['class' => 'btn btn-block btn-lg btn-outline-primary'])}}</div>
            {!! Form::close() !!}
        </div>
    </section>
</body>
