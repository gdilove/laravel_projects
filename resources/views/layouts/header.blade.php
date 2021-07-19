@extends('layouts.head')
@section('header')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">Home</a>
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item"><a class="nav-link" href="{{route('help')}}">Help</a></li>
                <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
            </ul>
        </div>
    </nav>
@stop
