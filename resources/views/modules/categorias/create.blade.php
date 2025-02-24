@extends('layouts.main')

@section('titulo', $titulo)

@section('contenido')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Agregar Categoría</h1>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Agregar Nueva Categoría</h5>

            <form action="{{ route("categorias.store") }}" method="post">
                @csrf
                <label for="nombre">Nombre de categoría</label>
                <input type="text" class="form-control" name="nombre" id="nombre" required>
                <button class="btn btn-primary mt-3">
                <i class="fa-solid fa-floppy-disk"></i> Guardar
                </button>
                <a href="{{ route("categorias") }}" class="btn btn-danger mt-3">
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
