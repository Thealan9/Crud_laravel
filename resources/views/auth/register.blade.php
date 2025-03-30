@extends('layout.main_template')

@section('sectionMain')

<h1 class="display-1">Register</h1>
@dump($errors->all())

<form action="{{ route('register.handle') }}" method="POST">

    @csrf
    <label for="name">Nombre</label>
    <input type="text" name="name">

    <label for="email">Correo Electronico</label>
    <input type="email" name="email">

    <label for="password">Contraseña</label>
    <input type="password" name="password">
    
    <label for="password_confirmation">Confirmar contraseña</label>
    <input type="password" name="password_confirmation">

    <button type="submit">registrar</button>
</form>


@endsection