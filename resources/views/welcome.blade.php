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
                    <img src="https://media.istockphoto.com/id/1468465858/photo/agriculture-technology-farmer-woman-holding-tablet-or-tablet-technology-to-research-about.jpg?s=1024x1024&w=is&k=20&c=uC2_o5T9SPVYWNIWyu1l1u_WTMqIJVvrM_RshAcW8Fo=" alt="Slide 1" class="w-full h-full object-cover rounded-lg md:rounded-none">
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
                    <img src="https://media.istockphoto.com/id/1342229204/photo/a-lake-in-the-shape-of-a-recycling-sign-in-the-middle-of-untouched-nature-an-ecological.jpg?s=612x612&w=0&k=20&c=AENL8ZdXCJQN_q0hxCYEG1LxoOckfCezV8W206WB3k4=" alt="Slide 2" class="w-full h-full object-cover rounded-lg md:rounded-none">
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
                    <img src="{{asset('img/sena empresa.jpg')}}" alt="Slide 3" class="w-full h-full object-cover rounded-lg md:rounded-none">
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
               class="bg-gray-700 text-white p-8 rounded-xl shadow-2xl hover:bg-gray-600 transition duration-300 flex flex-col md:flex-row md:items-center transform hover:scale-105" 
               data-aos="fade-up" 
               data-aos-delay="{{ $loop->index * 100 + 100 }}">
                <!-- Ícono -->
                <div class="flex justify-center text-orange-300 text-5xl flex-shrink-0 mb-4 md:mb-0 md:ml-6 order-1 md:order-2">
                    <i class="{{ $app->icon_class }}" style="font-size: 60px"></i>
                </div>
                <!-- Título y descripción -->
                <div class="flex-1 text-center md:text-left order-2 md:order-1">
                    <h3 class="text-3xl font-semibold mb-3 text-gray-100">{{ $app->title }}</h3>
                    <p class="text-gray-300 text-lg">{{ $app->description }}</p>
                </div>
            </a>
        @endforeach
    </div>
</div>


<!-- Sección de CEFAEMPRESA (con márgenes laterales en móviles y separación adicional) -->
<div id="cefaempresa" class="container mx-auto py-20 px-4 md:px-8">
    <div class="bg-gray-800 bg-opacity-80 backdrop-blur-md rounded-xl shadow-2xl p-10 md:p-12 mx-4 md:mx-16">
        <div class="flex flex-col md:flex-row items-center gap-12">
            <!-- Título y descripción a la izquierda -->
            <div class="flex-1 text-center md:text-left" data-aos="fade-right">
                <h2 class="text-5xl md:text-6xl font-extrabold text-white mb-6 relative inline-block">
                    CEFAEMPRESA
                    <span class="absolute -bottom-3 left-1/2 md:left-0 transform -translate-x-1/2 md:transform-none w-32 h-1.5 bg-orange-500 rounded"></span>
                </h2>
                <p class="text-gray-300 text-lg md:text-xl leading-relaxed p-4">
                    CEFAEMPRESA, una iniciativa del Centro de Formación Agroindustrial "La Angostura", se dedica a impulsar la innovación y el desarrollo sostenible en el sector agroindustrial. Nuestro objetivo es conectar la formación técnica de alta calidad con tecnologías de punta y el espíritu emprendedor, creando soluciones que transformen el campo.
                </p>
                <p class="text-gray-300 text-lg md:text-xl leading-relaxed p-4">
                    A través de programas de capacitación, asesorías especializadas y proyectos colaborativos, apoyamos a productores y emprendedores para que adopten prácticas sostenibles, optimicen sus procesos y generen un impacto positivo en sus comunidades y el medio ambiente.
                </p>
                
            </div>
            <!-- Logo a la derecha -->
            <div class="flex-1 flex justify-center md:justify-end" data-aos="fade-left">
                <img src="{{ asset('img/logoCEFAEMPRESA.png') }}" alt="CEFAEMPRESA Logo" class="w-full max-w-sm md:max-w-md">
            </div>
        </div>
    </div>
</div>


