<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Catálogo')</title>

    {{-- BOOTSTRAP --}}
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    {{-- SECCIÓN PARA ESTILOS ADICIONALES --}}
    @stack('styles')
</head>

<body class="bg-light">

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('products.index') }}">Catálogo</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.index') }}">Productos</a>
                    </li>

                    <li class="nav-item">
                        <a class="btn btn-success ms-3" href="{{ route('products.create') }}">
                            + Nuevo Producto
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    {{-- CONTENIDO PRINCIPAL --}}
    <main class="container py-4">

        {{-- MENSAJES FLASH --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        {{-- RENDERIZAR EL CONTENIDO DE CADA VISTA --}}
        @yield('content')

    </main>

    {{-- FOOTER --}}
    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <small>© {{ date('Y') }} — Aplicación de Catálogo en Laravel</small>
    </footer>

    {{-- BOOTSTRAP JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    {{-- SECCIÓN PARA SCRIPTS ADICIONALES --}}
    @stack('scripts')

</body>
</html>