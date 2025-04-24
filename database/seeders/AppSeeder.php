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
            ]
        ];

        foreach ($apps as $app) {
            App::create($app);
        }
    }
}
