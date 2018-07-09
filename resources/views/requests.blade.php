<?php 
use Anison\Song;
use Anison\Requests;
$songamount = Song::count();
$requestamount = Requests::count();
$percentage = ($songamount * 100) / ($songamount + $requestamount)
?>

<head>
    @include('inc.jquerybs')
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <title>Requests - {{setting('site.title')}}</title>
</head>

@include('inc.navbar')
<br><body style="text-align: center;">
    <h1>Requested songs</h1>
    <section class='py-5'>
        <div class='container'>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: <?= $percentage;?>%" aria-valuenow="<?= $percentage;?>" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <table id='myTable'>
                <tr class='header'>
                    <th style='width:40%;'>Song</th>
                    <th style='width:40%;'>Anime</th>
                    @notmobile<th style='width:20%;'>URL</th>@endnotmobile
                </tr>
                @if(count($requests) > 0) @foreach($requests as $request)
                <tr>
                    <td>{{$request->song}}</td>
                    <td>{{$request->anime}}</td>
                    @notmobile<td>{{$request->link}}</td>@endnotmobile
                </tr>@endforeach @endif</div>
            </table>
    </section>
</body>
