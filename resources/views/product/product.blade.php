@extends('layouts.app')

@section('title', 'Producto')

@section('content')
<div class="container mt-4">
    <div class="row">
        <!-- Sección de imagen del producto -->
        <div class="col-md-6">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Imagen principal -->
                    <div class="carousel-item active">
                        <img src="{{ asset('images/product-image.jpg') }}" class="d-block w-100" alt="Nombre del producto">
                    </div>
                    <!-- Imagen secundaria (puedes añadir más items si es necesario) -->
                    <div class="carousel-item">
                        <img src="{{ asset('images/product-image-2.jpg') }}" class="d-block w-100" alt="Nombre del producto 2">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        </div>

        <!-- Sección de descripción y compra -->
        <div class="col-md-6">
            <!-- Nombre del producto -->
            <h2 class="mb-3">Nombre del Producto</h2>
            <!-- Información del producto -->
            <p class="text-muted">Presentación: <strong>tubo x 15 ml</strong></p>
            <p class="text-muted">Referencia: <strong>137624</strong></p>
            <p class="text-muted">Incluye 19% de impuestos</p>
            <!-- Precio del producto -->
            <h3 class="text-danger">$59.000</h3>
            <p class="text-muted">mililitro a $3.933,33</p>

            <!-- Botón para añadir al carrito -->
            <div class="d-flex align-items-center my-4">
                <button class="btn btn-danger btn-lg me-3">
                    <i class="bi bi-cart-plus"></i> Añadir al carrito
                </button>
                <!-- Botones de compartir y comparar -->
                <button class="btn btn-outline-secondary me-2">
                    <i class="bi bi-arrows-move"></i> Comparar
                </button>
                <button class="btn btn-outline-secondary">
                    <i class="bi bi-share"></i> Compartir
                </button>
            </div>

            <!-- Breve descripción del producto -->
            <p class="mt-4">Este producto es ideal para el cuidado intenso de los ojos. Hidrata profundamente y ayuda a reducir las líneas de expresión.</p>
        </div>
    </div>
</div>
@endsection
