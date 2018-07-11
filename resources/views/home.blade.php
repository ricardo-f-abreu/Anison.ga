<head>
    <meta content="{{config('app.name')}}" property="og:title">
    <meta content="{{url('/')}}/" property="og:url">
    <meta content="{{config('app.name')}}" property="og:site_name">
    <title>{{config('app.name')}}</title>
    @include('inc.jquerybs')
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
</head>
<body>@include('inc.navbar')<header>@include('songs.all')</header></body>