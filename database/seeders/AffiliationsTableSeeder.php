<?php

namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class AffiliationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('affiliations')->insert([
            'description' => 'Estudante, pós graduando ou residente da ESCS/SES',
        ]);
        DB::table('affiliations')->insert([
            'description' => 'Docente da ESCS',
        ]);
        DB::table('affiliations')->insert([
            'description' => 'Servidor da SES',
        ]);
        DB::table('affiliations')->insert([
            'description' => 'Profissional de instituição vinculada da SES',
        ]);
        DB::table('affiliations')->insert([
            'description' => 'Convidado',
        ]);

    }
}
