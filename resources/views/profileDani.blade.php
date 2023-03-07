@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Profile</h1>
@stop

@section('content')
<div class="body">
<div class="card" style="width: 18rem;">
    {{-- <img class="card-img-top" src="{{ asset('img/Dani.jpg') }}" alt="Febrian Dani Ritonga"> --}}
    <div class="card-container">
        <img class="round" src="{{ asset('img/Dani.jpg') }}" alt="user" />
        <h3>Febrian Dani Ritonga</h3>
        <h6>Malang</h6>
        <p>Undergraduate student at Politeknik Negeri Malang <br/>Computer Science</p>
        <div class="buttons">
            <button class="primary">
                Message
            </button>
            <button class="primary ghost">
                Following
            </button>
        </div>
        <div class="skills">
            <h6>Skills</h6>
            <ul>
                <li>Front End Development</li>
                <li>HTML</li>
                <li>CSS</li>
                <li>JavaScript</li>
                <li>Java</li>
            </ul>
        </div>
    </div>
    
</div>
@stop

@section('css')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">

@stop
