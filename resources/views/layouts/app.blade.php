<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CEFAEMPRESA - SENA Empresa: Gestión empresarial y formación agroindustrial en el Centro La Angostura">
    <title>CEFAEMPRESA</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="font-sans antialiased min-h-screen overflow-x-hidden">
    <!-- Navegación -->
    <nav class="glass p-4 shadow-lg fixed top-0 w-full z-50">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-3xl font-extrabold text-orange-300 tracking-tight">CEFAEMPRESA</a>
            
            <!-- Botón hamburguesa -->
            <button id="menu-toggle" class="md:hidden text-white focus:outline-none">
                <i id="menu-icon" class="fas fa-bars text-2xl"></i>
            </button>
    
            <!-- Menú -->
            <div id="menu" class="hidden md:flex md:space-x-6 absolute md:static top-16 left-0 w-full md:w-auto bg-gray-900 md:bg-transparent p-4 md:p-0 transition-all duration-300 ease-in-out z-40">
                <a href="/" class="text-lg font-semibold text-white hover:text-orange-300 transition duration-300 block md:inline py-2 md:py-0">Inicio</a>
                <a href="/nosotros" class="text-lg font-semibold text-white hover:text-orange-300 transition duration-300 block md:inline py-2 md:py-0">Nosotros</a>
                <a href="/productos" class="text-lg font-semibold text-white hover:text-orange-300 transition duration-300 block md:inline py-2 md:py-0">Productos</a>
                <a href="/formacion" class="text-lg font-semibold text-white hover:text-orange-300 transition duration-300 block md:inline py-2 md:py-0">Formación</a>
                <a href="/blog" class="text-lg font-semibold text-white hover:text-orange-300 transition duration-300 block md:inline py-2 md:py-0">Blog</a>
                <a href="/contacto" class="text-lg font-semibold text-white hover:text-orange-300 transition duration-300 block md:inline py-2 md:py-0">Contacto</a>
                <a href="{{ route('login') }}" class="text-lg font-semibold text-white hover:text-orange-300 transition duration-300 block md:inline py-2 md:py-0">Log in</a>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <main class="pt-16 min-h-screen w-full">
        @yield('content')
    </main>

    <!-- Pie de página -->
    <footer class="bg-gray-900 text-white p-8 mt-16">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h3 class="text-xl font-bold text-orange-300 mb-4">CEFAEMPRESA</h3>
                <p class="text-gray-400">Sistema Integrado de Control Empresarial y de Formación Agroindustrial del SENA La Angostura.</p>
            </div>
            <div>
                <h3 class="text-xl font-bold text-orange-300 mb-4">Enlaces Rápidos</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-400 hover:text-orange-300 transition duration-300">SofíaPlus</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-orange-300 transition duration-300">Territorium</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-orange-300 transition duration-300">Sistema de Bibliotecas</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-orange-300 transition duration-300">Agencia Pública de Empleo</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-xl font-bold text-orange-300 mb-4">Contacto</h3>
                <p class="text-gray-400">Centro La Angostura, Campoalegre, Huila, Colombia</p>
                <p class="text-gray-400">Email: gerentesenaempresa2023@gmail.com</p>
                <p class="text-gray-400">Teléfono: +57 000 000 000</p>
            </div>
        </div>
        <div class="text-center mt-8 text-sm text-gray-500 border-t border-gray-800 pt-4">
            © 2025 CEFAEMPRESA - Todos los derechos reservados.
        </div>
    </footer>

    @stack('scripts')

    <!-- Script para el menú hamburguesa -->
    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggleButton = document.getElementById('menu-toggle');
            const menu = document.getElementById('menu');
            const menuIcon = document.getElementById('menu-icon');
            
            toggleButton.addEventListener('click', function () {
                menu.classList.toggle('hidden');
                // Cambiar ícono entre hamburguesa y cerrar
                if (menu.classList.contains('hidden')) {
                    menuIcon.classList.remove('fa-times');
                    menuIcon.classList.add('fa-bars');
                } else {
                    menuIcon.classList.remove('fa-bars');
                    menuIcon.classList.add('fa-times');
                }
                console.log('Menú toggled:', menu.classList.contains('hidden') ? 'Oculto' : 'Visible'); // Para depurar
            });
        });
    </script>
    @endpush
</body>
</html>