<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatatansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catatans')->insert([
            'judul' => 'Sahur',
            'isi' => 'Ayam Penyet',
            'created_at' => Carbon\Carbon::now(),
        ]);
    }
}
