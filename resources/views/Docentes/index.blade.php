@extends('layouts.app')

@section('content')
<section class="section container ">
    <div class="section-header">
        <h3 class="page-heading">Docentes</h3>
    </div>
    <div class="row justify-content-center">
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                       
                            <a class="btn btn-info" href="{{ route('docentes.create')}}">Nuevo</a>
                            <table class="table table-striped mt-2">
                                <thead>
                                    <th>Id</th>
                                    <th>NumeroEmpleado</th>
                                    <th>Nombre</th>
                                    <th>Apellido1</th>
                                    <th>Apellido2</th>
                                    <th>TipoUsuario</th>
                                    <th>Correo</th>
                                    <th>Telefonos</th>
                                    <th>Opciones</th>
                                </thead>
                                <tbody>
                                    @foreach ($docentes as $docente)
                                    <tr>
                                        <td>{{ $docente->Id}}</td>
                                        <td>{{ $docente->NumeroEmpleado}}</td>
                                        <td>{{ $docente->Nombre}}</td>
                                        <td>{{ $docente->Apellido1}}</td>
                                        <td>{{ $docente->Apellido2}}</td>
                                        <td>{{ $docente->TipoUsuario}}</td>
                                        <td>{{ $docente->Correo}}</td>
                                        <td>{{ $docente->Telefonos}}</td>

                                        <td>
                                             <a href="{{ route('docentes.edit', $docente->Id) }}" class="btn btn-info">Editar</a>
                                             {!! Form::open(['method'=>'Delete', 'route'=> ['docentes.destroy', $docente->Id], 'style'=>'display:inline']) !!}
                                             {!! Form::submit ('Borrar', ['class'=>'btn btn-danger'])!!}
                                             {!! Form::close()!!}



                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection