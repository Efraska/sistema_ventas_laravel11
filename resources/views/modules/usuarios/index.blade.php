@extends('layouts.main')

@section('titulo', $titulo)

@section('contenido')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Usuarios</h1>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Administrar Usuarios</h5>
            <p>
              Administrar cuentas y roles de usuarios.
            </p>
            <!-- Table with stripped rows -->
            <a href="" class="btn btn-primary">
              <i class="fa-solid fa-user-plus"></i>  Agregar nuevo usuario
            </a>
            <hr>
            <table class="table datatable">
              <thead>
                <tr>
                  <th class="text-center">Email</th>
                  <th class="text-center">Nombre</th>
                  <th class="text-center">Rol</th>
                  <th class="text-center">Cambiar Password</th>
                  <th class="text-center">Activo</th>
                  <th class="text-center">Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($items as $item)                   
                <tr class="text-center">
                  <td>{{ $item->email }}</td>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->rol }}</td>
                  <td>
                    <a href="" class="btn btn-secondary">
                      <i class="fa-solid fa-user-lock"></i>
                    </a>
                  </td>
                  <td>
                    @if ($item->activo)
                      <span class="badge bg-success"><i class="fa-solid fa-check"></i> Activo</span>
                    @else
                      <span class="badge bg-warning text-dark"><i class="fa-solid fa-xmark"></i> Inactivo</span>
                    @endif
                  </td>
                  <td>
                    <a href="#" class="btn btn-warning">
                      <i class="fa-solid fa-user-pen"></i>
                    </a>
                    <a href="#" class="btn btn-danger">
                      <i class="fa-solid fa-skull"></i>
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
