@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Table Dio</h1>
@stop

@section('content')

    {{-- Setup data for datatables --}}
@php
$heads = [
    'Nama',
    'Pengalaman',
];


$config = [
    'data' => [
        [$table[0]->nama, $table[0]->pengalaman],
    ],
    'order' => [[1, 'asc']],
    'columns' => [null, null],
];
@endphp

{{-- Minimal example / fill data using the component slot --}}
<x-adminlte-datatable id="table1" :heads="$heads" head-theme="dark" :config="$config"
    striped hoverable bordered compressed>
    @foreach($config['data'] as $row)
        <tr>
            @foreach($row as $cell)
                <td>{!! $cell !!}</td>
            @endforeach
        </tr>
    @endforeach
</x-adminlte-datatable>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop