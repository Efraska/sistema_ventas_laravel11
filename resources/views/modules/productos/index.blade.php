@extends('layouts.main')

@section('titulo', $titulo)

@section('contenido')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Productos</h1>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Administrar productos y stock</h5>
            <p>
              Administrar el stock del sistema.
            </p>
            <!-- Table with stripped rows -->
            <a href="{{ route('productos.create') }}" class="btn btn-primary">
              <i class="fa-solid fa-circle-plus"></i>  Crear producto
            </a>
            <hr>
            <table class="table datatable">
              <thead>
                <tr>
                  <th class="text-center">Categoría</th>
                  <th class="text-center">Proveedor</th>
                  <th class="text-center">Nombre</th>
                  <th class="text-center">Imagen</th>
                  <th class="text-center">Descripcion</th>
                  <th class="text-center">Cantidad</th>
                  <th class="text-center">Venta</th>
                  <th class="text-center">Compra</th>
                  <th class="text-center">Activo</th>
                  <th class="text-center">Comprar</th>
                  <th class="text-center">Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($items as $item)
                <tr class="text-center">
                  <td>{{ $item->nombre_categoria }}</td>
                  <td>{{ $item->nombre_proveedor }}</td>
                  <td>{{ $item->nombre }}</td>
                  <td></td>
                  <td>{{ $item->descripcion }}</td>
                  <td>{{ $item->cantidad }}</td>
                  <td>{{ $item->precio_compra }}</td>
                  <td>{{ $item->precio_venta }}</td>
                  <td>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="{{ $item->id }}" {{ $item->activo ? 'checked' : '' }} >
                      </div>
                  </td>
                  <td>
                    <a href="#" class="btn btn-info">
                      <i class="fa-solid fa-wallet"></i>  Comprar
                    </a>
                  </td>
                  <td>
                    <a href="{{ route('productos.edit', $item->id) }}" class="btn btn-warning">
                      <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <a href="{{ route('productos.show', $item->id) }}" class="btn btn-danger">
                      <i class="fa-solid fa-trash-can"></i>
                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <!-- End Table with stripped rows -->
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection