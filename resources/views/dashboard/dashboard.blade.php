@extends('layouts.app')

@section('styles')
    <!-- TimePicker-->
    <link rel="stylesheet" href="https://unpkg.com/flatpickr/dist/flatpickr.min.css">

    <!-- Datatables -->
    <link href="/js/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="/js/datatables/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="/js/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="/js/datatables/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="/js/datatables/scroller.bootstrap.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
@stop

@section('content')

<div class="">
    <!-- Title -->
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            @include('vivientes.vivientesTiles')
        </div>
    </div>

@endsection

@section('scripts')
    @include('vivientes.vivientesDashboardJavascripts')
@stop