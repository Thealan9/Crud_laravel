@extends('Admin.layout.main_template')

@section('sectionMain')
<div class="container ">
    <div class="d-flex justify-content-between align-items-center mb-3 ">
        <h2>Proveedores</h2>
        <button class="btn btn-success">Agregar Proveedor</button>
    </div>

    <!-- Encabezados -->
    <div class="row fw-bold text-uppercase border-bottom pb-2 ">
        <div class="col-3">Nombre</div>
        <div class="col-4">Correo Electrónico</div>
        <div class="col-3">Teléfono</div>
        <div class="col-2 text-center">Acciones</div>
    </div>

    @foreach ($supplier as $s)
    <div class="row bg-light p-2 mb-2 rounded">
        <div class="col-3">{{ $s->name_supplier }}</div>
        <div class="col-4">{{ $s->email }} </div>
        <div class="col-3">{{ $s->phone_supplier }} </div>
        <div class="col-2 text-center">
            <button class="btn btn-warning btn-sm">
                <i class="fa-solid fa-pen"></i>
            </button>
            <button class="btn btn-danger btn-sm">
                <i class="fa-solid fa-trash-can"></i>
            </button>
        </div>
    </div>
    @endforeach



</div>


@endsection




