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
    <img id="pictureplace" src="{{asset('assets/rustsss.jpg')}}" alt="x">
    <button class="join_btn" onclick="location.href='https://public.test/'" type="button">
        Join</button>
</div>
<div class="gamedetail">
    <div class="detailpictureBorder">
        <img id="detailpicture" src="{{asset('assets/profiel_rust.jpg')}}" alt="x">
    </div>
    <div id="detailside">
        game naam en basis info
    </div>
    <div id="detailmain">
        game description
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
