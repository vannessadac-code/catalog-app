@extends('layouts.app')

@section('content')
    <h1>{{ $product->name }}</h1>

    <p>{{ $product->description }}</p>
    <p>Precio: {{ $product->price }}</p>
    <p>Stock: {{ $product->stock }}</p>
    <p>Activo: {{ $product->active ? 'Sí' : 'No' }}</p>

    <a href="{{ route('products.index') }}">Volver</a>
    <a href="{{ route('products.edit', $product) }}">Editar</a>
@endsection