@extends('home')

@section('title')
Super Fun
@endsection

@section('fun')

@if ($abc == 'keturi')
<h1>Labai gerai</h1>
@else
<h1>Nu nelabai</h1>
@endif

@foreach ($mas as $value)
    <h2>{{$value}}</h2>
@endforeach

@endsection