<!-- Sección de CEFAEMPRESA (con márgenes laterales en móviles y separación adicional) -->
<div id="cefaempresa" class="container mx-auto py-20 px-4 md:px-8">
    <div class="bg-gray-800 bg-opacity-80 backdrop-blur-md rounded-xl shadow-2xl p-10 md:p-12 mx-4 md:mx-16">
        <div class="flex flex-col md:flex-row items-center gap-12">
            <!-- Logo a la izquierda -->
            <div class="flex-1 flex justify-center md:justify-start" data-aos="fade-right">
                <img src="{{ asset('img/logoCEFAEMPRESA.png') }}" alt="CEFAEMPRESA Logo" class="w-full max-w-sm md:max-w-md">
            </div>
            <!-- Título y desplegables a la derecha -->
            <div class="flex-1 text-center md:text-left" data-aos="fade-left">
                <h2 class="text-5xl md:text-6xl font-extrabold text-white mb-6 relative inline-block">
                    CEFAEMPRESA
                    <span class="absolute -bottom-3 left-1/2 md:left-0 transform -translate-x-1/2 md:transform-none w-32 h-1.5 bg-orange-500 rounded"></span>
                </h2>
              
                <!-- Accordion (Desplegables) -->
                <div class="space-y-4">
                    <!-- Desplegable 1 -->
                    <div class="accordion-item">
                        <input type="radio" name="accordion" id="accordion1" class="hidden peer">
                        <label for="accordion1" class="flex justify-between items-center bg-gray-700 rounded-lg p-4 cursor-pointer text-white hover:bg-gray-600 transition duration-300">
                            <span class="text-lg font-semibold"><span style="color: orange; padding: 0 10px 0 0"> 01</span> ¿Que es?</span>
                            <svg class="w-6 h-6 transform transition-transform peer-checked:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </label>
                        <div class="max-h-0 overflow-hidden peer-checked:max-h-96 transition-all duration-500">
                            <p class="text-gray-300 text-lg leading-relaxed p-4">
                                CEFAEMPRESA es un modelo didáctico de empresa, que busca impartir y trasmitir a el aprendiz los conocimientos administrativos, productivos, técnicos, financieros, ambiéntales, y de comercialización adquiridos en el proceso de formación por medio del manejo real de una empresa en las diferentes áreas y unidades productivas.
                            </p>
                        </div>
                    </div>
                    <!-- Desplegable 2 -->
                    <div class="accordion-item">
                        <input type="radio" name="accordion" id="accordion2" class="hidden peer">
                        <label for="accordion2" class="flex justify-between items-center bg-gray-700 rounded-lg p-4 cursor-pointer text-white hover:bg-gray-600 transition duration-300">
                            <span class="text-lg font-semibold"><span style="color: orange; padding: 0 10px 0 0"> 02</span>Misión</span>
                            <svg class="w-6 h-6 transform transition-transform peer-checked:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </label>
                        <div class="max-h-0 overflow-hidden peer-checked:max-h-96 transition-all duration-500">
                            <p class="text-gray-300 text-lg leading-relaxed p-4">
                                Fortalecer la formación por competencias desde las estrategias de formación por proyectos, impulsando el emprendimiento, la innovación, la investigación y el trabajo colaborativo, para tener un ambiente de aprendizaje integral en que los aprendices a través del aprender haciendo y el hacer transformado se integren con diferentes especialidades que lo lleven a adquirir todas las competencias adquiridas para la gestión empresarial de proyectos.
                            </p>
                        </div>
                    </div>
                    <!-- Desplegable 3 -->
                    <div class="accordion-item">
                        <input type="radio" name="accordion" id="accordion3" class="hidden peer">
                        <label for="accordion3" class="flex justify-between items-center bg-gray-700 rounded-lg p-4 cursor-pointer text-white hover:bg-gray-600 transition duration-300">
                            <span class="text-lg font-semibold"><span style="color: orange; padding: 0 10px 0 0"> 03</span>Visión</span>
                            <svg class="w-6 h-6 transform transition-transform peer-checked:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </label>
                        <div class="max-h-0 overflow-hidden peer-checked:max-h-96 transition-all duration-500">
                            <p class="text-gray-300 text-lg leading-relaxed p-4">
                                Un modelo empresarial organizado mostrando resultados con proyectos formativos-productivos que lleven al aprendiz, al empresario y a cualquier ciudadano a implementar en su entorno proyectos empresariales enfocados al desarrollo de la región (nación, departamento, municipio) implementando tecnologías innovadoras que conduzcan a un desarrollo sostenible.
                            </p>
                        </div>
                    </div>
                    <!-- Desplegable 4 -->
                    <div class="accordion-item">
                        <input type="radio" name="accordion" id="accordion4" class="hidden peer">
                        <label for="accordion4" class="flex justify-between items-center bg-gray-700 rounded-lg p-4 cursor-pointer text-white hover:bg-gray-600 transition duration-300">
                            <span class="text-lg font-semibold"><span style="color: orange; padding: 0 10px 0 0"> 04</span>Modelo CEFAEMPRESA</span>
                            <svg class="w-6 h-6 transform transition-transform peer-checked:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </label>
                        <div class="max-h-0 overflow-hidden peer-checked:max-h-96 transition-all duration-500">
                            <p class="text-gray-300 text-lg leading-relaxed p-4">
                                La estrategia Sena Empresa consta de Resultados de Aprendizaje en: Desarrollo de labores administrativas y de mercadeo en la empresa agropecuaria o agroindustrial. Operación del sistema productivo de tipo agropecuario o agroindustrial. Competencias comportamentales.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Sección de Lo Que Ofrecemos (con márgenes laterales en móviles y separación adicional) -->
