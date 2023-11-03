@extends('adminlte::page')

@section('title', 'Example App')
@section('content_header')
@stop
@section('content')
    @bukScripts(true)
    <div class="container-fluid">
        @php
            $columns = [
                ['name' => '"name"', 'type' => '"readonly"', 'display' => '"name"', 'events' => '{
        click: function(e) {
          var rowIndex = myAppendGridtable.getRowIndex(parseInt(e.uniqueIndex));
          alert("You clicked on row " + rowIndex);
        }
      }'],
                ['name' => '"name1"', 'type' => '"text"', 'display' => '"name1"', 'events' => '{
        click: function(e) {
          var rowIndex = myAppendGridtable.getRowIndex(parseInt(e.uniqueIndex));
          alert("You clicked on row " + rowIndex);
        }
      }'],
];
            $options = [
                'initData' => '[
        { name: "Foo Data 1", name1: "Bar Data 1" },
        { name: "Foo Data 2", name1: "Bar Data 2" },
        { name: "Foo Data 3", name1: "Bar Data 3" }
    ]'
]
        @endphp
        <x-append-grid id="table" :columns="$columns" :options="$options"></x-append-grid>
        <x-append-grid id="table1" :columns="$columns" :options="$options"></x-append-grid>
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
