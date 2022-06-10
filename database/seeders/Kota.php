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
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '3')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],
            [
                'nama_daerah' => 'Kota-Kediri',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '3')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],
            [
                'nama_daerah' => 'Kota-Malang',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '3')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],
            [
                'nama_daerah' => 'Jember',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '3')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],
            [
                'nama_daerah' => 'Surabaya',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '3')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],
            [
                'nama_daerah' => 'Banyuwangi',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '3')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],
    ];
        DB::table('kota')->insert($data);
    }
}