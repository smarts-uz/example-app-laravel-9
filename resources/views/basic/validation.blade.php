@extends('adminlte::page')

@section('title', 'Example App')
@section('content_header')
@stop
@section('content')
    @bukScripts(true)
    <div class="container-fluid">
        @php
            $columns = [
                ['name' => '"TextColumn"', 'type' => '"text"', 'display' => '"Text (Required)"','ctrlAttr' => '{ required: "required" }'],
                ['name' => '"IntColumn"', 'type' => '"number"', 'display' => '"Int (1 ~ 99999)"', 'ctrlAttr' => '{ required: "required",min: "1",max: "99999" }'],
                ['name' => '"DateColumn"', 'type' => '"date"', 'display' => '"Date"', 'ctrlAttr' => '{ required: "required" }'],
];
            $options = [
                'initData' => '[
        {
      TextColumn: "",
      IntColumn: "",
      DateColumn: "2017-12-31"
    },
    {
      TextColumn: "ABC",
      IntColumn: "0",
      DateColumn: ""
    },
    {
      TextColumn: "",
      IntColumn: "123",
      DateColumn: "2019-05-01"
    }
    ]'
]
        @endphp
        <form id="dataForm" action="">
            <x-append-grid id="table" :columns="$columns" :options="$options"></x-append-grid>
            <x-append-grid id="table1" :columns="$columns" :options="$options"></x-append-grid>
            <button id="submit" type="submit" class="btn btn-primary">Submit</button>
        </form>
        <hr/>
    </div>
@stop
@section('css')
    @bukStyles(true)
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/all.min.css">
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
@stop
