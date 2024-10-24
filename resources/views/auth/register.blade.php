@extends('layouts.simple')


@section('title', 'Registro')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="text-center">
        <!-- Logo de FarmApp -->
        <img src="{{ asset('images/logo.png') }}" alt="FarmApp Logo" width="100" height="100">
        <!-- Título de la App -->
        <h1 class="my-3">FarmApp</h1>
        <!-- Slogan -->
        <h3 class="text-primary mb-4">Tu salud, nuestra prioridad</h3>
        <!-- Botón de registro en la parte superior -->
        <a href="#" class="btn btn-outline-secondary mb-4">Registrarse</a>

        <!-- Formulario de Registro -->
        <div class="card p-4 shadow-sm" style="width: 22rem;">
            <form method="POST" action="">
                @csrf
                <!-- Campo de Nombre -->
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre completo" required>
                </div>
                <!-- Campo de Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Correo" required>
                </div>
                <!-- Campo de Contraseña -->
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
                </div>
                <!-- Botón de Enviar -->
                <button type="submit" class="btn btn-dark w-100">Registrarse</button>
            </form>
        </div>
    </div>
</div>
@endsection
