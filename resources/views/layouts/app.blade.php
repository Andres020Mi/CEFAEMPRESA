<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Improved Meta Description for better click-through rates -->
        <meta name="description" content="CEFAEMPRESA - Sistema Integrado de Gestión Empresarial y Formación Agroindustrial en el Centro La Angostura, SENA. Explora nuestros servicios y productos sostenibles.">
        <!-- Keywords for SEO (optional, but can help with some search engines) -->
        <meta name="keywords" content="CEFAEMPRESA, SENA Empresa, agroindustrial, formación, gestión empresarial, Centro La Angostura, productos sostenibles, Huila">
        <!-- Robots Meta Tag to ensure indexing -->
        <meta name="robots" content="index, follow">
        <!-- Page Title with keyword optimization -->
        <title>{{$keyword->word}} | CEFAEMPRESA - Centro de Formación Agroindustrial La Angostura</title>
        <!-- Canonical URL to avoid duplicate content issues -->
        <link rel="canonical" href="https://cefaempresa.com">
        <!-- Favicon -->
        <link rel="icon" href="{{ asset('img/logoCEFAEMPRESA.png') }}" type="image/png">
        <!-- Open Graph Tags (corrected and optimized) -->
        <meta property="og:title" content="{{$keyword->word}} | CEFAEMPRESA - Formación Agroindustrial">
        <meta property="og:description" content="Sistema Integrado de Control Empresarial y Formación Agroindustrial del SENA La Angostura. Conoce nuestros servicios y productos sostenibles.">
        <meta property="og:image" content="{{ asset('img/logoCEFAEMPRESA.png') }}">
        <meta property="og:url" content="https://cefaempresa.com">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="CEFAEMPRESA">
        <!-- Twitter Card Tags (corrected and optimized) -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{$keyword->word}} | CEFAEMPRESA - SENA Empresa">
        <meta name="twitter:description" content="Plataforma oficial de CEFAEMPRESA - Gestión y formación agroindustrial en el Centro La Angostura.">
        <meta name="twitter:image" content="{{ asset('img/logoCEFAEMPRESA.png') }}">
        <!-- Structured Data (Schema.org) for better indexing -->
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "CEFAEMPRESA",
            "url": "https://cefaempresa.com",
            "logo": "{{ asset('img/logoCEFAEMPRESA.png') }}",
            "description": "Sistema Integrado de Gestión Empresarial y Formación Agroindustrial en el Centro La Angostura, SENA.",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Huila",
                "addressCountry": "CO"
            },
            "sameAs": [
                "https://twitter.com/cefaempresa",
                "https://facebook.com/cefaempresa"
            ]
        }
        </script>
        <!-- Preload important assets for faster loading -->
        <link rel="preload" href="{{ asset('img/logoCEFAEMPRESA.png') }}" as="image">
        <!-- Vite for CSS and JS -->
        @vite(['resources/css/public.css', 'resources/js/app.js'])
        <!-- Font Awesome CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
<body class="font-sans antialiased min-h-screen overflow-x-hidden">
    <!-- Navegación -->
    <nav class="glass p-4 shadow-lg fixed top-0 w-full z-50">
        <div class="container mx-auto flex justify-between items-center">
         <!-- Logo -->
<div class="flex items-center space-x-2">
    <img src="{{ asset('img/logoCEFAEMPRESA.png') }}" alt="Logo {{$keyword->word}}" class="w-12 h-12 object-contain">
    <a href="/" class="text-xl sm:text-xl md:text-3xl font-extrabold text-orange-300 tracking-tight">{{$keyword->word}}</a>
