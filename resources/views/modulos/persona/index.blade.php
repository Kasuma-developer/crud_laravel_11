@extends('layouts/main')
@section('contenido')
<center><h1>CRUD CON LARAVEl</h1></center>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('creacion') }}" class="btn btn-info add-new"> 
                    <i class="fa-solid fa-square-plus"></i>
                        Agregar
                    </a>
                    <hr>
                    <table class="table table-primary table-sm table-bordered text-center">
                        <thead>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>APELLIDO</th>
                            <th>CI</th>
                            <th>FECHA DE NACIMIENTO</th>
                            <th>CELULAR</th>
                            <th>ACCIONES</th>
                        </thead>
                        <tbody>
                            @forelse($items as $item)
                            <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nombre }}</td>
                            <td>{{ $item->apellido }}</td>
                            <td>{{ $item->ci }}</td>
                            <td>{{ $item->fecha_nacimiento }}</td>
                            <td>{{ $item->celular }}</td>
                            <td>
                                <form action=" {{route('destroy', $item->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('show', $item -> id)}}" class="btn btn-info"><i class="fa-solid fa-eye"></i></i></a>
                                    <a href="{{ route('edit', $item -> id)}}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <button class="btn btn-danger"><i class="fa-solid fa-skull-crossbones"></i></button>
                                </form>
                            </td>
                            </tr>
                            @empty
                            <tr>
                                <td>NO HAY DATOS </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end">
                        {{ $items -> links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection