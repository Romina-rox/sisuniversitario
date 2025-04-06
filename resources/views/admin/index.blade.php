@extends('adminlte::page')

@section('content_header')
    <h1>SISTEMA DESARROLLADO POR ->>>>>  ROXANA TERRAZAS SANCHEZ</h1>
    <hr>
@stop

@section('content')
    <div class="row">

      <!-- GESTIONES -->
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <img src="{{ url('/img/calendario.gif') }}" width="70px" alt="">
              <div class="info-box-content">
                <span class="info-box-text"><b>Gestiones registrados</b></span>
                <span class="info-box-number">{{ $total_gestiones }} gestiones</span>
              </div>
            </div>
          </div>

          <!-- CARRERAS -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <img src="{{ url('/img/diploma.gif') }}" width="70px" alt="">
              <div class="info-box-content">
                <span class="info-box-text"><b>Carreras registradas</b></span>
                <span class="info-box-number">{{ $total_carreras }} carreras</span>
              </div>
            </div>
          </div>

          <!-- NIVELES -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <img src="{{ url('/img/grafico-de-linea.gif') }}" width="70px" alt="">
              <div class="info-box-content">
                <span class="info-box-text"><b>Niveles registrados</b></span>
                <span class="info-box-number">{{ $total_niveles }} niveles</span>
              </div>
            </div>       
          </div>

          <!-- TURNOS -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <img src="{{ url('/img/reloj.gif') }}" width="70px" alt="">
              <div class="info-box-content">
                <span class="info-box-text"><b>Turnos registrados</b></span>
                <span class="info-box-number">{{ $total_turnos }} turnos</span>
              </div>
            </div>       
          </div>

          <!-- PARALELOS -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <img src="{{ url('/img/carpetas.gif') }}" width="70px" alt="">
              <div class="info-box-content">
                <span class="info-box-text"><b>Paralelos registrados</b></span>
                <span class="info-box-number">{{ $total_paralelos }} paralelos</span>
              </div>
            </div>       
          </div>

          <!-- MATERIAS -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <img src="{{ url('/img/materias.gif') }}" width="70px" alt="">
              <div class="info-box-content">
                <span class="info-box-text"><b>Materias ROXANA registrados</b></span>
                <span class="info-box-number">{{ $total_materias }} materias</span>
              </div>
            </div>
          </div>
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop