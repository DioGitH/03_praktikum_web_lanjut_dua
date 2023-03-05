@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Profile</h1>
@stop

@section('content')
<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="vendor/adminlte/dist/img/Dani.jpg" alt="Febrian Dani Ritonga">
    <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop