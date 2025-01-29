@extends('layouts/main')
<h1>CRUD CON LARAVEL</h1>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('store') }}" method="post">
                        @csrf
                        @method('POST')

                        <!-- Campo Nombre -->
                        <label for="nombre">Escribe el nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control">
                        @error('nombre')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <!-- Campo Apellido -->
                        <label for="apellido">Escribe el apellido</label>
                        <input type="text" name="apellido" id="apellido" class="form-control">
                        @error('apellido')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <!-- Campo CI -->
                        <label for="ci">Escribe el CI</label>
                        <input type="number" name="ci" id="ci" class="form-control">
                        @error('ci')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <!-- Campo Fecha de Nacimiento -->
                        <label for="fecha_nacimiento">Escribe la fecha de nacimiento</label>
                        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control">
                        @error('fecha_nacimiento')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <!-- Campo Celular -->
                        <label for="celular">Escribe el celular</label>
                        <input type="text" name="celular" id="celular" class="form-control">
                        @error('celular')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <!-- Botones -->
                        <button class="btn btn-outline-primary mt-3">Agregar</button>
                        <a href="{{ route('index') }}" class="btn btn-secondary mt-3">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>