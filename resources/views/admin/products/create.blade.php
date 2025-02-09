@extends('layout.main_template')

@section('sectionMain')
    <h2 class="display-3">Formulario registro de dulces </h2>



    <div class="container text-center">
        <div class="row">
            <div class="col">

            </div>
            <div class="col">
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf

                    <label class="form-label">Nombre del Producto</label>
                    <input type="text" class="form-control" name="name_product">

                    <label class="form-label">Marca</label>
                    <select class="form-select" aria-label="Default select example" name="brand_id">

                        <option value="1">Selecciona . . </option>
                        @foreach ($brands as $brand => $id)
                            <option value="{{ $id }}">{{ $brand }}</option>
                        @endforeach


                    </select>

                    <label class="form-label">Cantidad </label>
                    <input type="number" class="form-control" name="stock">

                    <label class="form-label">Precio Unitario </label>
                    <input type="text" class="form-control" name="unit_price">

                    <label class="form-label">Imagen</label>
                    <input class="form-control" type="file" name="image">

                    <br>
                    <button type="submit" class="btn btn-primary">Registrar</button>



                </form>

            </div>
            <div class="col">

            </div>
        </div>
    </div>
@endsection
