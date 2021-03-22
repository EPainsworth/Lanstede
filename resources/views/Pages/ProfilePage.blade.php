<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>ProfilePage</title>
</head>
<body class="profile-background">
@include('Widgets.Header')
<div class="profileContainer">
    <div class="profileBorder">
        <img id="profilePlaceholder" src="{{asset('assets/csgo_bannerfoto1.png')}}" alt="x">
    </div>
    <div id="profile-name">
        naam input
    </div>
    <div id="profile-email">
        email
    </div>
</div>
@include('Widgets.FooterProfile')
</body>
<script>
    $(document).ready(function(){
        $(window).scrollTop(0);
    });
</script>
</html>
