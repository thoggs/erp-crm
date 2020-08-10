<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ErpCrm extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++)
        {
            DB::table('tbl_erp_contatos')->insert([
                'nome' => Str::random(10),
                'estado' => Str::random(10),
                'cidade' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'status' => rand(0, 1)
            ]);
        }

        for ($i = 0; $i < 5; $i++)
        {
            DB::table('tbl_crm_contatos')->insert([
                'nome' => Str::random(10),
                'estado' => Str::random(10),
                'cidade' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'status' => rand(0, 1)
            ]);
        }
    }
}
