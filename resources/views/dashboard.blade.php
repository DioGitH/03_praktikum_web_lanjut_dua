@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Selamat Datang</h1>
@stop

@section('content')
@section('plugins.Toastr')

@section('footer')
Kelompok 1
@stop
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
<script>
    $(document).Toasts('create', {
        title: 'Toast Title',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
        autohide: true,

    })
</script>

<script>
    toastr.success('Are you the 6 fingered man?')
</script>
@stop