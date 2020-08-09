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
        foreach (range(0, 4) as $number)
        {
            DB::table('tbl_erp_contatos')->insert([
                'name' => Str::random(10),
                'estado' => Str::random(10),
                'cidade' => Str::random(10),
                'mail' => Str::random(10).'@gmail.com'
            ]);
        }

        foreach (range(0, 4) as $number)
        {
            DB::table('tbl_crm_contatos')->insert([
                'name' => Str::random(10),
                'estado' => Str::random(10),
                'cidade' => Str::random(10),
                'mail' => Str::random(10).'@gmail.com'
            ]);
        }
    }
}
