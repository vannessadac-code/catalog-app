@extends('layouts.app')

@section('content')
    <h1>Crear producto</h1>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @include('products._form')
        <button type="submit">Guardar</button>
        <a href="{{ route('products.index') }}">Cancelar</a>
    </form>
@endsection