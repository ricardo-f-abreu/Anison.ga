<head>
    <meta content="{{setting('site.description')}}" name="description">
    <meta content="{{setting('site.title')}}" property="og:title">
    <meta content="{{url('/')}}/" property="og:url">
    <meta content="{{setting('site.title')}}" property="og:site_name">
    <title>{{setting('site.title')}}</title>
    @include('inc.jquerybs')
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
</head>
<body>@include('inc.navbar')<header>@include('songs.all')</header></body>