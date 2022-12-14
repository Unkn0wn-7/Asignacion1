@extends('layouts.plantillabase');

@section('contenido')
<a href="productos/create" class = "btn btn-primary">CREAR</a>
<table class = "table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Codigo</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($productos as $pro)
        <tr>
            <td>{{$pro->id}}</td>
            <td>{{$pro->Codigo}}</td>
            <td>{{$pro->Descripcion}}</td>
            <td>{{$pro->Cantidad}}</td>
            <td>{{$pro->Presio}}</td>
            <td>
                <form action="{{route('productos.destroy',$pro->id)}}"method="POST"></form>
                <a href="/productos/{{$pro->id}}/edit" class = "btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit"class="btn btn-danger">Borrar</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection