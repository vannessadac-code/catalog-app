@extends('layouts.app')

@section('title', 'Lista de Productos')

@section('content')

<h1 class="mb-4">Productos</h1>

<a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Nuevo Producto</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($products as $product)
            <tr>
                <td>
                    @if($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" 
                             alt="{{ $product->name }}" 
                             width="80" height="80" 
                             style="object-fit: cover; border-radius: 8px;">
                    @else
                        <span class="text-muted">Sin imagen</span>
                    @endif
                </td>

                <td>{{ $product->name }}</td>
                <td>${{ number_format($product->price, 2) }}</td>

                <td>
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Editar</a>

                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar producto?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection