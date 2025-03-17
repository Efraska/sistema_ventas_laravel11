@extends('layouts.main')

@section('titulo', $titulo)

@section('contenido')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Eliminar Proveedor</h1>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">¿Seguro de eliminar este proveedor?</h5>
            <p>
              Una vez eliminado el proveedor no podrá ser recuperado!!!.
            </p>
            <!-- Table with stripped rows -->
            <table class="table">
              <thead>
                <tr>
                  <th class="text-center">Nombre Proveedor</th>
                  <th class="text-center">Teléfono</th>
                  <th class="text-center">Email</th>
                  <th class="text-center">CP</th>
                  <th class="text-center">Sitio Web</th>
                  <th class="text-center">Nota</th>
                </tr>
              </thead>
              <tbody>
                <tr class="text-center">
                  <td>{{ $item->nombre }}</td>
                  <td>{{ $item->telefono }}</td>
                  <td>{{ $item->email }}</td>
                  <td>{{ $item->cp }}</td>
                  <td>{{ $item->sitio_web }}</td>
                  <td>{{ $item->notas }}</td>
                </tr>
              </tbody>
            </table>
            <br>
            <form action="{{ route("proveedores.destroy", $item->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger mt-3">
                    <i class="fa-solid fa-circle-exclamation"></i>  Eliminar Proveedor
                </button>
                <a href="{{ route("proveedores") }}" class="btn btn-info mt-3">
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