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
@stop

@section('content')
<div class="">
	<!-- Title -->
	<div class="row">
		<div class="page-title">
			<div class="title_left">
				<h3> Staff<small>informacion de todo el Staff</small></h3>
			</div>
		</div>
	</div>
	<!--Vivientes Registrados-->
	<div class="row" id="tablaStaff">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>Tabla de Staff Registrados <small></small></h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
						<li><a class="close-link"><i class="fa fa-close"></i></a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<p class="text-muted font-13 m-b-30">
					</p>
					<table id="staff" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Nombre</th>
								<th>Apellido</th>
								<th>Gaia</th>
								<th>Rol</th>
								<th>Pagado</th>
								<th>Vehiculo</th>
								<th>Correo</th>
								<th>Telefono Cel</th>
								<th>Vivientes</th>
								<th>A Pagar</th>
								<th>Id</th>
							</tr>
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div id="editarEliminarStaff"></div>
	</div>
	@include('gaias.gaiasStaffTiles')
	<br>

</div>

@stop

@section('scripts')
	@include('staff.campamentoActualJavascript')
@stop