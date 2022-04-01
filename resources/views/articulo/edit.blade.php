@extends('layouts.plantillabase')

@section('contenido')
<h2>Editar Articulo</h2>

<form action="/articulos/{{$articulo->id}}" method="POST" class="row g-3">
    @csrf
    @method('PUT')

  <div class="col-12">
    <label for="" class="form-label">Codigo</label>
    <input type="text" class="form-control" id="codigo" name="codigo" value="{{$articulo->codigo}}" required>
  </div>

  <div class="col-12">
    <label for="" class="form-label">Descripción</label>
    <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{$articulo->descripcion}}" required>
  </div>

  <div class="col-12">
    <label for="" class="form-label">Cantidad</label>
    <input type="number" class="form-control" id="cantidad" name="cantidad" value="{{$articulo->cantidad}}" required>
  </div>
  
  <div class="col-12">
    <label for="" class="form-label">Precio</label>
    <input type="number" class="form-control" id="precio" name="precio" step="any" value="0.00" value="{{$articulo->precio}}" required>
  </div>

  <div class="col-6">
    <a href="/articulos" class="btn btn-secondary" type="submit">Cancelar</a>
  </div>

  <div class="col-6">
    <button class="btn btn-success" type="submit">Guardar</button>
  </div>
</form>

@endsection