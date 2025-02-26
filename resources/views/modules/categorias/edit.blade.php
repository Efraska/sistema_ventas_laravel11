@extends('layouts.main')

@section('titulo', $titulo)

@section('contenido')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Editar Categoría</h1>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Editar Categoría</h5>

            <form action="{{ route("categorias.update", $item->id) }}" method="post">
                @csrf
                @method("PUT")
                <label for="nombre">Nombre de categoría</label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $item->nombre }}" required>
                <button class="btn btn-warning mt-3">
                <i class="fa-solid fa-rotate"></i> Actualizar
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
