<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>EditPage</title>
</head>
<body>
<br><br><br>
<center>
    <h1>Update informationpage</h1>
    <form action="/update" method="POST" class="editinput"><br>
        @csrf
        <input type="hidden" name="id" value="{{$data['id']}}">
        <input type="text" name="name"  value="{{$data['text']}}">
        <br><br><button type="submit">Update</button>
    </form>
</center>
</body>
</html>
