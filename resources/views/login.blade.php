@extends('layouts.plantillabase')

@section('contenido')

    <h1>Ingreso</h1>
    <form method="POST">
        @csrf
        <label>
            <input name="email" type="email" placeholder="Nombre de Usuario">
        </label><br>
        <label>
            <input name="password" type="password" placeholder="Clave de Usuario">
        </label><br>
        <button type="submit">Login</button>
    </form>





@endsection
