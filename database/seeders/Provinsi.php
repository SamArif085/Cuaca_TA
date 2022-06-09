<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Provinsi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
       [
                'nama_provinsi' => 'Jawa-Timur',
                'created_at' => now(),
                'updated_at' => now()
        ],[
                'nama_provinsi' => 'Jawa-Barat',
                'created_at' => now(),
                'updated_at' => now()
        ],[
                'nama_provinsi' => 'Jawa-Tengah',
                'created_at' => now(),
                'updated_at' => now()
        ],
    ];
        DB::table('provinsi')->insert($data);
    }
}