@extends('layouts.app')

@section('content')
<!-- Google Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Hero Section con Carrusel (sin márgenes laterales) -->
<div class="relative h-screen w-full">
    <div class="swiper h-full w-full">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="relative h-full w-full">
                    <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=2073&auto=format&fit=crop" alt="Slide 1" class="w-full h-full object-cover rounded-lg md:rounded-none">
                    <div class="absolute inset-0 bg-gradient-to-b from-black/70 to-transparent flex items-center justify-center">
                        <div class="text-center text-white" data-aos="fade-up">
                            <h1 class="text-5xl md:text-7xl font-extrabold mb-4">Innovación Agroindustrial</h1>
                            <p class="text-xl md:text-2xl mb-6">Transformamos el campo con tecnología y formación.</p>
                            <a href="#servicios" class="bg-orange-500 text-white px-6 py-3 rounded-full hover:bg-orange-600 transition duration-300">Descubre Más</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="relative h-full w-full">
                    <img src="https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0?q=80&w=2070&auto=format&fit=crop" alt="Slide 2" class="w-full h-full object-cover rounded-lg md:rounded-none">
                    <div class="absolute inset-0 bg-gradient-to-b from-black/70 to-transparent flex items-center justify-center">
                        <div class="text-center text-white" data-aos="fade-up">
                            <h1 class="text-5xl md:text-7xl font-extrabold mb-4">Producción Sostenible</h1>
                            <p class="text-xl md:text-2xl mb-6">Cuidamos el medio ambiente mientras producimos.</p>
                            <a href="#servicios" class="bg-orange-500 text-white px-6 py-3 rounded-full hover:bg-orange-600 transition duration-300">Descubre Más</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="relative h-full w-full">
                    <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?q=80&w=2070&auto=format&fit=crop" alt="Slide 3" class="w-full h-full object-cover rounded-lg md:rounded-none">
                    <div class="absolute inset-0 bg-gradient-to-b from-black/70 to-transparent flex items-center justify-center">
                        <div class="text-center text-white" data-aos="fade-up">
                            <h1 class="text-5xl md:text-7xl font-extrabold mb-4">Formación de Calidad</h1>
                            <p class="text-xl md:text-2xl mb-6">Capacitamos a los líderes del futuro agroindustrial.</p>
                            <a href="#servicios" class="bg-orange-500 text-white px-6 py-3 rounded-full hover:bg-orange-600 transition duration-300">Descubre Más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Controles del carrusel -->
        <div class="swiper-button-prev text-white z-10"></div>
        <div class="swiper-button-next text-white z-10"></div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<!-- Sección de información (con márgenes laterales en móviles) -->
<div class="container mx-auto py-16 px-4 md:px-0">
    <div class="bg-orange-500 text-white p-12 rounded-lg shadow-2xl flex flex-col md:flex-row items-center" data-aos="fade-right">
        <div class="flex-1">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">Sistema Integrado de {{$keyword->word}}</h2>
            <p class="text-lg md:text-xl mb-6">Centro de Formación Agroindustrial "La Angostura"</p>
            <button onclick="openVideoModal()" class="bg-gray-800 text-white px-6 py-3 rounded-full flex items-center space-x-2 hover:bg-gray-700 transition duration-300">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 14.5v-9l6 4.5-6 4.5z"/>
                </svg>
                <span>Watch Video</span>
            </button>
        </div>
        <div class="flex-1 mt-6 md:mt-0 md:ml-6">
            <video class="mx-auto rounded-lg shadow-lg w-full max-w-md" autoplay loop muted>
                <source src="{{ asset('img/videosena.mp4') }}" type="video/mp4">
                Tu navegador no soporta la reproducción de videos.
            </video>
        </div>
    </div>
</div>

<!-- Modal para el video -->
<div id="videoModal" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50 hidden">
    <div class="bg-gray-900 p-8 rounded-lg shadow-2xl max-w-6xl w-full">
        <video id="modalVideo" class="w-full rounded-lg max-h-[80vh]" controls>
            <source src="{{ asset('img/videosena.mp4') }}" type="video/mp4">
            Tu navegador no soporta la reproducción de videos.
        </video>
    </div>
</div>

