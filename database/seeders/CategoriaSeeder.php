<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timestamp = now();

        DB::table('categorias')->insert(['nombre' => 'Bebidas', 'created_at' => $timestamp]);
        DB::table('categorias')->insert(['nombre' => 'Postres', 'created_at' => $timestamp]);
        DB::table('categorias')->insert(['nombre' => 'Cocteles', 'created_at' => $timestamp]);
        DB::table('categorias')->insert(['nombre' => 'Pastas', 'created_at' => $timestamp]);
    }
}
