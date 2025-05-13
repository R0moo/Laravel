<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("notas")->insert([
            'titulo' => 'Título 1',
            'texto' => 'Exemplo de nota 1',
        ]);

        DB::table("notas")->insert([
            'titulo' => 'Título 2',
            'texto' => 'Exemplo de nota 2',
        ]);
    }
}
