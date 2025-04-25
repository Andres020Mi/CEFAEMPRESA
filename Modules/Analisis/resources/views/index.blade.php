@extends('layouts.app')

@section('content')
<!-- Dependencias -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<style>
    .chart-container { position: relative; height: 300px; width: 100%; }
</style>

<!-- Contenido Principal -->
<div class="container mx-auto py-16 px-4 md:px-0">
    <h2 class="text-4xl md:text-5xl font-extrabold text-center text-white mb-12 relative inline-block" data-aos="fade-up">
        Análisis de Datos ERP Agroindustrial
        <span class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-32 h-1 bg-orange-500 rounded"></span>
    </h2>

    <!-- Sección Producción -->
    <div id="produccion" class="mb-12">
        <h3 class="text-3xl font-bold mb-6 text-white relative inline-block" data-aos="fade-up">
            Producción Agroindustrial
            <span class="absolute -bottom-2 left-0 w-24 h-1 bg-orange-500 rounded"></span>
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Gráfico de Barras: Producción por Producto -->
            <div class="bg-gray-800 p-6 rounded-lg shadow-xl" data-aos="fade-right">
                <h4 class="text-xl font-semibold mb-4 text-white">Producción por Producto (Toneladas)</h4>
                <div class="chart-container">
                    <canvas id="productionChart"></canvas>
                </div>
            </div>
            <!-- Tarjetas de Estadísticas -->
            <div class="grid grid-cols-1 gap-4" data-aos="fade-left">
                <div class="bg-gray-700 p-4 rounded-lg shadow-md flex items-center">
                    <i class="fas fa-seedling text-orange-500 text-3xl mr-4"></i>
                    <div>
                        <p class="text-lg font-semibold text-white">Total Producido</p>
                        <p class="text-2xl text-white">1,250 Toneladas</p>
                    </div>
                </div>
                <div class="bg-gray-700 p-4 rounded-lg shadow-md flex items-center">
                    <i class="fas fa-chart-line text-orange-500 text-3xl mr-4"></i>
                    <div>
                        <p class="text-lg font-semibold text-white">Crecimiento</p>
                        <p class="text-2xl text-white">15% Anual</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección Inventario -->
    <div id="inventario" class="mb-12">
        <h3 class="text-3xl font-bold mb-6 text-white relative inline-block" data-aos="fade-up">
            Inventario de Equipos
            <span class="absolute -bottom-2 left-0 w-24 h-1 bg-orange-500 rounded"></span>
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Gráfico Circular: Estado de Equipos -->
            <div class="bg-gray-800 p-6 rounded-lg shadow-xl" data-aos="fade-right">
                <h4 class="text-xl font-semibold mb-4 text-white">Distribución de Equipos</h4>
                <div class="chart-container">
                    <canvas id="equipmentChart"></canvas>
                </div>
            </div>
            <!-- Gráfico de Líneas: Uso de Equipos -->
            <div class="bg-gray-800 p-6 rounded-lg shadow-xl" data-aos="fade-left">
                <h4 class="text-xl font-semibold mb-4 text-white">Uso de Equipos (Últimos 6 Meses)</h4>
                <div class="chart-container">
                    <canvas id="usageChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección Estudiantes -->
    <div id="estudiantes" class="mb-12">
        <h3 class="text-3xl font-bold mb-6 text-white relative inline-block" data-aos="fade-up">
            Gestión de Estudiantes
            <span class="absolute -bottom-2 left-0 w-24 h-1 bg-orange-500 rounded"></span>
        </h3>
        <div class="grid grid-cols-1 gap-8">
            <!-- Tabla Comparativa -->
            <div class="bg-gray-800 p-6 rounded-lg shadow-xl" data-aos="fade-up">
                <h4 class="text-xl font-semibold mb-4 text-white">Rendimiento de Aprendices</h4>
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead>
                            <tr class="bg-gray-700">
                                <th class="p-3 text-white">Nombre</th>
                                <th class="p-3 text-white">Asignaciones</th>
                                <th class="p-3 text-white">Daños Reportados</th>
                                <th class="p-3 text-white">Tasa de Cumplimiento</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-700">
                                <td class="p-3 text-white">Juan Pérez</td>
                                <td class="p-3 text-white">25</td>
                                <td class="p-3 text-white">2</td>
                                <td class="p-3 text-white">92%</td>
                            </tr>
                            <tr class="border-b border-gray-700">
                                <td class="p-3 text-white">María Gómez</td>
                                <td class="p-3 text-white">30</td>
                                <td class="p-3 text-white">0</td>
                                <td class="p-3 text-white">98%</td>
                            </tr>
                            <tr>
                                <td class="p-3 text-white">Carlos López</td>
                                <td class="p-3 text-white">18</td>
                                <td class="p-3 text-white">5</td>
                                <td class="p-3 text-white">85%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección Ambientes -->
    <div id="ambientes" class="mb-12">
        <h3 class="text-3xl font-bold mb-6 text-white relative inline-block" data-aos="fade-up">
            Uso de Ambientes
            <span class="absolute -bottom-2 left-0 w-24 h-1 bg-orange-500 rounded"></span>
        </h3>
        <div class="bg-gray-800 p-6 rounded-lg shadow-xl" data-aos="fade-up">
            <h4 class="text-xl font-semibold mb-4 text-white">Mapa de Calor de Ambientes</h4>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-green-500 text-white p-4 rounded text-center">Laboratorio 1<br>75% Uso</div>
                <div class="bg-yellow-500 text-white p-4 rounded text-center">Aula 2<br>50% Uso</div>
                <div class="bg-red-500 text-white p-4 rounded text-center">Taller 3<br>90% Uso</div>
                <div class="bg-blue-500 text-white p-4 rounded text-center">Aula 4<br>30% Uso</div>
            </div>
        </div>
    </div>
