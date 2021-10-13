@extends('layouts.master')
@section('titulo', 'Reportes')

@section('breadcrumb-Titulo', 'Reportes')
@section('breadcrumb-url')
<li class="breadcrumb-item active">Reportes</li>
@endsection


@section('styles')

@endsection


@section('contenido-principal')
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
  <div class="row">
    <div class="col-md-12">

      <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-edit"></i>
              Reportes Totales
            </h3>
          </div>
          <div class="card-body">
              hola
          </div>
      </div>

    </div>
  </div>
 
  </div>
</section> 

@endsection
@section('scripts')
 <!-- jQuery Mapael -->
 <script src=" {{ asset('plugins/jquery-mousewheel/jquery.mousewheel.js') }} "></script>
  <script src="{{ asset('plugins/raphael/raphael.min.js ') }}"></script>
  <script src="{{ asset('plugins/jquery-mapael/jquery.mapael.min.js') }} "></script>
  <script src="{{ asset('plugins/jquery-mapael/maps/usa_states.min.js') }} "></script>
  <!-- ChartJS -->
  <script src="{{ asset('plugins/chart.js/Chart.min.js ') }} "></script>
@endsection