@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">{{ __('Registro de Nuevo Alumno') }}</div>

<div class="card-body">
    <form method="POST" action="{{ route('alumnos.store') }}">
        @csrf

        <div class="row mb-3">
            <label for="Matricula" class="col-md-4 col-form-label text-md-end">{{ __('Matricula') }}</label>

            <div class="col-md-6">
                <input id="Matricula" type="text" class="form-control @error('Matricula') is-invalid @enderror" name="Matricula" value="{{ old('Matricula') }}" required autocomplete="Matricula" autofocus>

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
            <label for="Carrera" class="col-md-4 col-form-label text-md-end">{{ __('Carrera') }}</label>

            <div class="col-md-6">
                <input id="Carrera" type="text" class="form-control @error('Carrera') is-invalid @enderror" name="Carrera" value="{{ old('Carrera') }}" required autocomplete="Carrera" autofocus>

                @error('Carrera')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="Grado" class="col-md-4 col-form-label text-md-end">{{ __('Grado') }}</label>

            <div class="col-md-6">
                <input id="Grado" type="text" class="form-control @error('Grado') is-invalid @enderror" name="Grado" value="{{ old('Grado') }}" required autocomplete="Grado" autofocus>

                @error('Carrera')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="Grupo" class="col-md-4 col-form-label text-md-end">{{ __('Grupo') }}</label>

            <div class="col-md-6">
                <input id="Grupo" type="text" class="form-control @error('Grupo') is-invalid @enderror" name="Grupo" value="{{ old('Grupo') }}" required autocomplete="Grupo" autofocus>

                @error('Grupo')
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
            <label for="Telefono" class="col-md-4 col-form-label text-md-end">{{ __('Telefono') }}</label>

            <div class="col-md-6">
                <input id="Telefono" type="text" class="form-control @error('Telefono') is-invalid @enderror" name="Telefono" value="{{ old('Telefono') }}" required autocomplete="Telefono" autofocus>

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
