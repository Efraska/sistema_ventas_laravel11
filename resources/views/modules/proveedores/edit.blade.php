@extends('layouts.main')

@section('titulo', $titulo)

@section('contenido')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Editar Proveedor</h1>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Editar Proveedor</h5>

            <form action="{{ route("proveedores.update", $item->id) }}" method="post">
                @csrf
                @method("PUT")
                <label for="nombre">Nombre de proveedor</label>
                <input type="text" class="form-control" name="nombre" id="nombre" required value="{{ $item->nombre }}">
                <label for="telefono">Telefono</label>
                <input type="text" class="form-control" name="telefono" id="telefono" required value="{{ $item->telefono }}">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" required value="{{ $item->email }}">
                <label for="cp">Código Postal</label>
                <input type="text" class="form-control" name="cp" id="cp" required value="{{ $item->cp }}">
                <label for="sitio_web">Sitio Web</label>
                <input type="text" class="form-control" name="sitio_web" id="sitio_web" required value="{{ $item->sitio_web }}">
                <label for="notas">Notas</label>
                <textarea name="notas" id="notas" cols="30" rows="10" class="form-control">{{ $item->notas }}</textarea>
                <button class="btn btn-warning mt-3">
                  <i class="fa-solid fa-pen-to-square"></i> Actualizar
                </button>
                <a href="{{ route("proveedores") }}" class="btn btn-danger mt-3">
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