</div>

            <!-- Botón hamburguesa -->
            <button id="menu-toggle" class="md:hidden text-white focus:outline-none">
                <i id="menu-icon" class="fas fa-bars text-2xl"></i>
            </button>

            <!-- Menú -->
            <div id="menu" class="hidden md:flex md:items-center md:space-x-6 absolute md:static top-16 left-0 w-full md:w-auto bg-gray-900 md:bg-transparent p-4 md:p-0 transition-all duration-300 ease-in-out z-50">
                <!-- Enlaces principales -->
                <div class="flex flex-col md:flex-row md:space-x-6">
                    <a href="/" class="text-lg font-semibold text-white hover:text-orange-300 transition duration-300 block md:inline py-2 md:py-0">Inicio</a>
                    <a href="/nosotros" class="text-lg font-semibold text-white hover:text-orange-300 transition duration-300 block md:inline py-2 md:py-0">Nosotros</a>
                    <a href="/productos" class="text-lg font-semibold text-white hover:text-orange-300 transition duration-300 block md:inline py-2 md:py-0">Productos</a>
                    <a href="/formacion" class="text-lg font-semibold text-white hover:text-orange-300 transition duration-300 block md:inline py-2 md:py-0">Formación</a>
                    <a href="/blog" class="text-lg font-semibold text-white hover:text-orange-300 transition duration-300 block md:inline py-2 md:py-0">Blog</a>
                    <a href="/contacto" class="text-lg font-semibold text-white hover:text-orange-300 transition duration-300 block md:inline py-2 md:py-0">Contacto</a>
                </div>

                <!-- Lógica de autenticación -->
                @auth
                    <!-- Dropdown para usuario autenticado -->
                    <div class="relative ml-auto md:ml-8">
                        <button id="user-menu-toggle" class="flex items-center space-x-2 text-lg font-semibold text-white hover:text-orange-300 transition duration-300 py-2 md:py-0 focus:outline-none">
                            <span>{{ Auth::user()->name }}</span>
                            <i class="fas fa-user-circle text-orange-300 text-2xl"></i>
                        </button>
                        <!-- Menú desplegable -->
                        <div id="user-menu" class="hidden absolute right-0 mt-2 w-48 bg-gray-800 rounded-md shadow-lg z-50">
                            <a href="{{ route('logout') }}" 
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
                               class="block px-4 py-2 text-sm text-white hover:bg-gray-700 hover:text-orange-300 transition duration-300">
                               Cerrar sesión
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                @csrf
                            </form>
                        </div>
                    </div>
                @else
                <a href="{{ route('login') }}" class="ml-auto text-lg font-semibold text-orange-300 border border-orange-300 hover:bg-orange-300 hover:text-gray-900 transition duration-300 block md:inline py-2 px-4 rounded-full md:py-1">Log in</a>

                @endauth
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <main class="pt-16 min-h-screen w-full">
        @yield('content')
    </main>
<!-- Pie de página -->
<footer class="bg-gray-900 text-white p-8 mt-16">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- Sección de CEFAEMPRESA -->
        <div>
            <h3 class="text-xl font-bold text-orange-300 mb-4">{{$keyword->word}}</h3>
            <p class="text-gray-400">Sistema Integrado de Control Empresarial y de Formación Agroindustrial del SENA La Angostura.</p>
        </div>
        <!-- Sección de Enlaces Rápidos -->
        <div>
            <h3 class="text-xl font-bold text-orange-300 mb-4">Enlaces Rápidos</h3>
            <ul class="space-y-2">
                <li><a href="#" class="text-gray-400 hover:text-orange-300 transition duration-300">SofíaPlus</a></li>
                <li><a href="#" class="text-gray-400 hover:text-orange-300 transition duration-300">Territorium</a></li>
                <li><a href="#" class="text-gray-400 hover:text-orange-300 transition duration-300">Sistema de Bibliotecas</a></li>
                <li><a href="#" class="text-gray-400 hover:text-orange-300 transition duration-300">Agencia Pública de Empleo</a></li>
            </ul>
        </div>
        <!-- Sección de Contacto -->
        <div>
            <h3 class="text-xl font-bold text-orange-300 mb-4">Contacto</h3>
            <p class="text-gray-400">Centro La Angostura, Campoalegre, Huila, Colombia</p>
            <p class="text-gray-400 pt-2 flex items-center gap-2">
                <i class="fas fa-envelope text-orange-300"></i>
                <a href="mailto:gerentesenaempresa2023@gmail.com" class="text-gray-400 hover:text-orange-300 transition duration-300 break-all">gerentesenaempresa2023@gmail.com</a>
            </p>
            <p class="text-gray-400 pt-2 flex items-center gap-2">
                <i class="fas fa-phone text-orange-300"></i>
                <span>Teléfono: +57 320 465 9454</span>
            </p>
            <p class="text-gray-400 pt-2 flex items-center gap-2">
                <i class="fas fa-phone text-orange-300"></i>
                <span>Teléfono: +57 312 482 3017</span>
            </p>
            <p class="text-gray-400 pt-2 flex items-center gap-2">
                <i class="fas fa-phone text-orange-300"></i>
                <span>Teléfono: +57 312 3500928</span>
            </p>
        </div>
        <!-- Sección de Redes Sociales -->
        <div>
            <h3 class="text-xl font-bold text-orange-300 mb-4">Síguenos</h3>
            <div class="flex space-x-4">
                <a href="https://www.youtube.com/@gerenciasenaempresa9888" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-orange-300 transition duration-300">
                    <i class="fab fa-youtube text-2xl"></i>
                </a>
                <a href="https://instagram.com/sena.empresa?igshid=MzNlNGNkZWQ4Mg==" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-orange-300 transition duration-300">
                    <i class="fab fa-instagram text-2xl"></i>
                </a>
                <a href="[ENLACE_TIKTOK]" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-orange-300 transition duration-300">
                    <i class="fab fa-tiktok text-2xl"></i>
                </a>
                <a href="https://www.facebook.com/profile.php?id=100014602595454" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-orange-300 transition duration-300">
                    <i class="fab fa-facebook text-2xl"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="text-center mt-8 text-sm text-gray-500 border-t border-gray-800 pt-4">
        © 2025 {{$keyword->word}} - Todos los derechos reservados.
    </div>
