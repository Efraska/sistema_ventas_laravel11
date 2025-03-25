@extends('layouts.main')

@section('titulo', $titulo)

@section('contenido')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Iniciar Compra</h1>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Nueva compra de : {{ $item->nombre }}</h5>

            <form action="{{ route('compras.store') }}" method="post">
                @csrf
                <input type="text" value="{{ $item->id }}" id="id" name="id" hidden>
                <label for="cantidad">Cantidad del producto</label>
                <input type="text" class="form-control" name="cantidad" id="cantidad" required>
                <label for="precio_compra">Precio de compra</label>
                <input type="text" name="precio_compra" id="precio_compra" class="form-control" required>

                <button class="btn btn-primary mt-3">
                <i class="fa-solid fa-floppy-disk"></i> Comprar
                </button>
                <a href="{{ route("productos") }}" class="btn btn-danger mt-3">
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
