@extends('layouts.main')

@section('titulo', $titulo)

@section('contenido')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Editar Usuario</h1>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Editar Usuario</h5>

            <form action="{{ route("usuarios.update", $item->id) }}" method="post">
                @csrf
                @method('PUT')
                <label for="name">Nombre de usuario</label>
                <input type="text" class="form-control" name="name" id="name" required value="{{ $item->name }}">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control" required value="{{ $item->email }}">
                <label for="rol">Rol de usuario</label>
                <select name="rol" id="rol" class="form-select">
                    <option value="">Selecciona el rol</option>
                    @if ($item->rol == 'admin')
                        <option value="admin" selected>Admin</option>
                        <option value="cajero">Cajero</option>
                    @else
                        <option value="admin">Admin</option>
                        <option value="cajero" selected>Cajero</option> 
                    @endif
                </select>
                <button class="btn btn-warning mt-3">
                    <i class="fa-solid fa-pen-to-square"></i> Actualizar
                </button>
                <a href="{{ route("usuarios") }}" class="btn btn-danger mt-3">
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
