@extends('layouts.plantillabase');

@section('contenido')
<h2>Actualizacion de datos de un producto</h2>

<form action="/productos/{{$producto->id}}" method="POST">
    @csrf
    @method('PUT')
    @csrf
    <div class = "mb-3">
        <label for="" class="form-label">Codigo</label>
        <input id="codigo" name="codigo" type="text" class="form-control" value="{{$producto->codigo}}">
    </div>
    <div class = "mb-3">
        <label for="" class="form-label">Descripcion</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$producto->descripcion}}">
    </div>
    <div class = "mb-3">
        <label for="" class="form-label">Cantidad</label>
        <input id="cantidad" name="cantidad" type="number" class="form-control" value="{{$producto->cantidad}}">
    </div>
    <div class = "mb-3">
        <label for="" class="form-label">Precio</label>
        <input id="precio" name="precio" type="number" step="any"class="form-control" value="{{$producto->presio}}">
    </div>
    <a href="/productos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@endsection