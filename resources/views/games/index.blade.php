@extends('pages.allgamespage')

@section('content')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">




<div class="allgamesContainer">
    @foreach($games as $game)
    <a href="">
        <div class="gamesmainborder">
            <div class="allgameborder">
                <img class="gamePlaceholder" src="{{ $game->picture_path }}" alt="x">
            </div>

            <div class="gamedescription">

                <h4>
                    {{ $game->game_titel }}
                </h4>

                {{ $game->game_shortdesc }}
            </div>
        </div>
    </a>
    @endforeach

</div>
@endsection
