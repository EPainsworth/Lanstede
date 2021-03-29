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

<div class="allgamesContainer">
    <a href="profilepage">
        <div class="gamedescborder">
            <div class="allgameborder">
                <img id="gamePlaceholder" src="{{asset('assets/CSGO-logo.jpg')}}" alt="x">
            </div>
            <div id="game-title">
                naam input
            </div>

            <div id="gamedescription">
                email
            </div>
        </div>
    </a>
</div>
