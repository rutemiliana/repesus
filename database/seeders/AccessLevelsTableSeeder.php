<?php
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AccessLevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('access_levels')->insert([
            'description' => 'Administrador',
        ]);

        DB::table('access_levels')->insert([
            'description' => 'Pesquisador',
        ]);
    }
}
