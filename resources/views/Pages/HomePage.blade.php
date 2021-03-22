<html lang="eng">
<head>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>HomePage BorderStyle</title>
</head>
<body class="background">
@include('layouts.BannerHeader')
<div class="banner">
    <div class="images fade" >
        <img id="img1" src="{{asset('assets/csgo_bannerfoto1.png')}}" alt="x">
        <img id="img2" src="{{asset('assets/rocketleague_bannerfoto2.png')}}" alt="x">
        <img id="img3" src="{{asset('assets/csgo_infopage.png')}}" alt="x">
    </div>
</div>
@include('Widgets.PopularGames')
@include('layouts.Footer')
<script type="text/javascript" src={{asset('js/app.js')}}></script>
</body>
<script>
    $(document).ready(function(){
        $(window).scrollTop(0);
    });
</script>
</html>
