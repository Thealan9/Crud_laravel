@extends('layout.main_template')

@section('sectionMain')
   
    <table class="table">
        <thead>
            <th>¿Estas seguro que quieres eli,iomar el producto {{ $product->name_product }}?</th>


        </thead>
        <tbody>

            <tr>

                <td>
                    <div class="d-flex gap-2">

                        <form action="{{ route('products.index') }}" method="POST">
                            <button type="submit" class="btn btn-danger" ><i
                                    class="fa-solid fa-trash"></i>Cancelar</button>

                        </form>
                    </div>
                </td>

                <td>
                    <div class="d-flex gap-2">

                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-primary" ><i
                                    class="fa-solid fa-trash"></i>Confirmar</button>

                        </form>
                    </div>
                </td>

            </tr>



        </tbody>
    </table>
@endsection
