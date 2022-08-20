@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">{{ __('Registro de Nuevo Docente') }}</div>

<div class="card-body">
    <form method="POST" action="{{ route('docentes.store') }}">
        @csrf

        <div class="row mb-3">
            <label for="NumeroEmpleado" class="col-md-4 col-form-label text-md-end">{{ __('Numero Empleado') }}</label>

            <div class="col-md-6">
                <input id="NumeroEmpleado" type="text" class="form-control @error('NumeroEmpleado') is-invalid @enderror" name="NumeroEmpleado" value="{{ old('NumeroEmpleado') }}" required autocomplete="NumeroEmpleado" autofocus>

                @error('Matricula')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="Nombre" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

            <div class="col-md-6">
                <input id="Nombre" type="text" class="form-control @error('Nombre') is-invalid @enderror" name="Nombre" value="{{ old('Nombre') }}" required autocomplete="Nombre" autofocus>

                @error('Nombre')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="Apellido1" class="col-md-4 col-form-label text-md-end">{{ __('Apellido Paterno') }}</label>

            <div class="col-md-6">
                <input id="Apellido1" type="text" class="form-control @error('Apellido1') is-invalid @enderror" name="Apellido1" value="{{ old('Apellido1') }}" required autocomplete="Apellido1" autofocus>

                @error('Apellido Paterno')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="Apellido2" class="col-md-4 col-form-label text-md-end">{{ __('Apellido Materno') }}</label>

            <div class="col-md-6">
                <input id="Apellido2" type="text" class="form-control @error('Apellido2') is-invalid @enderror" name="Apellido2" value="{{ old('Apellido2') }}" required autocomplete="Apellido2" autofocus>

                @error('Apellido Materno')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="TipoUsuario" class="col-md-4 col-form-label text-md-end">{{ __('Tipo Usuario') }}</label>

            <div class="col-md-6">
                <input id="TipoUsuario" type="text" class="form-control @error('TipoUsuario') is-invalid @enderror" name="TipoUsuario" value="{{ old('TipoUsuario') }}" required autocomplete="TipoUsuario" autofocus>

                @error('TipoUsuario')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

       
        <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="Correo" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="Telefonos" class="col-md-4 col-form-label text-md-end">{{ __('Telefonos') }}</label>

            <div class="col-md-6">
                <input id="Telefonos" type="text" class="form-control @error('Telefonos') is-invalid @enderror" name="Telefonos" value="{{ old('Telefonos') }}" required autocomplete="Telefonos" autofocus>

                @error('Telefono')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
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
