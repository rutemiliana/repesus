<?php

namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('status')->insert([
            'description' => 'Enviado para análise',
        ]);
        DB::table('status')->insert([
            'description' => 'Em análise',
        ]);
        DB::table('status')->insert([
            'description' => 'Aprovado',
        ]);
        DB::table('status')->insert([
            'description' => 'Reprovado',
        ]);
        DB::table('status')->insert([
            'description' => 'Pendência',
        ]);
        
    }
}