<div id="ofrecemos" class="container mx-auto py-20 px-4 md:px-8">
    <div class="bg-gray-800 bg-opacity-80 backdrop-blur-md rounded-xl shadow-2xl p-10 md:p-12 mx-4 md:mx-16">
        <h2 class="text-5xl md:text-6xl font-extrabold text-center text-white mb-12 relative inline-block" data-aos="fade-up">
            Impulsamos
            <span class="absolute -bottom-3 left-1/2 transform -translate-x-1/2 w-32 h-1.5 bg-orange-500 rounded"></span>
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Líder -->
            <div class="flex flex-col items-center text-center" data-aos="fade-up" data-aos-delay="100">
                <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" alt="Líder" class="w-full h-48 object-cover rounded-lg mb-4">
                <h3 class="text-2xl font-semibold text-white mb-2">Líder</h3>
                <p class="text-gray-300">Reconociendo al Líder del Mes</p>
            </div>
            <!-- Mejorando -->
            <div class="flex flex-col items-center text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" alt="Mejorando" class="w-full h-48 object-cover rounded-lg mb-4">
                <h3 class="text-2xl font-semibold text-white mb-2">Mejorando</h3>
                <p class="text-gray-300">Mejorando Continuamente</p>
            </div>
            <!-- Ideas -->
            <div class="flex flex-col items-center text-center" data-aos="fade-up" data-aos-delay="300">
                <img src="https://images.unsplash.com/photo-1516321497487-e288fb19713f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" alt="Ideas" class="w-full h-48 object-cover rounded-lg mb-4">
                <h3 class="text-2xl font-semibold text-white mb-2">Ideas</h3>
                <p class="text-gray-300">Generando Ideas Innovadoras</p>
            </div>
            <!-- Gestión -->
            <div class="flex flex-col items-center text-center" data-aos="fade-up" data-aos-delay="400">
                <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" alt="Gestión" class="w-full h-48 object-cover rounded-lg mb-4">
                <h3 class="text-2xl font-semibold text-white mb-2">Gestión</h3>
                <p class="text-gray-300">Gestión Eficiente de Resultados</p>
            </div>
        </div>
    </div>
</div>


