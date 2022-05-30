@extends('layouts.app')

@section('template_title')
    {{ $estudiantesTabla->name ?? 'Show Estudiantes Tabla' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Estudiantes Tabla</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('estudiantes-tablas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $estudiantesTabla->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $estudiantesTabla->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Carrera:</strong>
                            {{ $estudiantesTabla->carrera }}
                        </div>
                        <div class="form-group">
                            <strong>Creditos Cursados:</strong>
                            {{ $estudiantesTabla->creditos_cursados }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $estudiantesTabla->correo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
