@extends('layouts.app')

@section('content')
<section class="section container ">
    <div class="section-header">
        <h3 class="page-heading">Alumnos</h3>
    </div>
    <div class="row justify-content-center">
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">


                            <a class="btn btn-info" href="{{ route('alumnos.create')}}">Nuevo</a>
                            <table class="table table-striped mt-2">
                                <thead>
                                    <th>Id</th>
                                    <th>Matricula</th>
                                    <th>Nombre</th>
                                    <th>Apellido1</th>
                                    <th>Apellido2</th>
                                    <th>Carrera</th>
                                    <th>Grado</th>
                                    <th>Grupo</th>
                                    <th>Correo</th>
                                    <th>Telefono</th>
                                    <th>Opciones</th>
                                </thead>
                                <tbody>
                                    @foreach ($alumnos as $alumno)
                                    <tr>
                                        <td>{{ $alumno->Id}}</td>
                                        <td>{{ $alumno->Matricula}}</td>
                                        <td>{{ $alumno->Nombre}}</td>
                                        <td>{{ $alumno->Apellido1}}</td>
                                        <td>{{ $alumno->Apellido2}}</td>
                                        <td>{{ $alumno->Carrera}}</td>
                                        <td>{{ $alumno->Grado}}</td>
                                        <td>{{ $alumno->Grupo}}</td>
                                        <td>{{ $alumno->Correo}}</td>
                                        <td>{{ $alumno->Telefono}}</td>

                                        <td>
                                             <a href="{{ route('alumnos.edit', $alumno->Id) }}" class="btn btn-info">Editar</a>
                                             {!! Form::open(['method'=>'Delete', 'route'=> ['alumnos.destroy', $alumno->Id], 'style'=>'display:inline']) !!}
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