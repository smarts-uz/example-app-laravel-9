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
    ]'
];
            $addEventListener = [
                ['id' => 'btnGetCount','key' => 'click','value' => 'function() {
  alert("Total number of rows = " + myAppendGridtable.getRowCount());
}'],
                ['id' => 'btnGetValue','key' => 'click','value' => 'function() {
  // Get the row count
  var rowCount = myAppendGridtable.getRowCount();
  // Check the number of row in grid
  if (rowCount <= 1) {
    alert("Warning: Row 2 is not found");
  } else {
    // Row index is start from 0. So, index=2 means the second row
    alert(myAppendGridtable.getCtrlValue("name", 1));
  }
}'],
                ['id' => 'btnSetValue','key' => 'click','value' => 'function() {
  // Get the row count
  var rowCount = myAppendGridtable.getRowCount();
  // Check the number of row in grid
  if (rowCount <= 2) {
    alert("Warning: Row 3 is not found");
  } else {
    // Row index is start from 0. So, index=2 means the third row
    myAppendGridtable.setCtrlValue("name", 2, 999);
    alert("Value of `Order Placed` changed!!");
  }
}'],
];
            $addEventListener1 = [
                ['id' => 'btnAddRow','key' => 'click','value' => 'function() {
  // Get the row count
  var rowCount = myAppendGridtable1.getRowCount();
  // Check the number of row in grid
  if (rowCount <= 2) {
    alert("Warning: Row 3 is not found");
  } else {
    // Row index is start from 0. So, index=1 means the forth row
    myAppendGridtable1.insertRow(1, 1);
    alert("New row inserted!!");
  }
}'],
                ['id' => 'btnRemoveRow','key' => 'click','value' => 'function() {
  // Get the row count
  var rowCount = myAppendGridtable1.getRowCount();
  // Check the number of row in grid
  if (rowCount <= 1) {
    alert("Warning: Row 2 is not found");
  } else {
    // Row index is start from 0. So, index=1 means the second row
    myAppendGridtable1.removeRow(1);
    alert("Row 2 removed!!");
  }
}'],
                ['id' => 'btnAppendRowData','key' => 'click','value' => "function() {
    // Append two rows with values
    myAppendGridtable1.appendRow([
      {
        uid: 'd7bf56d4-f955-4dca-b3db-b30eab590028',
        name: 'Jessica Levett',
        company: 'Lind, O\'Kon and Hamill',
        country: 'United States',
        memberSince: '2015-04-26',
        orderPlaced: 984,
        level: 'Gold',
        isNPO: false
      },
      {
        uid: 'b9075764-5228-4ca7-9435-7c362ce097e5',
        name: 'Fonsie Spring',
        company: 'McKenzie, Block and Wiegand',
        country: 'Japan',
        memberSince: '2013-11-08',
        orderPlaced: 875,
        level: 'Silver',
        isNPO: false
      }
    ]);
    alert('New rows with data appended!!');
  }"],
];
        @endphp
        <x-append-grid id="table" :columns="$columns" :options="$options" :addEventListener="$addEventListener"></x-append-grid>
        <button id="btnGetCount" type="button" class="btn btn-outline-secondary">
            Demo: Get row count</button>
        <button id="btnSetValue" type="button" class="btn btn-outline-secondary">
            Demo: Set `Name` to `999` on row 3</button>
        <button id="btnGetValue" type="button" class="btn btn-outline-secondary">
            Demo: Get `Name` of row 2</button>
        <x-append-grid id="table1" :columns="$columns" :options="$options" :addEventListener="$addEventListener1"></x-append-grid>
        <button id="btnAddRow" type="button" class="btn btn-outline-secondary">
            Demo: Insert row before row 3</button>
        <button id="btnRemoveRow" type="button" class="btn btn-outline-secondary">
            Demo: Remove the second row</button>
        <button id="btnAppendRowData" type="button" class="btn btn-outline-secondary">
            Demo: Append row with data</button>
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