<!-- Sección de Testimonios (Lo que dicen sobre nosotros) -->
<div id="testimonios" class="container mx-auto py-20 px-4 md:px-8">
    <div class="bg-gray-800 bg-opacity-80 backdrop-blur-md rounded-xl shadow-2xl p-8 md:p-12 mx-4 md:mx-16">
        <!-- Título Principal -->
        <h2 class="text-5xl md:text-6xl font-extrabold text-center text-white mb-12 relative inline-block" data-aos="fade-up">
            Lo que dicen sobre nosotros
            <span class="absolute -bottom-3 left-1/2 transform -translate-x-1/2 w-32 h-1.5 bg-orange-500 rounded"></span>
        </h2>
        <!-- Contenedor de los testimonios -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8" data-aos="fade-up" data-aos-delay="100">
            <!-- Testimonio 1 -->
            <div class="bg-gray-700 rounded-lg shadow-lg p-6 flex flex-col items-center text-center">
                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Persona 1" class="w-24 h-24 rounded-full object-cover mb-4">
                <p class="text-white text-base italic mb-4">"Los productos de CEFAEMPRESA son de una calidad increíble, especialmente sus frutas frescas. Siempre compro aquí para mi familia."</p>
                <p class="text-orange-400 text-lg font-semibold">Juan Pérez</p>
            </div>
            <!-- Testimonio 2 -->
            <div class="bg-gray-700 rounded-lg shadow-lg p-6 flex flex-col items-center text-center">
                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Persona 2" class="w-24 h-24 rounded-full object-cover mb-4">
                <p class="text-white text-base italic mb-4">"Me encanta la miel natural de CEFAEMPRESA. Es un producto que no falta en mi hogar, y el servicio siempre es excelente."</p>
                <p class="text-orange-400 text-lg font-semibold">María Gómez</p>
            </div>
            <!-- Testimonio 3 -->
            <div class="bg-gray-700 rounded-lg shadow-lg p-6 flex flex-col items-center text-center">
                <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Persona 3" class="w-24 h-24 rounded-full object-cover mb-4">
                <p class="text-white text-base italic mb-4">"El queso artesanal de CEFAEMPRESA es el mejor que he probado. Además, apoyar a productores locales me hace sentir muy bien."</p>
                <p class="text-orange-400 text-lg font-semibold">Carlos Rodríguez</p>
            </div>
        </div>
    </div>
</div>


<!-- Sección de Ubicación (con márgenes laterales en móviles y separación adicional) -->
<section id="ubicacion" class="py-20 px-4 md:px-8">
    <div class="container mx-auto">
        <div class="bg-gray-800 bg-opacity-80 backdrop-blur-md rounded-xl shadow-2xl p-10 md:p-12 mx-4 md:mx-16">
            <h2 class="text-5xl md:text-6xl font-extrabold text-center text-white mb-12 relative inline-block" data-aos="fade-up">
                Ubicación
                <span class="absolute -bottom-3 left-1/2 transform -translate-x-1/2 w-32 h-1.5 bg-orange-500 rounded"></span>
            </h2>
            <p class="text-gray-300 text-lg md:text-xl text-center mb-10 leading-relaxed" data-aos="fade-up" data-aos-delay="100">
                Estamos ubicados en el corazón del Huila, en el Centro de Formación Agroindustrial "La Angostura". Un lugar estratégico para la formación y la innovación agroindustrial, rodeado de paisajes que inspiran el desarrollo sostenible y la conexión con la naturaleza.
            </p>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8" data-aos="fade-up" data-aos-delay="200">
                <iframe class="w-full h-96 rounded-xl shadow-lg" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.671289133705!2d-75.36400982524968!3d2.612566456217183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3b3f4b1c54ddc5%3A0x6a0d5a458d5d190d!2sCentro%20de%20Formaci%C3%B3n%20Agroindustrial%20La%20Angostura!5e0!3m2!1ses!2sco!4v1740859753628!5m2!1ses!2sco" allowfullscreen loading="lazy"></iframe>
                <img src="{{ asset('img/plano.png') }}" alt="Mapa" class="w-full h-96 object-cover rounded-xl shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Llamado a la acción (con márgenes laterales en móviles) -->
<div class="container mx-auto py-12 px-4 md:px-0 text-center">
    <div class="bg-gray-700 text-white p-6 sm:p-8 md:p-12 rounded-lg shadow-2xl max-w-3xl mx-auto" data-aos="zoom-in">
        <h2 class="text-3xl sm:text-3xl md:text-5xl font-bold mb-4 relative inline-block truncate max-w-full">
            Únete a {{$keyword->word}}
            <span class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-24 h-1 bg-orange-500 rounded"></span>
        </h2>
        <p class="text-base sm:text-lg md:text-xl mb-6 max-w-md mx-auto">Forma parte de la revolución agroindustrial y transforma el futuro del campo.</p>
        <a href="{{ route('login') }}" class="bg-orange-500 text-white px-6 sm:px-6 md:px-8 py-2 sm:py-3 md:py-4 rounded-full font-semibold hover:bg-orange-600 transition duration-300 inline-block">Comienza Ahora</a>
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