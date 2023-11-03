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
    <x-SmartsUppy url="{{route('uploadImage')}}" target="#file1" :events="['complete' => 'result => {
        console.log(`successful files:`, result.successful)
        console.log(`failed files:`, result.failed)
    }']" fieldName="file" note="Все типы файлов, до 10 МБ" unsplashUrl="#" webcam="true"></x-SmartsUppy>
    <x-SmartsUppy url="{{route('uploadImage')}}" target="#file1" fieldName="file" unsplashUrl="#" audio="true"></x-SmartsUppy>
    <x-SmartsUppy url="{{route('uploadImage')}}" target="#file2" fieldName="file" unsplashUrl="#" screenCapture="true"></x-SmartsUppy>
    <x-SmartsUppy url="{{route('uploadImage')}}" target="#file2" fieldName="file" unsplashUrl="#" width="400" height="550"></x-SmartsUppy>
    <x-SmartsUppy url="{{route('uploadImage')}}" target="#file3" fieldName="file" unsplashUrl="#" disabled="true"></x-SmartsUppy>
    <x-SmartsUppy url="{{route('uploadImage')}}" target="#file3" fieldName="file" unsplashUrl="#" theme="dark"></x-SmartsUppy>
    <x-SmartsUppy url="{{route('uploadImage')}}" target="#file4" fieldName="file" unsplashUrl="#" locale="ru_RU"></x-SmartsUppy>
    <x-SmartsUppy url="{{route('uploadImage')}}" target="#file4" fieldName="file" unsplashUrl="#" locale="uz_UZ"></x-SmartsUppy>
@stop
@section('css')
    @bukStyles(true)
@stop

@section('js')
@stop
