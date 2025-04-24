<?php

namespace Database\Seeders;

use App\Models\App;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $apps = [
            [
                'title' => 'Conócenos',
                'description' => 'Descubre quiénes somos, nuestra historia y el equipo que impulsa esta empresa.',
                'icon_class' => 'fa-solid fa-users',
                'url' => '/nosotros',
            ],
            [
                'title' => 'Servicios',
                'description' => 'Explora los servicios que ofrecemos y cómo podemos ayudarte a alcanzar tus objetivos.',
                'icon_class' => 'fa-solid fa-briefcase',
                'url' => '/servicios',
            ],
            [
                'title' => 'Productos',
                'description' => 'Revisa nuestro catálogo de productos agroindustriales frescos y de alta calidad.',
                'icon_class' => 'fa-solid fa-leaf',
                'url' => '/productos',
            ],
            [
                'title' => 'Noticias',
                'description' => 'Mantente al día con las últimas novedades, eventos y comunicados oficiales.',
                'icon_class' => 'fa-solid fa-newspaper',
                'url' => '/noticias',
            ],
            [
                'title' => 'Testimonios',
                'description' => 'Lee las experiencias y opiniones de nuestros clientes y aliados.',
                'icon_class' => 'fa-solid fa-comments',
                'url' => '/testimonios',
            ],
            [
                'title' => 'Contacto',
                'description' => '¿Tienes preguntas? Contáctanos a través de nuestro formulario o redes sociales.',
                'icon_class' => 'fa-solid fa-envelope',
                'url' => '/contacto',
            ],
            [
                'title' => 'Preguntas Frecuentes',
                'description' => 'Resuelve tus dudas consultando nuestras respuestas a preguntas comunes.',
                'icon_class' => 'fa-solid fa-circle-question',
                'url' => '/faq',
            ],
            [
                'title' => 'Blog',
                'description' => 'Artículos, consejos y contenidos relevantes sobre el sector agroindustrial.',
                'icon_class' => 'fa-solid fa-pen-nib',
                'url' => '/blog',
            ],
            [
                'title' => 'Galería',
                'description' => 'Imágenes y videos que muestran nuestro trabajo, procesos y eventos.',
                'icon_class' => 'fa-solid fa-image',
                'url' => '/galeria',
            ],
            [
                'title' => 'Ubicación',
                'description' => 'Encuentra nuestra sede y puntos de atención en el mapa.',
                'icon_class' => 'fa-solid fa-map-location-dot',
                'url' => '/ubicacion',
            ]
        ];
        

        foreach ($apps as $app) {
            App::create($app);
        }
    }
}
