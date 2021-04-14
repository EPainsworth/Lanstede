<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Edition1</title>
</head>
<body class="background">
@include('layouts.header')
<div class="picturecontainer">
    <img class="pic1" src="{{$pics1->picture_pics}}" alt="X">
</div>
<div class="picturecontainer2">
    <img class="pic2" src="{{$pics2->picture_pics}}" alt="X">
</div>
<div class="picturecontainer3">
{{--    <img class="pic3" src="{{$pics3->picture_pics}}" alt="X">--}}
</div>
</body>
<script>
    $(document).ready(function(){
        $(window).scrollTop(0);
    });
</script>
</html>
