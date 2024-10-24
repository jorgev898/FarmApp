@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="row">
        <!-- Filtros -->
        <div class="col-md-3">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Filtros</h5>
                    <div class="mb-3">
                        <h6>Características</h6>
                        <ul class="list-unstyled">
                            <li><input type="checkbox"> Característica 1</li>
                            <li><input type="checkbox"> Característica 2</li>
                            <li><input type="checkbox"> Característica 3</li>
                        </ul>
                    </div>
                    <div class="mb-3">
                        <h6>Precio</h6>
                        <input type="range" class="form-range" min="0" max="100" value="50">
                        <p>$0 - $100</p>
                    </div>
                    <div class="mb-3">
                        <h6>Color</h6>
                        <ul class="list-unstyled">
                            <li><input type="checkbox"> Color 1</li>
                            <li><input type="checkbox"> Color 2</li>
                        </ul>
                    </div>
                    <div class="mb-3">
                        <h6>Tamaño</h6>
                        <ul class="list-unstyled">
                            <li><input type="checkbox"> Pequeño</li>
                            <li><input type="checkbox"> Mediano</li>
                            <li><input type="checkbox"> Grande</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Productos -->
        <div class="col-md-9">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <input type="text" class="form-control w-75" placeholder="Buscar">
                <select class="form-select w-25">
                    <option value="new">Nuevo</option>
                    <option value="asc">Precio Ascendente</option>
                    <option value="desc">Precio Descendente</option>
                    <option value="review">Reseña</option>
                </select>
            </div>
            <div class="row">
                <!-- Producto -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ asset('images/product1.png') }}" class="card-img-top" alt="Vitamina C">
                        <div class="card-body">
                            <h5 class="card-title">Vitamina C</h5>
                            <p class="card-text">$15.000</p>
                        </div>
                    </div>
                </div>
                <!-- Otro Producto -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ asset('images/product2.png') }}" class="card-img-top" alt="Analgésico">
                        <div class="card-body">
                            <h5 class="card-title">Analgésico</h5>
                            <p class="card-text">$20.000</p>
                        </div>
                    </div>
                </div>
                <!-- Repite para otros productos -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ asset('images/product3.png') }}" class="card-img-top" alt="Protector Solar">
                        <div class="card-body">
                            <h5 class="card-title">Protector Solar</h5>
                            <p class="card-text">$45.000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
