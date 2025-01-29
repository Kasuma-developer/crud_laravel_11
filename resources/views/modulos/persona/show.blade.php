@extends('layouts/main')
<div class="container">
    <h2>MOSTRAR INFORMACION DE: {{ $item -> nombre}}</h2>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table table-sm table-bordered text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>APELLIDO</th>
                                <th>CI</th>
                                <th>FECHA DE NACIMIENTO</th>
                                <th>CELULAR</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->nombre}}</td>
                                <td>{{$item->apellido}}</td>
                                <td>{{$item->ci}}</td>
                                <td>{{$item->fecha_nacimiento}}</td>
                                <td>{{$item->celular}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{route('index')}}" class="btn btn-secondary mt-4">Cancelar</a>
                </div>
            </div>
        </div>
    </div>
</div>