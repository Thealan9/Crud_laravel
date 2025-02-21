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
                    <td> {{ $p->stock }}</td>
                    <td> {{ $p->unit_price }}</td>
                    <td> {{ $p->image }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('products.show', $p) }}"><i class="fa-solid fa-eye"></i></a>
                        <a class="btn btn-warning" href="{{ route('products.edit', $p) }}"><i
                                class="fa-solid fa-pen-to-square"></i></a>

                    </td>
                    <td>
                        <form action="{{ route('products.destroy', $p) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger" href=""><i
                                    class="fa-solid fa-trash"></i></button>

                        </form>
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>

    {{$products->links()}}
@endsection
