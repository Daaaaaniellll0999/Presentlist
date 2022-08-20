@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">{{ __('Editar Docentes') }}</div>

<div class="card-body">
    <form method="POST" action="{{ route('docentes.update', $docente->Id) }}">
        @csrf
        @method('PUT')

        <div class="row mb-3">
            <label for="NumeroEmpleado" class="col-md-4 col-form-label text-md-end">{{ __('Numero Empleado') }}</label>

            <div class="col-md-6">
                <input id="NumeroEmpleado" type="text" class="form-control"  name="NumeroEmpleado"  autofocus value=" {{$docente->Id}}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="Nombre" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

            <div class="col-md-6">
                <input id="Nombre" type="text" class="form-control " name="Nombre" required autocomplete="Nombre" autofocus value=" {{$docente->Nombre}}">

            
            </div>
        </div>
        <div class="row mb-3">
            <label for="Apellido1" class="col-md-4 col-form-label text-md-end">{{ __('Apellido Paterno') }}</label>

            <div class="col-md-6">
                <input id="Apellido1" type="text" class="form-control " name="Apellido1" required autocomplete="Apellido1" autofocus value=" {{$docente->Apellido1}}">

        
            </div>
        </div>
        <div class="row mb-3">
            <label for="Apellido2" class="col-md-4 col-form-label text-md-end">{{ __('Apellido Materno') }}</label>

            <div class="col-md-6">
                <input id="Apellido2" type="text" class="form-control " name="Apellido2" required autocomplete="Apellido2" autofocus value=" {{$docente->Apellido2}}">

          
            </div>
        </div>

        <div class="row mb-3">
            <label for="TipoUsuario" class="col-md-4 col-form-label text-md-end">{{ __('Tipo Usuario') }}</label>

            <div class="col-md-6">
                <input id="TipoUsuario" type="text" class="form-control " name="TipoUsuario"  required autocomplete="TipoUsuario" autofocus value=" {{$docente->TipoUsuario}}">

        
            </div>
        </div>
      

        <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control " name="Correo"  required autocomplete="email" value=" {{$docente->Correo}}">

              
            </div>
        </div>

        <div class="row mb-3">
            <label for="Telefono" class="col-md-4 col-form-label text-md-end">{{ __('Telefono') }}</label>

            <div class="col-md-6">
                <input id="Telefono" type="text" class="form-control " name="Telefono" required autocomplete="Telefono" autofocus value=" {{$docente->Telefonos}}">

              
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
