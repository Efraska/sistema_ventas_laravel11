@extends('layouts.main')

@section('titulo', $titulo)

@section('contenido')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Editar Compra</h1>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Edicion de : {{ $item->nombre_producto }}</h5>

            <form action="{{ route('compras.update', $item->id) }}" method="post">
                @csrf
                @method('PUT')
                <input type="text" id="producto_id" name="producto_id" value="{{ $item->producto_id}}" hidden>
                <label for="cantidad">Cantidad del producto</label>
                <input type="text" class="form-control" name="cantidad" id="cantidad" value="{{ $item->cantidad }}" required>
                <label for="precio_compra">Precio de compra</label>
                <input type="text" name="precio_compra" id="precio_compra" class="form-control" value="{{ $item->precio_compra }}" required>

                <button class="btn btn-warning mt-3">
                    <i class="fa-solid fa-pen-to-square"></i> Actualizar
                </button>
                <a href="{{ route("compras") }}" class="btn btn-danger mt-3">
                    <i class="fa-solid fa-xmark"></i> Cancelar
                </a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection
