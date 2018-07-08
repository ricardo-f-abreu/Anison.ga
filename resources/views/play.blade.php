<?php
$audiolink="https://my.mixtape.moe/{$song->audioid}";
$artistlink="https://anilist.co/staff/{$song->artistid}";
$animelink="https://anilist.co/anime/{$song->animeid}";
include 'anilist.php';
?>

<head>
    <script src='{{ setting('site.url') }}storage/main.min.js'></script>
    <link href='{{ setting('site.url') }}storage/main.min.css' rel='stylesheet'> @include('inc.jquerybs')
    <link href='{{ setting('site.url') }}storage/player.min.css' rel='stylesheet'>
    <meta content='width=device-width, initial-scale=1, shrink-to-fit=no' name='viewport'>
    <meta content='{{$song->artist}} - {{$song->song}}' property='og:title'>
    <meta content='{{$audiolink}}' property='og:audio'>
    <meta content='Anison.ga' property='og:site_name'>
    <link rel=icon href='{{ setting('site.url') }}favicon.ico'>
    <title>{{$song->artist}} - {{$song->song}}</title>
    </head>
<body>
    @include('inc.navbar')
    <br><br><h1>@if(empty($song->artistid)){{$song->artist}} @else
    <a target="_blank" href="<?= $artistlink?>">{{$song->artist}}</a> @endif - {{$song->song}}</h1>
    <h3><a target="_blank" href="<?= $animelink?>">{{$song->anime}}</a></h3>
    <br><br>
    <div class='round audio'><audio preload='auto' controls loop controlsList='nodownload' src='<?= $audiolink?>'></audio></div>
    <br> @if(empty($song->lyrics)) @else
    <button class="btn btn-outline-dark btn-lg btn-block round audio" type="button" data-toggle="collapse" data-target="#collapseLyrics" aria-expanded="false" aria-controls="collapseLyrics">Show/hide lyrics</button>
    <div class="collapse" id="collapseLyrics"><br><div class="card card-body lyrics">{{$song->lyrics}}</div>
    </div>@endif<br>

    @notmobile<button class="btn btn-outline-dark btn-lg btn-block round audio" type="button" data-toggle="collapse" data-target="#collapseInfo" aria-expanded="true" aria-controls="collapseInfo">Show/hide anime info</button>
    <div class="collapse" id="collapseInfo"><br>
    <div class="card audio text-center">
        <div class="card-header">Anime Info</div>
        <div style="vertical-align: middle;" class="card-body">
            <p class="round mr-3 " style="float: left; height: auto; width: auto;"><img src="{{$image}}" border="1px"></p>
            <div class="list-group">
                <a class="list-group-item"><h4>{{$romaji}} | {{$native}}</h4></a>
                <a class="list-group-item text-left"><b>Description:</b> {{$description}}</a>
                <a class="list-group-item text-left"><b>Episodes:</b> {{$episodes}}</a>
                <a class="list-group-item text-left"><b>Duration:</b> {{$duration}}</a>
                <a class="list-group-item text-left"><b>Started:</b> {{$start}}</a>
                <a class="list-group-item text-left"><b>Ended:</b> {{$end}}</a>
            </div>
        </div>
    </div>@endnotmobile
</div>
</body>
<br>
<br>
