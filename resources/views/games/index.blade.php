@extends('games.allgamespage')

@section('content')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">




<div class="allgamesContainer">
    @foreach($games as $game)
    <a href="{{"detail/".$game['id']}}">
        <div class="gamesmainborder">
            <div class="allgameborder">
                <img class="gamePlaceholder" src="{{ $game->path }}" alt="x">
            </div>

            <div class="gamedescription">

                <h4>
                    {{ $game->titel }}
                </h4>

                {{ $game->shortdesc }}
            </div>
        </div>
    </a>
    @endforeach

</div>
@endsection