</footer>

    <!-- Script para el menú hamburguesa y el dropdown -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Menú hamburguesa
            const toggleButton = document.getElementById('menu-toggle');
            const menu = document.getElementById('menu');
            const menuIcon = document.getElementById('menu-icon');

            if (!toggleButton || !menu || !menuIcon) {
                console.error('Elementos del menú no encontrados');
                return;
            }

            toggleButton.addEventListener('click', function () {
                menu.classList.toggle('hidden');
                const isHidden = menu.classList.contains('hidden');
                menuIcon.classList.toggle('fa-bars', isHidden);
                menuIcon.classList.toggle('fa-times', !isHidden);
                console.log('Menú toggled:', isHidden ? 'Oculto' : 'Visible');
            });

            // Cerrar menú al hacer clic fuera
            document.addEventListener('click', function (event) {
                if (!menu.contains(event.target) && !toggleButton.contains(event.target) && !menu.classList.contains('hidden')) {
                    menu.classList.add('hidden');
                    menuIcon.classList.add('fa-bars');
                    menuIcon.classList.remove('fa-times');
                    console.log('Menú cerrado al hacer clic fuera');
                }
            });

            // Cerrar menú al hacer clic en un enlace (móviles)
            const menuLinks = menu.querySelectorAll('a:not(#user-menu a)');
            menuLinks.forEach(link => {
                link.addEventListener('click', () => {
                    menu.classList.add('hidden');
                    menuIcon.classList.add('fa-bars');
                    menuIcon.classList.remove('fa-times');
                    console.log('Menú cerrado al hacer clic en enlace');
                });
            });

            // Dropdown para el usuario
            const userMenuToggle = document.getElementById('user-menu-toggle');
            const userMenu = document.getElementById('user-menu');

            if (userMenuToggle && userMenu) {
                userMenuToggle.addEventListener('click', function () {
                    userMenu.classList.toggle('hidden');
                    console.log('Dropdown toggled:', userMenu.classList.contains('hidden') ? 'Oculto' : 'Visible');
                });

                // Cerrar dropdown al hacer clic fuera
                document.addEventListener('click', function (event) {
                    if (!userMenu.contains(event.target) && !userMenuToggle.contains(event.target) && !userMenu.classList.contains('hidden')) {
                        userMenu.classList.add('hidden');
                        console.log('Dropdown cerrado al hacer clic fuera');
                    }
                });
            }
        });
    </script>
</body>
</html>