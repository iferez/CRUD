@extends('layouts.plantillabase')

@section('contenido')

<h2>Crear nuevo Articulo</h2>

<form action="/articulos" method="POST" class="row g-3">
    @csrf

  <div class="col-12">
    <label for="" class="form-label">Codigo</label>
    <input type="text" class="form-control" id="codigo" name="codigo" required>
  </div>

  <div class="col-12">
    <label for="" class="form-label">Descripción</label>
    <input type="text" class="form-control" id="descripcion" name="descripcion" required>
  </div>

  <div class="col-12">
    <label for="" class="form-label">Cantidad</label>
    <input type="number" class="form-control" id="cantidad" name="cantidad" required>
  </div>
  
  <div class="col-12">
    <label for="" class="form-label">Precio</label>
    <input type="number" class="form-control" id="precio" name="precio" step="any" value="0.00" required>
  </div>

  <div class="col-6">
    <a href="/articulos" class="btn btn-secondary" type="submit">Cancelar</a>
  </div>

  <div class="col-6">
    <button class="btn btn-success" type="submit">Guardar</button>
  </div>
</form>

@endsection