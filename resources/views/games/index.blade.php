@extends('pages.allgamespage')

@section('content')
<br>
<br>
<br>
<br>
<br>
<br>
    hier komen onze games. poep

    @foreach($games as $game)<br>
        {{ $game->game_titel }}<br>
        {{ $game->game_shortdesc }}<br>

    @endforeach
@endsection
