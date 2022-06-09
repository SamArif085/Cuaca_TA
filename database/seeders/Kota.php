<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Schema\ForeignIdColumnDefinition;

class Kota extends Seeder
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
                'nama_daerah' => 'Kota-Blitar',
                'id_provinsi' => DB::table('provinsi')->where('id','=','3')->get('id'),
                'created_at' => now(),
                'updated_at' => now()
        ],
    ];
        DB::table('kota')->insert($data);
    }
}