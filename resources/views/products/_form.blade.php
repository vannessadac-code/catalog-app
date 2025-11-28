@csrf

<div>
    <label for="name">Nombre</label>
    <input type="text" name="name" id="name" value="{{ old('name', $product->name ?? '') }}" required>
    @error('name') <div>{{ $message }}</div> @enderror
</div>

<div>
    <label for="slug">Slug (opcional)</label>
    <input type="text" name="slug" id="slug" value="{{ old('slug', $product->slug ?? '') }}">
    @error('slug') <div>{{ $message }}</div> @enderror
</div>

<div>
    <label for="description">Descripción</label>
    <textarea name="description" id="description">{{ old('description', $product->description ?? '') }}</textarea>
    @error('description') <div>{{ $message }}</div> @enderror
</div>

<div>
    <label for="price">Precio</label>
    <input type="number" step="0.01" name="price" id="price" value="{{ old('price', $product->price ?? '0.00') }}" required>
    @error('price') <div>{{ $message }}</div> @enderror
</div>

<div>
    <label for="stock">Stock</label>
    <input type="number" name="stock" id="stock" value="{{ old('stock', $product->stock ?? 0) }}" required>
    @error('stock') <div>{{ $message }}</div> @enderror
</div>

<div>
    <label for="image">Imagen (opcional)</label>
    <input type="file" name="image" id="image" accept="image/*">
    @error('image') <div>{{ $message }}</div> @enderror
</div>

<div>
    <label>
        <input type="checkbox" name="active" value="1" {{ old('active', $product->active ?? true) ? 'checked' : '' }}>
        Activo
    </label>
</div>