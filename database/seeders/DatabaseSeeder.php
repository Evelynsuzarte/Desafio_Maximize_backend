<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //
        foreach (range(1, 8) as $index) {
            DB::table('materias')->insert([
                'id' => $index,
                'titulo' => Str::random(10),
                'descricao' => Str::random(20),
                'texto_completo' => Str::random(40),
                'imagem' => Str::random(10).'.png',
                'data_de_publicacao' => Carbon::now()->subDays(rand(1, 30))
            ]);
        }
    }
}
