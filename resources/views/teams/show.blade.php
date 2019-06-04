@extends('layouts.master')

@section('title' , 'List of teams')

@section('content')
    <div>
         <h3>{{$team->name}}</h3>
         <p>{{$team->email}}</p>
         <p>{{$team->address}}</p>
         <h5>{{$team->city}}</h5>
    </div>

@endsection