</div>




<!-- JavaScript para Gráficos y AOS -->
<script>
    AOS.init();

    // Gráfico de Barras: Producción
    new Chart(document.getElementById('productionChart'), {
        type: 'bar',
        data: {
            labels: ['Café', 'Cacao', 'Maíz', 'Yuca'],
            datasets: [{
                label: 'Toneladas Producidas',
                data: [300, 250, 400, 300],
                backgroundColor: '#F97316',
                borderColor: '#F97316',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: { y: { beginAtZero: true } }
        }
    });

    // Gráfico Circular: Estado de Equipos
    new Chart(document.getElementById('equipmentChart'), {
        type: 'doughnut',
        data: {
            labels: ['Disponible', 'Asignado', 'Dañado', 'No Disponible'],
            datasets: [{
                data: [50, 30, 10, 10],
                backgroundColor: ['#34D399', '#F97316', '#EF4444', '#6B7280']
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });

    // Gráfico de Líneas: Uso de Equipos
    new Chart(document.getElementById('usageChart'), {
        type: 'line',
        data: {
            labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun'],
            datasets: [{
                label: 'Horas de Uso',
                data: [100, 120, 150, 130, 170, 200],
                borderColor: '#F97316',
                fill: false
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: { y: { beginAtZero: true } }
        }
    });
</script>

<div class="container mx-auto py-16 px-4 md:px-0">
    <!-- Componente 1: Gráfico de Barras Apiladas - Producción por Producto -->
    <div class="mb-12">
        <h3 class="text-3xl font-bold mb-6 text-white relative inline-block" data-aos="fade-up">
            Producción por Producto
            <span class="absolute -bottom-2 left-0 w-24 h-1 bg-orange-500 rounded"></span>
        </h3>
        <div class="bg-gray-800 p-6 rounded-lg shadow-xl" data-aos="fade-right">
            <h4 class="text-xl font-semibold mb-4 text-white">Orgánico vs. Convencional (Toneladas)</h4>
            <div class="chart-container" style="position: relative; height: 300px; width: 100%;">
                <canvas id="stackedBarChart"></canvas>
            </div>
        </div>
    </div>
    <script>
        new Chart(document.getElementById('stackedBarChart'), {
            type: 'bar',
            data: {
                labels: ['Café', 'Cacao', 'Maíz', 'Yuca'],
                datasets: [
                    {
                        label: 'Orgánico',
                        data: [200, 150, 250, 100],
                        backgroundColor: '#34D399'
                    },
                    {
                        label: 'Convencional',
                        data: [250, 170, 200, 180],
                        backgroundColor: '#F97316'
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    x: { stacked: true },
                    y: { stacked: true, beginAtZero: true }
                }
            }
        });
    </script>

    <!-- Componente 2: Gráfico de Torta 3D - Asignaciones por Rol -->
    <div class="mb-12">
        <h3 class="text-3xl font-bold mb-6 text-white relative inline-block" data-aos="fade-up">
            Asignaciones por Rol
            <span class="absolute -bottom-2 left-0 w-24 h-1 bg-orange-500 rounded"></span>
        </h3>
        <div class="bg-gray-800 p-6 rounded-lg shadow-xl" data-aos="fade-right">
            <h4 class="text-xl font-semibold mb-4 text-white">Distribución de Equipos Asignados</h4>
            <div class="chart-container" style="position: relative; height: 300px; width: 100%;">
                <canvas id="pie3DChart"></canvas>
            </div>
        </div>
    </div>
    <script>
        new Chart(document.getElementById('pie3DChart'), {
            type: 'pie',
            data: {
                labels: ['Aprendiz', 'Instructor', 'Pasante'],
                datasets: [{
                    data: [60, 25, 15],
                    backgroundColor: ['#F97316', '#34D399', '#EF4444'],
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { position: 'top' }
                }
            }
        });
    </script>

    <!-- Componente 3: Gráfico de Líneas Múltiples - Uso de Herramientas vs. Máquinas -->
    <div class="mb-12">
        <h3 class="text-3xl font-bold mb-6 text-white relative inline-block" data-aos="fade-up">
            Uso de Equipos
            <span class="absolute -bottom-2 left-0 w-24 h-1 bg-orange-500 rounded"></span>
        </h3>
        <div class="bg-gray-800 p-6 rounded-lg shadow-xl" data-aos="fade-right">
            <h4 class="text-xl font-semibold mb-4 text-white">Herramientas vs. Máquinas (Horas, 2025)</h4>
            <div class="chart-container" style="position: relative; height: 300px; width: 100%;">
                <canvas id="multiLineChart"></canvas>
            </div>
        </div>
    </div>
    <script>
        new Chart(document.getElementById('multiLineChart'), {
            type: 'line',
            data: {
                labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun'],
                datasets: [
                    {
                        label: 'Herramientas',
                        data: [90, 110, 130, 120, 150, 170],
                        borderColor: '#F97316',
                        fill: false
                    },
                    {
                        label: 'Máquinas',
                        data: [70, 80, 100, 90, 120, 140],
                        borderColor: '#34D399',
                        fill: false
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: { y: { beginAtZero: true } }
            }
        });
    </script>

    <!-- Componente 4: Tarjetas de KPIs Animadas -->
    <div class="mb-12">
        <h3 class="text-3xl font-bold mb-6 text-white relative inline-block" data-aos="fade-up">
            Indicadores Clave
            <span class="absolute -bottom-2 left-0 w-24 h-1 bg-orange-500 rounded"></span>
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4" data-aos="fade-up">
            <div class="bg-gray-700 p-6 rounded-lg shadow-md flex items-center transform hover:scale-105 transition duration-300">
                <i class="fas fa-seedling text-orange-500 text-4xl mr-4"></i>
                <div>
                    <p class="text-lg font-semibold text-white">Producción Total</p>
                    <p class="text-2xl text-white">1,500 Toneladas</p>
                </div>
            </div>
            <div class="bg-gray-700 p-6 rounded-lg shadow-md flex items-center transform hover:scale-105 transition duration-300">
                <i class="fas fa-users text-orange-500 text-4xl mr-4"></i>
                <div>
                    <p class="text-lg font-semibold text-white">Estudiantes Activos</p>
                    <p class="text-2xl text-white">180</p>
                </div>
            </div>
            <div class="bg-gray-700 p-6 rounded-lg shadow-md flex items-center transform hover:scale-105 transition duration-300">
                <i class="fas fa-exclamation-triangle text-orange-500 text-4xl mr-4"></i>
                <div>
                    <p class="text-lg font-semibold text-white">Equipos Dañados</p>
                    <p class="text-2xl text-white">30</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Componente 5: Tabla Interactiva - Rendimiento por Programa -->
    <div class="mb-12">
        <h3 class="text-3xl font-bold mb-6 text-white relative inline-block" data-aos="fade-up">
            Rendimiento por Programa Formativo
            <span class="absolute -bottom-2 left-0 w-24 h-1 bg-orange-500 rounded"></span>
        </h3>
        <div class="bg-gray-800 p-6 rounded-lg shadow-xl" data-aos="fade-up">
            <h4 class="text-xl font-semibold mb-4 text-white">Estudiantes por Programa</h4>
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead>
                        <tr class="bg-gray-700">
                            <th class="p-3 text-white">Programa</th>
                            <th class="p-3 text-white">Estudiantes</th>
                            <th class="p-3 text-white">Asignaciones</th>
                            <th class="p-3 text-white">Tasa de Éxito</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-700 hover:bg-gray-600 transition duration-200">
                            <td class="p-3 text-white">Agroindustria</td>
                            <td class="p-3 text-white">60</td>
                            <td class="p-3 text-white">150</td>
                            <td class="p-3 text-white">95%</td>
                        </tr>
                        <tr class="border-b border-gray-700 hover:bg-gray-600 transition duration-200">
                            <td class="p-3 text-white">Mecánica Agrícola</td>
                            <td class="p-3 text-white">50</td>
                            <td class="p-3 text-white">120</td>
                            <td class="p-3 text-white">90%</td>
                        </tr>
                        <tr class="hover:bg-gray-600 transition duration-200">
                            <td class="p-3 text-white">Informática</td>
                            <td class="p-3 text-white">70</td>
                            <td class="p-3 text-white">180</td>
                            <td class="p-3 text-white">92%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Componente 6: Gráfico de Área Apilada - Productividad por Ambiente -->
    <div class="mb-12">
        <h3 class="text-3xl font-bold mb-6 text-white relative inline-block" data-aos="fade-up">
            Productividad por Ambiente
            <span class="absolute -bottom-2 left-0 w-24 h-1 bg-orange-500 rounded"></span>
        </h3>
        <div class="bg-gray-800 p-6 rounded-lg shadow-xl" data-aos="fade-right">
            <h4 class="text-xl font-semibold mb-4 text-white">Horas de Uso por Ambiente (2025)</h4>
            <div class="chart-container" style="position: relative; height: 300px; width: 100%;">
                <canvas id="stackedAreaChart"></canvas>
            </div>
        </div>
    </div>
    <script>
        new Chart(document.getElementById('stackedAreaChart'), {
            type: 'line',
            data: {
                labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun'],
                datasets: [
                    {
                        label: 'Laboratorio 1',
                        data: [50, 60, 70, 65, 80, 90],
                        backgroundColor: 'rgba(249, 115, 22, 0.3)',
                        borderColor: '#F97316',
                        fill: true
                    },
                    {
                        label: 'Aula 2',
                        data: [30, 40, 45, 50, 55, 60],
                        backgroundColor: 'rgba(52, 211, 153, 0.3)',
                        borderColor: '#34D399',
                        fill: true
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: { stacked: true, beginAtZero: true }
                }
            }
        });
    </script>

    <!-- Componente 7: Mapa de Calor Mejorado - Uso de Computadores -->
    <div class="mb-12">
        <h3 class="text-3xl font-bold mb-6 text-white relative inline-block" data-aos="fade-up">
            Uso de Computadores
            <span class="absolute -bottom-2 left-0 w-24 h-1 bg-orange-500 rounded"></span>
        </h3>
        <div class="bg-gray-800 p-6 rounded-lg shadow-xl" data-aos="fade-up">
            <h4 class="text-xl font-semibold mb-4 text-white">Distribución por Laboratorio</h4>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-gradient-to-br from-green-500 to-green-700 text-white p-4 rounded text-center">Lab 1<br>85% Uso</div>
                <div class="bg-gradient-to-br from-yellow-500 to-yellow-700 text-white p-4 rounded text-center">Lab 2<br>60% Uso</div>
                <div class="bg-gradient-to-br from-red-500 to-red-700 text-white p-4 rounded text-center">Lab 3<br>95% Uso</div>
                <div class="bg-gradient-to-br from-blue-500 to-blue-700 text-white p-4 rounded text-center">Lab 4<br>45% Uso</div>
            </div>
        </div>
    </div>

    <!-- Componente 8: Gráfico de Radar Mejorado - Eficiencia de Procesos -->
    <div class="mb-12">
        <h3 class="text-3xl font-bold mb-6 text-white relative inline-block" data-aos="fade-up">
            Eficiencia de Procesos
            <span class="absolute -bottom-2 left-0 w-24 h-1 bg-orange-500 rounded"></span>
        </h3>
        <div class="bg-gray-800 p-6 rounded-lg shadow-xl" data-aos="fade-right">
            <h4 class="text-xl font-semibold mb-4 text-white">Comparación de Procesos</h4>
            <div class="chart-container" style="position: relative; height: 300px; width: 100%;">
                <canvas id="radarChart"></canvas>
            </div>
        </div>
    </div>
    <script>
        new Chart(document.getElementById('radarChart'), {
            type: 'radar',
            data: {
                labels: ['Producción', 'Logística', 'Inventario', 'Capacitación', 'Mantenimiento'],
                datasets: [
                    {
                        label: '2024',
                        data: [80, 65, 85, 75, 70],
                        backgroundColor: 'rgba(249, 115, 22, 0.2)',
                        borderColor: '#F97316'
                    },
                    {
                        label: '2025',
                        data: [85, 70, 90, 80, 75],
                        backgroundColor: 'rgba(52, 211, 153, 0.2)',
                        borderColor: '#34D399'
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: { r: { beginAtZero: true, max: 100 } }
            }
        });
    </script>

    <!-- Componente 9: Barra de Progreso Circular - Tasa de Cumplimiento por Rol -->
    <div class="mb-12">
        <h3 class="text-3xl font-bold mb-6 text-white relative inline-block" data-aos="fade-up">
            Tasa de Cumplimiento por Rol
            <span class="absolute -bottom-2 left-0 w-24 h-1 bg-orange-500 rounded"></span>
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4" data-aos="fade-up">
            <div class="bg-gray-800 p-6 rounded-lg shadow-xl text-center">
                <h4 class="text-lg font-semibold text-white mb-4">Director</h4>
                <div class="relative w-24 h-24 mx-auto">
                    <canvas id="directorProgress"></canvas>
                    <div class="absolute inset-0 flex items-center justify-center text-white text-xl">95%</div>
                </div>
            </div>
            <div class="bg-gray-800 p-6 rounded-lg shadow-xl text-center">
                <h4 class="text-lg font-semibold text-white mb-4">Instructor</h4>
                <div class="relative w-24 h-24 mx-auto">
                    <canvas id="instructorProgress"></canvas>
                    <div class="absolute inset-0 flex items-center justify-center text-white text-xl">90%</div>
                </div>
            </div>
            <div class="bg-gray-800 p-6 rounded-lg shadow-xl text-center">
                <h4 class="text-lg font-semibold text-white mb-4">Aprendiz</h4>
                <div class="relative w-24 h-24 mx-auto">
                    <canvas id="aprendizProgress"></canvas>
                    <div class="absolute inset-0 flex items-center justify-center text-white text-xl">85%</div>
                </div>
            </div>
            <div class="bg-gray-800 p-6 rounded-lg shadow-xl text-center">
                <h4 class="text-lg font-semibold text-white mb-4">Celador</h4>
                <div class="relative w-24 h-24 mx-auto">
                    <canvas id="celadorProgress"></canvas>
                    <div class="absolute inset-0 flex items-center justify-center text-white text-xl">80%</div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function drawProgressChart(canvasId, progress) {
            new Chart(document.getElementById(canvasId), {
                type: 'doughnut',
                data: {
                    datasets: [{
                        data: [progress, 100 - progress],
                        backgroundColor: ['#F97316', '#6B7280'],
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                    cutout: '80%'
                }
            });
        }
        drawProgressChart('directorProgress', 95);
        drawProgressChart('instructorProgress', 90);
        drawProgressChart('aprendizProgress', 85);
        drawProgressChart('celadorProgress', 80);
    </script>

    <!-- Componente 10: Gráfico de Dispersión con Tendencia -->
    <div class="mb-12">
        <h3 class="text-3xl font-bold mb-6 text-white relative inline-block" data-aos="fade-up">
            Asignaciones vs. Daños
            <span class="absolute -bottom-2 left-0 w-24 h-1 bg-orange-500 rounded"></span>
        </h3>
        <div class="bg-gray-800 p-6 rounded-lg shadow-xl" data-aos="fade-right">
            <h4 class="text-xl font-semibold mb-4 text-white">Relación por Estudiante</h4>
            <div class="chart-container" style="position: relative; height: 300px; width: 100%;">
                <canvas id="scatterTrendChart"></canvas>
            </div>
        </div>
    </div>
    <script>
        new Chart(document.getElementById('scatterTrendChart'), {
            type: 'scatter',
            data: {
                datasets: [
                    {
                        label: 'Estudiantes',
                        data: [
                            { x: 25, y: 2 },
                            { x: 30, y: 0 },
                            { x: 18, y: 5 },
                            { x: 22, y: 3 }
                        ],
                        backgroundColor: '#F97316'
                    },
                    {
                        type: 'line',
                        label: 'Tendencia',
                        data: [{ x: 15, y: 6 }, { x: 35, y: 0 }],
                        borderColor: '#34D399',
                        fill: false,
                        pointRadius: 0
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    x: { title: { display: true, text: 'Asignaciones', color: '#fff' } },
                    y: { title: { display: true, text: 'Daños Reportados', color: '#fff' } }
                }
            }
        });
    </script>

    <!-- Componente 11: Timeline - Historial de Eventos -->
    <div class="mb-12">
        <h3 class="text-3xl font-bold mb-6 text-white relative inline-block" data-aos="fade-up">
            Historial de Eventos
            <span class="absolute -bottom-2 left-0 w-24 h-1 bg-orange-500 rounded"></span>
        </h3>
        <div class="bg-gray-800 p-6 rounded-lg shadow-xl" data-aos="fade-up">
            <h4 class="text-xl font-semibold mb-4 text-white">Eventos Clave (2025)</h4>
            <div class="relative">
                <div class="border-l-4 border-orange-500 pl-4">
                    <div class="mb-6">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-orange-500 rounded-full mr-3"></div>
                            <p class="text-white">Ene 2025: Asignación de 50 equipos a aprendices</p>
                        </div>
                    </div>
                    <div class="mb-6">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-orange-500 rounded-full mr-3"></div>
                            <p class="text-white">Mar 2025: Reporte de 10 daños en Laboratorio 1</p>
                        </div>
                    </div>
                    <div class="mb-6">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-orange-500 rounded-full mr-3"></div>
                            <p class="text-white">May 2025: Reparación de 8 equipos dañados</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 
</div>


@endsection