@extends('layouts.app')

@section('template_title')
    {{ $materiasTabla->name ?? 'Show Materias Tabla' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Materias Tabla</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('materias-tablas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Creditos:</strong>
                            {{ $materiasTabla->creditos }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $materiasTabla->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Profesor:</strong>
                            {{ $materiasTabla->profesor }}
                        </div>
                        <div class="form-group">
                            <strong>Turno:</strong>
                            {{ $materiasTabla->turno }}
                        </div>
                        <div class="form-group">
                            <strong>Disponible:</strong>
                            {{ $materiasTabla->disponible }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
