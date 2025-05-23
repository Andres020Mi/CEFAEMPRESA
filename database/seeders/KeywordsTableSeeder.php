<?php

namespace Database\Seeders;

use App\Models\Keyword;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KeywordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Keyword = [
            [
                "keyword" => 'nombre oficial de sena empresa',
                "word" => "CEFAEMPRESA",
                'description' => 'Nombre oficial que representa al rp de sena empresa',
            ]
        ];

        foreach ($Keyword as $Keyword) {
            Keyword::create($Keyword);
        }
    }
}
