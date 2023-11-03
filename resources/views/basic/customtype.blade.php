@extends('adminlte::page')

@section('title', 'Example App')
@section('content_header')
@stop
@section('content')
    @bukScripts(true)
    <div class="container-fluid">
        @php
            $columns = [
                ['name' => '"name"', 'type' => '"custom"', 'display' => '"name"','customBuilder' => 'function(parent, idPrefix, name, uniqueIndex) {
        // Create the content of custom type
        var inputGroup = document.createElement("div");
        inputGroup.classList.add("input-group");
        parent.appendChild(inputGroup);
        var inputGroupPrepend = document.createElement("div");
        inputGroupPrepend.classList.add("input-group-prepend");
        inputGroup.appendChild(inputGroupPrepend);
        var inputGroupPrependText = document.createElement("span");
        inputGroupPrependText.innerText = "$";
        inputGroupPrependText.classList.add("input-group-text");
        inputGroupPrepend.appendChild(inputGroupPrependText);
        var inputControl = document.createElement("input");
        inputControl.id = idPrefix + "_" + name + "_" + uniqueIndex;
        inputControl.name = inputControl.id;
        inputControl.type = "number";
        inputControl.min = 0;
        inputControl.max = 99999;
        inputControl.placeholder = "0 ~ 99999";
        inputControl.classList.add("form-control");
        inputGroup.appendChild(inputControl);
      }','customGetter' => 'function(idPrefix, name, uniqueIndex) {
        var controlId = idPrefix + "_" + name + "_" + uniqueIndex;
        return parseFloat(document.getElementById(controlId).value);
      }','customSetter' => 'function(idPrefix, name, uniqueIndex, value) {
        var controlId = idPrefix + "_" + name + "_" + uniqueIndex;
        document.getElementById(controlId).value = value;
      }'],
                ['name' => '"name1"', 'type' => '"custom"', 'display' => '"name1"','customBuilder' => 'function(ctrlHolder, idPrefix, name, uniqueIndex) {
        var wrapper = document.createElement("div");
        wrapper.id = idPrefix + "_" + name + "_" + uniqueIndex;
        wrapper.classList.add("input-group");
        ctrlHolder.appendChild(wrapper);
        var hourElem = document.createElement("select");
        hourElem.id = idPrefix + "_" + name + "_hour_" + "_" + uniqueIndex;
        hourElem.name = hourElem.id;
        hourElem.classList.add("custom-select");
        wrapper.appendChild(hourElem);
        for (var h = 0; h < 24; h++) {
          var option = document.createElement("option");
          option.value = (h < 10 ? "0" : "") + h;
          option.innerText = option.value;
          hourElem.appendChild(option);
        }
        var minuteElem = document.createElement("select");
        minuteElem.id = idPrefix + "_" + name + "_minute_" + "_" + uniqueIndex;
        minuteElem.name = minuteElem.id;
        minuteElem.classList.add("custom-select");
        wrapper.appendChild(minuteElem);
        for (var m = 0; m < 60; m += 5) {
          var option = document.createElement("option");
          option.value = (m < 10 ? "0" : "") + m;
          option.innerText = option.value;
          minuteElem.appendChild(option);
        }
        var inputGroupAppend = document.createElement("div");
        inputGroupAppend.classList.add("input-group-append");
        wrapper.appendChild(inputGroupAppend);
        var inputGroupAppendText = document.createElement("span");
        inputGroupAppendText.classList.add("input-group-text");
        inputGroupAppend.appendChild(inputGroupAppendText);
        var timeIcon = document.createElement("i");
        timeIcon.classList.add("fas", "fa-clock");
        inputGroupAppendText.appendChild(timeIcon);
      }','customGetter' => 'function(idPrefix, columnName, uniqueIndex) {
        var hour = document.getElementById(
          idPrefix + "_" + columnName + "_hour_" + "_" + uniqueIndex
        ).value;
        var minute = document.getElementById(
          idPrefix + "_" + columnName + "_minute_" + "_" + uniqueIndex
        ).value;
        return hour + ":" + minute;
      }','customSetter' => 'function(idPrefix, columnName, uniqueIndex, data) {
        if (data && 0 === data.search(/^[0-9]{2}\:[0-9]{2}$/g)) {
          document.getElementById(
            idPrefix + "_" + columnName + "_hour_" + "_" + uniqueIndex
          ).value = data.substring(0, 2);
          document.getElementById(
            idPrefix + "_" + columnName + "_minute_" + "_" + uniqueIndex
          ).value = data.substring(3);
        }
      }'],
];
            $addEventListener = [
                ['id' => 'load','key' => 'click','value' => 'function() {
  myAppendGridtable.load([
    { name: 256, name1: "09:45" },
    { name: 512, name1: "13:20" },
    { name: 1024, name1: "17:05" },
    { name: 2048, name1: "23:10" }
  ]);
  myAppendGridtable1.load([
    { name: 256, name1: "09:45" },
    { name: 512, name1: "13:20" },
    { name: 1024, name1: "17:05" },
    { name: 2048, name1: "23:10" }
  ]);
}'],]
        @endphp
        <x-append-grid id="table" :columns="$columns" :addEventListener="$addEventListener"></x-append-grid>
        <x-append-grid id="table1" :columns="$columns" :addEventListener="$addEventListener"></x-append-grid>
        <button id="load" type="button" class="btn btn-primary">
            Load Data
        </button>
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
