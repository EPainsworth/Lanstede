<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Edition2</title>
</head>
<body class="background">
<div class="picturecontainer">
    <img class="pic4" src="{{$pics4->picture_pics}}" alt="X">
</div>
<div class="picturecontainer2">
    <img class="pic5" src="{{$pics5->picture_pics}}" alt="X">
</div>
<div class="picturecontainer3">
{{--    <img class="pic6" src="{{$pics6->picture_pics}}" alt="X">--}}
</div>
@include('layouts.header')
</body>
<script>
    $(document).ready(function(){
        $(window).scrollTop(0);
    });
</script>
</html>
