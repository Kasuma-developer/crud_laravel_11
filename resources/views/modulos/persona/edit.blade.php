@extends('layouts/main')
<h1>CRUD CON LARAVEl</h1>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('update', $item->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <label for="name">Escribe el nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $item -> nombre}}">
                        <label for="name">Escribe el apellido</label>
                        <input type="text" name="apellido" id="apellido" class="form-control" value="{{ $item -> apellido}}">
                        <label for="name">Escribe el ci</label>
                        <input type="number" name="ci" id="ci" class="form-control" value="{{ $item -> ci}}">
                        <label for="name">Escribe el nacimiento</label>
                        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" value="{{ $item -> fecha_nacimiento}}">
                        <label for="name">Escribe el clular</label>
                        <input type="text" name="celular" id="celular" class="form-control" value="{{ $item -> celular}}">
                        <button class="btn btn-warning mt-3">Actualizar</button>
                        <a href="{{ route('index') }}" class="btn btn-secondary mt-3">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>