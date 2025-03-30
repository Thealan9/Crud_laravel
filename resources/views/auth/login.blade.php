@extends('layout.main_template')

@section('sectionMain')

<h1 class="display-1">Login</h1>
@dump($errors->all())

<form action="{{ route('login.handle') }}" method="POST">

    @csrf

    <label for="email">Correo Electronico</label>
    <input type="email" name="email">

    <label for="password">Contraseña</label>
    <input type="password" name="password">
 
    <button type="submit">Login</button>
</form>


@endsection