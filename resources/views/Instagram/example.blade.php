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
    <x-SmartsUppy url="{{route('uploadImage')}}" target="#file1" fieldName="file" instagramUrl="https://api2.transloadit.com/companion/instagram/redirect" webcam="true"></x-SmartsUppy>
    <x-SmartsUppy url="{{route('uploadImage')}}" target="#file1" fieldName="file" instagramUrl="https://api2.transloadit.com/companion/instagram/redirect" audio="true"></x-SmartsUppy>
    <x-SmartsUppy url="{{route('uploadImage')}}" target="#file2" fieldName="file" instagramUrl="https://api2.transloadit.com/companion/instagram/redirect" screenCapture="true"></x-SmartsUppy>
    <x-SmartsUppy url="{{route('uploadImage')}}" target="#file2" fieldName="file" instagramUrl="https://api2.transloadit.com/companion/instagram/redirect" width="400" height="550"></x-SmartsUppy>
    <x-SmartsUppy url="{{route('uploadImage')}}" target="#file3" fieldName="file" instagramUrl="https://api2.transloadit.com/companion/instagram/redirect" disabled="true"></x-SmartsUppy>
    <x-SmartsUppy url="{{route('uploadImage')}}" target="#file3" fieldName="file" instagramUrl="https://api2.transloadit.com/companion/instagram/redirect" theme="dark"></x-SmartsUppy>
    <x-SmartsUppy url="{{route('uploadImage')}}" target="#file4" fieldName="file" instagramUrl="https://api2.transloadit.com/companion/instagram/redirect" locale="ru_RU"></x-SmartsUppy>
    <x-SmartsUppy url="{{route('uploadImage')}}" target="#file4" fieldName="file" instagramUrl="https://api2.transloadit.com/companion/instagram/redirect" locale="uz_UZ"></x-SmartsUppy>
@stop
@section('css')
    @bukStyles(true)
@stop

@section('js')
@stop
