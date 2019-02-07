@extends('layouts.default')
@section('titulo','Mascotas - Lista Mascotas')
@section('subtitulo', 'Lista de mascotas')
@section('contenido')
<div class='row'>
    <div class="col-md-12">
    <div class="box">
    <div class="box-header with-border">
    <h3 class="box-title">Tabla de lista de mascotas</h3>
    </div>
    <div class=box-body>
<a href="{{route('mascotas.create')}}">
    <button>Agregar mascota</button>
    <div class="table-responsive">
    <table class='table'>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mascotas as $mascota)
                <tr>
                    <td>{{ $mascota->nombre }}</td>
                    <td>{{ $mascota->precio }}.00</td>
                    <td>
                    <a class="btn btn-primary" href="{{route('mascotas.edit',$mascota->id)}}">
                    
                    <i class="fa fa-fw fa-edit"></i>
                    </a>
                    
                    <form method="POST" 
                        action="{{route('mascotas.destroy',$mascota->id)}}">
                        @csrf
                        @method('DELETE')
                    <a type="submit" class="btn btn-danger">
                        <i class="fa fa-fw fa-trash"></i>
                    </a>
                    </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
@endsection