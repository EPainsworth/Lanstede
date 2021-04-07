@extends('admin.adminpage')

@section('useremail')
    @foreach($user as $users)
        <div class="userid"><h3>ID: {{$users->id}}</h3></div>
        <div class="useremail"><h3>Email: {{$users->email}}</h3></div>
    @endforeach
@endsection
