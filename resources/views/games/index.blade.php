@extends('pages.allgamespage')

@section('content')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">




<div class="allgamesContainer">
    @foreach($games as $game)
    <a href="">
        <div class="gamedescborder">
            <div class="allgameborder">
                <img class="gamePlaceholder" src="{{ $game->picture_path }}" alt="x">
            </div>

            <div class="gamedescription">
                <h6>
                    {{ $game->game_titel }}
                </h6>

                {{ $game->game_shortdesc }}
            </div>
        </div>
    </a>
    @endforeach

</div>
@endsection
