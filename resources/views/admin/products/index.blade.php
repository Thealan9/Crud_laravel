@extends('layout.main_template')

@section('sectionMain')
<h2 class="display-3">Catalogo de Dulces</h2>

<table class="table">
    <thead>
        <th>Nombre del producto</th>
        <th>Marca</th>
        <th>Cantidad</th>
        <th>Precio</th>
        <TH>Imagen</TH>
        <th>Acciones</th>
    </thead>
    <tbody>
        @foreach ($products as $p)
            <tr>
                <td> {{ $p->name_product }}</td>
                <td> {{ $p->brand_id }}</td>
                <td> {{ $p->stock}}</td>
                <td> {{ $p->price }}</td>
                <td> {{ $p->image}}</td>
                <td>
                    <button><a href="">Detalles</a></button>
                    <button><a href="">Editar</a></button>
                    <button><a href="">Eliminar</a></button>
                </td>
            </tr>
        @endforeach


    </tbody>
</table>
@endsection