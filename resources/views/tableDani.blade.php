@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Table Dani</h1>
@stop

@section('content')

    {{-- Setup data for datatables --}}
@php
$heads = [
    'ID',
    'Nama',
    ['Pengalaman' => 'Phone', 'width' => 40],
];

$config = [
    'data' => [
        [22, 'John Bender', '+02 (123) 123456789'],
        [19, 'Sophia Clemens', '+99 (987) 987654321'],
        [3, 'Peter Sousa', '+69 (555) 12367345243'],
    ],
    'order' => [[1, 'asc']],
    'columns' => [null, null, null, ['orderable' => false]],
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