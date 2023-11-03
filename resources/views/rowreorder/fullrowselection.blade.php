@extends('adminlte::page')
{{-- https://datatables.net/extensions/rowreorder/examples/initialisation/selector.html --}}
@section('title', 'Example App')
@section('content_header')
@stop
@section('content')
    <x-SmartsTable tableId="report" rowReorder="{selector: 'tr'}" :options="['columnDefs' => '[{ targets: 0, visible: false }]']" getData="{{ route('report') }}" exportId="{{\App\Reports\One::class}}" startDate="{{request()->input('startDate')}}" endDate="{{request()->input('endDate')}}"></x-SmartsTable>
    <x-SmartsTable tableId="report1" rowReorder="{selector: 'tr'}" :options="['columnDefs' => '[{ targets: 0, visible: false }]']" getData="{{ route('report') }}" exportId="{{\App\Reports\One::class}}" startDate="{{request()->input('startDate')}}" endDate="{{request()->input('endDate')}}"></x-SmartsTable>
@stop
@section('css')
    @bukStyles(true)
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
@stop

@section('js')
    @bukScripts(true)
@stop
