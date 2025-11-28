@extends('layouts.app')

@section('content')
    <h1>Productos</h1>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <a href="{{ route('products.create') }}">Nuevo producto</a>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Activo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
            <tr>
                <td><a href="{{ route('products.show', $product) }}">{{ $product->name }}</a></td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->stock }}</td>
                <td>{{ $product->active ? 'Sí' : 'No' }}</td>
                <td>
                    <a href="{{ route('products.edit', $product) }}">Editar</a>
                    <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Eliminar?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="5">No hay productos.</td></tr>
            @endforelse
        </tbody>
    </table>

    {{ $products->links() }}
@endsection