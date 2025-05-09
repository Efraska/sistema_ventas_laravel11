@extends('layouts.main')

@section('titulo', $titulo)

@section('contenido')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Reportes de productos</h1>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Administrar Reportes de productos</h5>
            <p>
              Tipos de reportes del sistema de productos.
            </p>
            <div class="row">
              <div class="col text-end">
                <a href="{{ route('reportes_productos.falta_stock') }}" class="btn btn-primary btn-sm">Productos con cantidad 1 o 0</a>
              </div>
            </div>
            <hr>
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th class="text-start">Categoría</th>
                  <th class="text-start">Proveedor</th>
                  <th class="text-start">Nombre</th>
                  <th class="text-start">Imagen</th>
                  <th class="text-start">Descripcion</th>
                  <th class="text-start">Cantidad</th>
                  <th class="text-start">Venta</th>
                  <th class="text-start">Compra</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($items as $item)
                <tr>
                  <td>{{ $item->nombre_categoria }}</td>
                  <td>{{ $item->nombre_proveedor }}</td>
                  <td>{{ $item->nombre }}</td>
                  <td>
                    <img src="{{ asset('storage/' . $item->imagen_producto) }}" alt="" width="60px" height="60px">
                  </td>
                  <td>{{ $item->descripcion }}</td>
                  <td class="text-center">{{ $item->cantidad }}</td>
                  <td class="text-center">${{ $item->precio_compra }}</td>
                  <td class="text-center">${{ $item->precio_venta }}</td>
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