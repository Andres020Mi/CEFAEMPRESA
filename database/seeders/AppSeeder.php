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
                'title' => 'Gestión de Producción',
                'description' => 'Administra cultivos y procesos productivos en tiempo real.',
                'icon_class' => 'fa-solid fa-tractor',
                'url' => '/produccion',
            ],
            [
                'title' => 'Control de Inventarios',
                'description' => 'Monitorea insumos y productos con precisión.',
                'icon_class' => 'fa-solid fa-boxes-stacked',
                'url' => '/inventarios',
            ],
            [
                'title' => 'Logística y Distribución',
                'description' => 'Optimiza el transporte y seguimiento de pedidos.',
                'icon_class' => 'fa-solid fa-truck',
                'url' => '/logistica',
            ],
            [
                'title' => 'Formación Virtual',
                'description' => 'Accede a cursos y capacitaciones en línea.',
                'icon_class' => 'fa-solid fa-graduation-cap',
                'url' => '/formacion',
            ],
            [
                'title' => 'Gestión de Recursos Hídricos',
                'description' => 'Controla el uso de agua en procesos agrícolas.',
                'icon_class' => 'fa-solid fa-droplet',
                'url' => '/recursos-hidricos',
            ],
            [
                'title' => 'Monitoreo de Cultivos',
                'description' => 'Supervisa el estado de cultivos con datos en tiempo real.',
                'icon_class' => 'fa-solid fa-seedling',
                'url' => '/monitoreo-cultivos',
            ],
            [
                'title' => 'Planificación Agrícola',
                'description' => 'Organiza ciclos de siembra y cosecha.',
                'icon_class' => 'fa-solid fa-calendar-days',
                'url' => '/planificacion-agricola',
            ],
            [
                'title' => 'Gestión de Personal',
                'description' => 'Administra horarios y tareas del equipo.',
                'icon_class' => 'fa-solid fa-users',
                'url' => '/personal',
            ],
            [
                'title' => 'Contabilidad Agroindustrial',
                'description' => 'Lleva el control financiero de la empresa.',
                'icon_class' => 'fa-solid fa-calculator',
                'url' => '/contabilidad',
            ],
            [
                'title' => 'Análisis de Mercado',
                'description' => 'Evalúa tendencias y precios de productos agrícolas.',
                'icon_class' => 'fa-solid fa-chart-line',
                'url' => '/mercado',
            ],
            [
                'title' => 'Sostenibilidad Ambiental',
                'description' => 'Monitorea el impacto ambiental de las operaciones.',
                'icon_class' => 'fa-solid fa-leaf',
                'url' => '/sostenibilidad',
            ],
            [
                'title' => 'Gestión de Maquinaria',
                'description' => 'Programa el mantenimiento de equipos agrícolas.',
                'icon_class' => 'fa-solid fa-wrench',
                'url' => '/maquinaria',
            ],
            [
                'title' => 'Certificaciones de Calidad',
                'description' => 'Administra procesos para obtener certificaciones.',
                'icon_class' => 'fa-solid fa-certificate',
                'url' => '/certificaciones',
            ],
            [
                'title' => 'Capacitación en Seguridad',
                'description' => 'Ofrece formación en seguridad laboral.',
                'icon_class' => 'fa-solid fa-hard-hat',
                'url' => '/seguridad',
            ],
            [
                'title' => 'Gestión de Proveedores',
                'description' => 'Controla contratos y entregas de insumos.',
                'icon_class' => 'fa-solid fa-handshake',
                'url' => '/proveedores',
            ],
            [
                'title' => 'Comercialización de Productos',
                'description' => 'Administra ventas y canales de distribución.',
                'icon_class' => 'fa-solid fa-cart-shopping',
                'url' => '/comercializacion',
            ],
            [
                'title' => 'Innovación Tecnológica',
                'description' => 'Explora nuevas tecnologías para la agroindustria.',
                'icon_class' => 'fa-solid fa-microchip',
                'url' => '/innovacion',
            ],
            [
                'title' => 'Gestión de Proyectos',
                'description' => 'Coordina iniciativas y proyectos agroindustriales.',
                'icon_class' => 'fa-solid fa-diagram-project',
                'url' => '/proyectos',
            ],
            [
                'title' => 'Monitoreo Climático',
                'description' => 'Registra datos climáticos para la toma de decisiones.',
                'icon_class' => 'fa-solid fa-cloud-sun',
                'url' => '/clima',
            ],
            [
                'title' => 'Evaluación de Suelos',
                'description' => 'Analiza la calidad del suelo para cultivos.',
                'icon_class' => 'fa-solid fa-mound',
                'url' => '/suelos',
            ],
            [
                'title' => 'Gestión de Clientes',
                'description' => 'Administra relaciones con clientes y socios.',
                'icon_class' => 'fa-solid fa-address-book',
                'url' => '/clientes',
            ],
        ];

        foreach ($apps as $app) {
            App::create($app);
        }
    }
}
