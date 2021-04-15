<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Gamedetails</title>
</head>
<body class="detailpagebody">
@include('layouts.bannerheader')
<div class="detailbanner">
    <img id="pictureplace" src="{{asset('assets/gamebanner.png')}}" alt="x">
    <form method="post" class="hiddeninput">

        @csrf
        <input type="hidden" name="game" value="{{$data['id']}}">
        <button class="join_btn" type="submit" >
            Join</button>
    </form>

</div>
<div class="gamedetail">
    <div class="detailpictureBorder">
        <img id="detailpicture" src="{{$data['path']}}" alt="x">
    </div>
    <div id="detailside">
        {{$data['titel']}}

    </div>
    <div id="detailmain">
        {{$data['desc']}}
    </div>
</div>
@include('layouts.footerdetails')
</body>
<script>
    $(document).ready(function(){
        $(window).scrollTop(0);
    });
</script>
</html>
