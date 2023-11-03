@extends('adminlte::page')

@section('title', 'Example App')
@section('content_header')
@stop
@section('content')
    @bukScripts(true)
    <div class="d-flex justify-content-center" id="file"></div>
    <div class="d-flex justify-content-center" id="file1"></div>
    <x-SmartsUppy url="{{route('uploadImage')}}" target="#file" fieldName="file"></x-SmartsUppy>
    <x-SmartsUppy url="{{route('uploadImage')}}" target="#file1" fieldName="file"></x-SmartsUppy>
@stop
@section('css')
    @bukStyles(true)
@stop

@section('js')
@stop
