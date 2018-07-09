<head>
    @include('inc.jquerybs')
    <meta content="width=device-width,initial-scale=1,shrink-to-fit=no" name="viewport">
    <title>Add song - {{ setting('site.title') }}</title>
</head>@include('inc.navbar')

<br><br><h1>Add song</h1>
<body style="text-align: center;">
    <section class="py-5">
        <div class="container">
            @if(count($errors) > 0) @foreach($errors->all() as $error)
            <div class="alert alert-danger" <br>{{$error}}<br></div>
            @endforeach @endif
            {!! Form::open(['url' => 'songs/new']) !!}
            <div class="form-row">
                <div class="form-group col-md-4">{{Form::label('song', 'Song')}} {{Form::text('song', '', ['class' => 'form-control', 'placeholder' => 'Enter song title'])}}</div>
                <div class="form-group col-md-4">{{Form::label('artist', 'Artist')}} {{Form::text('artist', '', ['class' => 'form-control', 'placeholder' => 'Enter artist name'])}}</div>
                <div class="form-group col-md-4">{{Form::label('anime', 'Anime')}} {{Form::text('anime', '', ['class' => 'form-control', 'placeholder' => 'Enter anime name'])}}</div>
                <div class="form-group col-md-4">{{Form::label('artistid', 'ArtistID')}} {{Form::text('artistid', '', ['class' => 'form-control', 'placeholder' => 'Enter AL staff ID'])}}</div>
                <div class="form-group col-md-4">{{Form::label('animeid', 'AnimeID')}} {{Form::text('animeid', '', ['class' => 'form-control', 'placeholder' => 'Enter AL anime ID'])}}</div>
                <div class="form-group col-md-4">{{Form::label('audioid', 'AudioID')}} {{Form::text('audioid', '', ['class' => 'form-control', 'placeholder' => 'Enter mixtape.moe ID'])}}</div>
                <div class="form-group col-md-12">{{Form::label('lyrics', 'Lyrics')}} {{Form::textarea('lyrics', '', ['class' => 'form-control', 'placeholder' => 'Enter lyrics', 'rows' => '10'])}}</div>
            </div><div>{{Form::submit('Submit', ['class' => 'btn btn-block btn-lg btn-outline-primary'])}}</div>
            {!! Form::close() !!}</div>
    </section>
</body>
