@extends('adminlte::page')

@section('title', 'Example App')
@section('content_header')
@stop
@section('content')
    @bukScripts(true)
    <div class="d-flex justify-content-center" id="file1"></div>
    <div class="d-flex justify-content-center" id="file2"></div>
    <div class="d-flex justify-content-center" id="file3"></div>
    <div class="d-flex justify-content-center" id="file4"></div>
    <x-SmartsUppy url="{{route('uploadImage')}}" target="#file1" fieldName="file" urlsourceUrl="#" webcam="true"></x-SmartsUppy>
    <x-SmartsUppy url="{{route('uploadImage')}}" target="#file1" fieldName="file" urlsourceUrl="#" audio="true"></x-SmartsUppy>
    <x-SmartsUppy url="{{route('uploadImage')}}" target="#file2" fieldName="file" urlsourceUrl="#" screenCapture="true"></x-SmartsUppy>
    <x-SmartsUppy url="{{route('uploadImage')}}" target="#file2" fieldName="file" urlsourceUrl="#" width="400" height="550"></x-SmartsUppy>
    <x-SmartsUppy url="{{route('uploadImage')}}" target="#file3" fieldName="file" urlsourceUrl="#" disabled="true"></x-SmartsUppy>
    <x-SmartsUppy url="{{route('uploadImage')}}" target="#file3" fieldName="file" urlsourceUrl="#" theme="dark"></x-SmartsUppy>
    <x-SmartsUppy url="{{route('uploadImage')}}" target="#file4" fieldName="file" urlsourceUrl="#" locale="ru_RU"></x-SmartsUppy>
    <x-SmartsUppy url="{{route('uploadImage')}}" target="#file4" fieldName="file" urlsourceUrl="#" locale="uz_UZ"></x-SmartsUppy>
@stop
@section('css')
    @bukStyles(true)
@stop

@section('js')
@stop
