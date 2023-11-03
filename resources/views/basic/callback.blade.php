@extends('adminlte::page')

@section('title', 'Example App')
@section('content_header')
@stop
@section('content')
    @bukScripts(true)
    <div class="container-fluid">
        @php
            $columns = [
                ['name' => '"name"', 'type' => '"text"', 'display' => '"name"'],
                ['name' => '"name1"', 'type' => '"text"', 'display' => '"name1"'],
];
            $options = [
                'initData' => '[
        { name: "Foo Data 1", name1: "Bar Data 1" },
        { name: "Foo Data 2", name1: "Bar Data 2" },
        { name: "Foo Data 3", name1: "Bar Data 3" }
    ]',
                'dataLoaded' => 'function(caller, records) {
    addLog(caller, "`dataLoaded` triggered, count=" + records.length);
  }',
                'rowDataLoaded' => 'function(caller, record, rowIndex) {
    addLog(caller, "`rowDataLoaded` triggered, rowIndex=" + rowIndex);
  }',
                'afterRowAppended' => 'function(caller, rowIndex) {
    addLog(caller, "`afterRowAppended` triggered, rowIndex=" + rowIndex);
  }',
                'afterRowInserted' => 'function(caller, rowIndex) {
    addLog(caller, "`afterRowInserted` triggered, rowIndex=" + rowIndex);
  }',
                'afterRowSwapped' => 'function(caller, oldRowIndex, newRowIndex) {
    addLog(
      caller,
      "`afterRowSwapped` triggered, oldRowIndex=" +
        oldRowIndex +
        ", newRowIndex=" +
        newRowIndex
    );
  }',
                'beforeRowRemove' => 'function(caller, rowIndex) {
    return confirm("Are you sure to remove this row?");
  }',           'afterRowRemoved' => 'function(caller, rowIndex) {
    addLog(caller, "`afterRowRemoved` triggered, rowIndex=" + rowIndex);
  }',
];
        $addFunction = [
            [
                'name' => 'addLog',
                'parameters' => 'caller, message',
                'value' => 'var $logItem = $("<li></li>")
                        .addClass("list-group-item")
                        .prependTo(".list-group");
                    $logItem.addClass("list-group-item-primary");
                    $("<div></div>")
                        .addClass("font-weight-bold")
                        .text(new Date().toLocaleTimeString() + " - " + caller.id)
                        .appendTo($logItem);
                    $("<div></div>")
                        .text(message)
                        .appendTo($logItem);'
            ]
]
        @endphp
        <x-append-grid id="table" :columns="$columns" :options="$options" :addFunction="$addFunction"></x-append-grid>
        <x-append-grid id="table1" :columns="$columns" :options="$options" :addFunction="$addFunction"></x-append-grid>
    </div>
    <div class="col-sm-6">
        <blockquote class="blockquote">
            <p class="mb-0">Callback logs</p>
        </blockquote>
        <ul class="list-group" style="font-size: 0.8rem;">
        </ul>
    </div>
@stop
@section('css')
    @bukStyles(true)
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/all.min.css">
@stop

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
@stop