<!-- Sección de servicios (con márgenes laterales en móviles) -->
<div id="servicios" class="container mx-auto py-16 px-4 md:px-0">
    <h2 class="text-4xl md:text-5xl font-bold text-center text-white mb-12 relative inline-block" data-aos="fade-up">
        Nuestros Servicios
        <span class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-24 h-1 bg-orange-500 rounded"></span>
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-gray-700 text-white p-8 rounded-lg shadow-xl hover:shadow-2xl transition duration-500 transform hover:-translate-y-2 text-center" data-aos="fade-up" data-aos-delay="100">
            <div class="text-orange-300 text-5xl mb-4">
                <i class="fas fa-seedling"></i>
            </div>
            <h3 class="text-2xl font-semibold mb-4">Producción</h3>
            <p class="text-gray-300">Gestión de cultivos y procesos agroindustriales con tecnología de punta para maximizar la eficiencia.</p>
        </div>
        <div class="bg-gray-700 text-white p-8 rounded-lg shadow-xl hover:shadow-2xl transition duration-500 transform hover:-translate-y-2 text-center" data-aos="fade-up" data-aos-delay="200">
            <div class="text-orange-300 text-5xl mb-4">
                <i class="fas fa-boxes"></i>
            </div>
            <h3 class="text-2xl font-semibold mb-4">Inventarios</h3>
            <p class="text-gray-300">Control eficiente de insumos y productos terminados con sistemas integrados.</p>
        </div>
        <div class="bg-gray-700 text-white p-8 rounded-lg shadow-xl hover:shadow-2xl transition duration-500 transform hover:-translate-y-2 text-center" data-aos="fade-up" data-aos-delay="300">
            <div class="text-orange-300 text-5xl mb-4">
                <i class="fas fa-truck-moving"></i>
            </div>
            <h3 class="text-2xl font-semibold mb-4">Logística</h3>
            <p class="text-gray-300">Seguimiento optimizado de distribución y transporte para garantizar entregas a tiempo.</p>
        </div>
    </div>
</div>

<!-- Sección de Aplicaciones (con márgenes laterales en móviles) -->
<div id="aplicaciones" class="container mx-auto py-20 px-4 md:px-0">
    <h2 class="text-5xl md:text-6xl font-extrabold text-center text-white mb-16 relative inline-block" data-aos="fade-up">
        Aplicaciones
        <span class="absolute -bottom-3 left-1/2 transform -translate-x-1/2 w-32 h-1.5 bg-orange-500 rounded"></span>
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
        @foreach ($apps as $app)
            <a href="{{ $app->url }}" 
               class="bg-gray-700 text-white p-8 rounded-xl shadow-2xl hover:bg-gray-600 transition duration-300 flex items-center transform hover:scale-105" 
               data-aos="fade-up" 
               data-aos-delay="{{ $loop->index * 100 + 100 }}">
                <div class="flex-1">
                    <h3 class="text-3xl font-semibold mb-3 text-gray-100">{{ $app->title }}</h3>
                    <p class="text-gray-300 text-lg">{{ $app->description }}</p>
                </div>
                <div class="ml-6 text-orange-300 text-5xl flex-shrink-0">
                    <i class="{{ $app->icon_class }}" style="font-size: 70px"></i>
                </div>
            </a>
        @endforeach
    </div>
</div>

<!-- Sección de Testimonios (con márgenes laterales en móviles) -->
<div class="container mx-auto py-16 px-4 md:px-0">
    <h2 class="text-4xl md:text-5xl font-bold text-center text-white mb-12 relative inline-block" data-aos="fade-up">
        Lo que dicen de nosotros
        <span class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-24 h-1 bg-orange-500 rounded"></span>
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="bg-gray-700 text-white p-8 rounded-lg shadow-xl" data-aos="fade-right">
            <p class="text-lg italic mb-4">"{{$keyword->word}} transformó nuestra forma de trabajar en el campo. La formación y las herramientas son de primer nivel."</p>
            <p class="text-orange-300 font-semibold">— Juan Pérez, Productor</p>
        </div>
        <div class="bg-gray-700 text-white p-8 rounded-lg shadow-xl" data-aos="fade-left">
            <p class="text-lg italic mb-4">"Gracias a {{$keyword->word}}, logramos optimizar nuestra logística y aumentar nuestra producción."</p>
            <p class="text-orange-300 font-semibold">— María Gómez, Emprendedora</p>
        </div>
    </div>
</div>

<!-- Llamado a la acción (con márgenes laterales en móviles) -->
<div class="container mx-auto py-16 px-4 md:px-0 text-center">
    <div class="bg-gray-700 text-white p-12 rounded-lg shadow-2xl" data-aos="zoom-in">
        <h2 class="text-4xl md:text-5xl font-bold mb-4 relative inline-block">
            Únete a {{$keyword->word}}
            <span class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-24 h-1 bg-orange-500 rounded"></span>
        </h2>
        <p class="text-lg md:text-xl mb-6">Forma parte de la revolución agroindustrial y transforma el futuro del campo.</p>
        <a href="{{ route('login') }}" class="bg-orange-500 text-white px-8 py-4 rounded-full font-semibold hover:bg-orange-600 transition duration-300">Comienza Ahora</a>
    </div>
</div>

<script>
    function openVideoModal() {
        const modal = document.getElementById('videoModal');
        const video = document.getElementById('modalVideo');
        modal.classList.remove('hidden');
        video.play();
    }

    function closeVideoModal() {
        const modal = document.getElementById('videoModal');
        const video = document.getElementById('modalVideo');
        video.pause();
        video.currentTime = 0;
        modal.classList.add('hidden');
    }

    document.getElementById('videoModal').addEventListener('click', function (e) {
        if (e.target === this) {
            closeVideoModal();
        }
    });
</script>

@endsection