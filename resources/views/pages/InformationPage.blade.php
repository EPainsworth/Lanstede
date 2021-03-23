<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>InfoPage</title>
</head>
<body class="background">
@include('layouts.header')
<div class="infoPicture">
    <img src="{{asset('assets/csgo_infopage.png')}}" alt="Error loading image">
</div>
<center>
@include('widgets.Info')
</center>
@include('layouts.footer')
</body>
</html>
