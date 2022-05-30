@extends('layouts.app')

@section('template_title')
    Estudiantes Tabla
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Estudiantes Tabla') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('estudiantes-tablas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Codigo</th>
										<th>Carrera</th>
										<th>Creditos Cursados</th>
										<th>Correo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($estudiantesTablas as $estudiantesTabla)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $estudiantesTabla->nombre }}</td>
											<td>{{ $estudiantesTabla->codigo }}</td>
											<td>{{ $estudiantesTabla->carrera }}</td>
											<td>{{ $estudiantesTabla->creditos_cursados }}</td>
											<td>{{ $estudiantesTabla->correo }}</td>

                                            <td>
                                                <form action="{{ route('estudiantes-tablas.destroy',$estudiantesTabla->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('estudiantes-tablas.show',$estudiantesTabla->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('estudiantes-tablas.edit',$estudiantesTabla->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $estudiantesTablas->links() !!}
            </div>
        </div>
    </div>
@endsection
