<html lang="eng">
<head>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>HomePage BorderStyle</title>
</head>
<body class="background">
<div class="admindivider">
    <div class="admintitle">
        <h1>AdminPage Dashboard</h1>
    </div>
    <div class="editinfo">
        <a href="edit"><button><h2>Edit Information</h2></button></a>
    </div>
    <div class="editpic">
        <a href="pictureedit"><button><h2>Edit Pictures</h2></button></a>
    </div>
</div>

<div class="adminusers">
    @yield('useremail')
</div>
</body>
