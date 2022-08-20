@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">{{ __('Registro de Nuevo Alumno') }}</div>

<div class="card-body">
    <form method="POST" action="{{ route('alumnos.update', $alumno->Id) }}">
        @csrf
        @method('PUT')

        <div class="row mb-3">
            <label for="Matricula" class="col-md-4 col-form-label text-md-end">{{ __('Matricula') }}</label>

            <div class="col-md-6">
                <input id="Matricula" type="text" class="form-control"  name="Matricula"  autofocus value=" {{$alumno->Id}}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="Nombre" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

            <div class="col-md-6">
                <input id="Nombre" type="text" class="form-control " name="Nombre" required autocomplete="Nombre" autofocus value=" {{$alumno->Nombre}}">

            
            </div>
        </div>
        <div class="row mb-3">
            <label for="Apellido1" class="col-md-4 col-form-label text-md-end">{{ __('Apellido Paterno') }}</label>

            <div class="col-md-6">
                <input id="Apellido1" type="text" class="form-control " name="Apellido1" required autocomplete="Apellido1" autofocus value=" {{$alumno->Apellido1}}">

        
            </div>
        </div>
        <div class="row mb-3">
            <label for="Apellido2" class="col-md-4 col-form-label text-md-end">{{ __('Apellido Materno') }}</label>

            <div class="col-md-6">
                <input id="Apellido2" type="text" class="form-control " name="Apellido2" required autocomplete="Apellido2" autofocus value=" {{$alumno->Apellido2}}">

          
            </div>
        </div>

        <div class="row mb-3">
            <label for="Carrera" class="col-md-4 col-form-label text-md-end">{{ __('Carrera') }}</label>

            <div class="col-md-6">
                <input id="Carrera" type="text" class="form-control " name="Carrera"  required autocomplete="Carrera" autofocus value=" {{$alumno->Carrera}}">

        
            </div>
        </div>

        <div class="row mb-3">
            <label for="Grado" class="col-md-4 col-form-label text-md-end">{{ __('Grado') }}</label>

            <div class="col-md-6">
                <input id="Grado" type="text" class="form-control " name="Grado" required autocomplete="Grado" autofocus value=" {{$alumno->Grado}}">

               
            </div>
        </div>

        <div class="row mb-3">
            <label for="Grupo" class="col-md-4 col-form-label text-md-end">{{ __('Grupo') }}</label>

            <div class="col-md-6">
                <input id="Grupo" type="text" class="form-control " name="Grupo"  required autocomplete="Grupo" autofocus value=" {{$alumno->Grupo}}">

           
            </div>
        </div>


      

        <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control " name="Correo"  required autocomplete="email" value=" {{$alumno->Correo}}">

              
            </div>
        </div>

        <div class="row mb-3">
            <label for="Telefono" class="col-md-4 col-form-label text-md-end">{{ __('Telefono') }}</label>

            <div class="col-md-6">
                <input id="Telefono" type="text" class="form-control " name="Telefono" required autocomplete="Telefono" autofocus value=" {{$alumno->Telefono}}">

              
            </div>
</div>
    

        <div class="row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Registrar') }}
                </button>
            </div>
        </div>
    </form>
</div>
            </div>
        </div>
    </div>
</div>
@endsection
