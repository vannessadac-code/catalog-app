@extends('layouts.app')

@section('content')
    <h1>Editar producto</h1>

    <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @include('products._form')
        <button type="submit">Actualizar</button>
        <a href="{{ route('products.index') }}">Cancelar</a>
    </form>
@endsection