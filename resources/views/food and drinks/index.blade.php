@extends('widgets.order')

@section('drinks')

@foreach($drinks as $drink)


    <option value="{{$drink->drinks_id}}">{{$drink->drinks_name}}</option>

@endforeach

@endsection
