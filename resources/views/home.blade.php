<head>
    <meta content="{{setting('site.description')}}" name="description">
    <meta content="{{setting('site.title')}}" property="og:title">
    <meta content="{{setting('site.url')}}" property="og:url">
    <meta content="{{setting('site.title')}}" property="og:site_name">
    <title>{{setting('site.title')}}</title>
    <script src="{{setting('site.url')}}storage/main.min.js"></script>
    <link href="{{setting('site.url')}}storage/main.min.css" rel="stylesheet">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">@include('inc.jquerybs')
</head>
<body>@include('inc.navbar')<header>@include('songs.all')</header></body>