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
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '1')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],
            [
                'nama_daerah' => 'Kota-Kediri',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '1')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],
            [
                'nama_daerah' => 'Kota-Malang',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '1')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],
            [
                'nama_daerah' => 'Jember',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '1')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],
            [
                'nama_daerah' => 'Surabaya',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '1')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],
            [
                'nama_daerah' => 'Banyuwangi',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '1')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],
             [
                'nama_daerah' => 'Bangkalan',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '1')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],     [
                'nama_daerah' => 'Bojonegoro',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '1')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],     [
                'nama_daerah' => 'Bondowoso',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '1')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],     [
                'nama_daerah' => 'Gresik',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '1')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],     [
                'nama_daerah' => 'Jombang',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '1')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],     [
                'nama_daerah' => 'Lamongan',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '1')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],     [
                'nama_daerah' => 'Lumajang',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '1')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],     [
                'nama_daerah' => 'Kota-Madiun',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '1')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],     [
                'nama_daerah' => 'Magetan',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '1')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],     [
                'nama_daerah' => 'Kota-Mojokerto',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '1')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],     [
                'nama_daerah' => 'Nganjuk',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '1')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],     [
                'nama_daerah' => 'Kota-Pasuruan',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '1')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],     [
                'nama_daerah' => 'Ngawi',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '1')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],     [
                'nama_daerah' => 'Pacitan',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '1')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],     [
                'nama_daerah' => 'Pamekasan',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '1')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],     [
                'nama_daerah' => 'Ponorogo',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '1')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],     [
                'nama_daerah' => 'Kota-Probolinggo',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '1')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],     [
                'nama_daerah' => 'Sampang',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '1')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],     [
                'nama_daerah' => 'Sidoarjo',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '1')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],     [
                'nama_daerah' => 'Situbondo',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '1')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],     [
                'nama_daerah' => 'Sumenep',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '1')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],     [
                'nama_daerah' => 'Tuban',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '1')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],     [
                'nama_daerah' => 'Trenggalek',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '1')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],     [
                'nama_daerah' => 'Tulungagung',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '1')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],
          [
                'nama_daerah' => 'Kota-Bogor',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '2')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ], [
                'nama_daerah' => 'Cianjur',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '2')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ], [
                'nama_daerah' => 'Garut',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '2')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ], [
                'nama_daerah' => 'Indramayu',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '2')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ], [
                'nama_daerah' => 'Karawang',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '2')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ], [
                'nama_daerah' => 'Kuningan',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '2')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ], [
                'nama_daerah' => 'Majalengka',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '2')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ], [
                'nama_daerah' => 'Sumedang',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '2')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ], [
                'nama_daerah' => 'Purwakarta',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '2')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ], [
                'nama_daerah' => 'Subang',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '2')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ], [
                'nama_daerah' => 'Singaparna',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '2')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ], [
                'nama_daerah' => 'Parigi',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '2')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ], [
                'nama_daerah' => 'Pelabuhan-Ratu',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '2')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ], [
                'nama_daerah' => 'Depok',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '2')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ], [
                'nama_daerah' => 'Tasikmalaya',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '2')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ], [
                'nama_daerah' => 'Cirebon',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '2')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ], [
                'nama_daerah' => 'Banjarnegara',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '3')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],[
                'nama_daerah' => 'Batang',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '3')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],[
                'nama_daerah' => 'Blora',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '3')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],[
                'nama_daerah' => 'Boyolali',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '3')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],[
                'nama_daerah' => 'Brebes',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '3')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],[
                'nama_daerah' => 'Cilacap',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '3')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],[
                'nama_daerah' => 'Demak',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '3')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],[
                'nama_daerah' => 'Purwodadi',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '3')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],[
                'nama_daerah' => 'Jepara',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '3')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],[
                'nama_daerah' => 'Karanganyar',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '3')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],[
                'nama_daerah' => 'Kebumen',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '3')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],[
                'nama_daerah' => 'Kendal',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '3')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],[
                'nama_daerah' => 'Klaten',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '3')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],[
                'nama_daerah' => 'Kudus',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '3')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],[
                'nama_daerah' => 'Magelang',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '3')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],[
                'nama_daerah' => 'Pati',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '3')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],[
                'nama_daerah' => 'Pekalongan',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '3')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],[
                'nama_daerah' => 'Pemalang',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '3')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],[
                'nama_daerah' => 'Purbalingga',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '3')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],[
                'nama_daerah' => 'Purworejo',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '3')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],[
                'nama_daerah' => 'Rembang',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '3')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],[
                'nama_daerah' => 'Semarang',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '3')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],[
                'nama_daerah' => 'Sragen',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '3')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],[
                'nama_daerah' => 'Sukoharjo',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '3')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],[
                'nama_daerah' => 'Tegal',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '3')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],[
                'nama_daerah' => 'Temanggung',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '3')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],[
                'nama_daerah' => 'Wonogiri',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '3')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],[
                'nama_daerah' => 'Wonosobo',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '3')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],[
                'nama_daerah' => 'Salatiga',
                'id_provinsi' => DB::table('provinsi')->get('id')->where('id', '3')->first()->id,
                'created_at' => now(),
                'updated_at' => now()
        ],
    ];
        DB::table('kota')->insert($data);
    }
}