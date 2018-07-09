<?php 
use Anison\Song;
use Anison\Requests;
$latestsong = Song::latest()->first();
$songamount = Song::count();
$requestamount = Requests::count();
$percentage = ($songamount * 100) / ($songamount + $requestamount);
?>

<section class='py-5'>
    <div class='container'>
        @if(session('success1') OR session('success2'))
        <div class="alert alert-success" role="alert">{{session('success1')}}{{session('success2')}}</div>
        <div class="card">
        @endif 
        @if(session('success1'))
            <div class="card-header"><b>Received request:</b></div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Song:</b> {{session('inputsong')}}</li>
                    <li class="list-group-item"><b>Artist:</b> {{session('inputanime')}}</li>
                    <li class="list-group-item"><b>Link:</b> {{session('inputlink')}}</li>
                </ul>
            </div><br>
        @endif
        <div class="card border-dark mb-3">
            <div style="border-bottom:1px solid;" class="card-header">Latest song</div>
                <div class="card-body text-dark">
                    <h5 class="card-title">{{ $latestsong->song }}</h5>
                    <p class="card-text">Artist: @if(empty($latestsong->artistid)){{$latestsong->artist}} @else <a target="_blank" href='https://anilist.co/staff/{{$latestsong->artistid}}'>{{$latestsong->artist}}</a> @endif
                    <br>Anime: <a href="https://anilist.co/anime/{{ $latestsong->animeid }}">{{ $latestsong->anime }}</a>
                    </p>
                </div>
            <a style="border:0px solid transparent; border-top:1px solid; color: black;" href="/play/{{$latestsong->id}}" class="card-footer btn-outline-dark btn btn-dark">Play</a>
        </div><br>
        <div class="progress"><div class="progress-bar" role="progressbar" style="width: <?= $percentage;?>%" aria-valuenow="<?= $percentage;?>" aria-valuemin="0" aria-valuemax="100"></div></div>
        <table id='myTable'>
            <tr class='header'>
                <th style='width:40%;'>Anime</th>
                <th style='width:30%;'>Song</th>
                @notmobile<th style='width:30%;'>Artist</th>@endnotmobile
            </tr>@if(count($song) > 0) @foreach($song as $song)
            <tr>
                <td><a target="_blank" href='https://anilist.co/anime/{{$song->animeid}}'>{{$song->anime}}</a></td>
                <td><a href="/play/{{$song->id}}">{{$song->song}}</a></td>
                @notmobile<td>@if(empty($song->artistid)){{$song->artist}} @else <a target="_blank" href='https://anilist.co/staff/{{$song->artistid}}'>{{$song->artist}}</a> @endif</td>@endnotmobile
            </tr>@endforeach @endif
        </table>
    </div>
</section>
