<head>
    <script src="{{setting('site.url')}}storage/main.min.js"></script>
    <link href="{{setting('site.url')}}storage/main.min.css" rel="stylesheet">@include('inc.jquerybs')
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <title>Songs - {{setting('site.title')}}</title>
</head>@include('inc.navbar') @include('songs.all')