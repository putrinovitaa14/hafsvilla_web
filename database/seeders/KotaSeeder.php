<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kota = [
            [ 'kota' => 'Kabupaten Bandung'],
            [ 'kota' => 'Kabupaten Bandung Barat'],
            [ 'kota' => 'Kabupaten Bekasi'],
            [ 'kota' => 'Kabupaten Bogor'],
            [ 'kota' => 'Kabupaten Ciamis'],
            [ 'kota' => 'Kabupaten Cianjur'],
            [ 'kota' => 'Kabupaten Cirebon'],
            [ 'kota' => 'Kabupaten Garut'],
            [ 'kota' => 'Kabupaten Indramayu'],
            [ 'kota' => 'Kabupaten Karawang'],
            [ 'kota' => 'Kabupaten Majalengka'],
            [ 'kota' => 'Kabupaten Pangandaran'],
            [ 'kota' => 'Kabupaten Purwakarta'],
            [ 'kota' => 'Kabupaten Subang'],
            [ 'kota' => 'Kabupaten Sukabumi'],
            [ 'kota' => 'Kabupaten Tasikmalaya'],
            [ 'kota' => 'Kabupaten Sumedang'],
            [ 'kota' => 'Kota Bandung'],
            [ 'kota' => 'Kota Bekasi'],
            [ 'kota' => 'Kota Bogor'],
            [ 'kota' => 'Kota Cimahi'],
            [ 'kota' => 'Kota Cirebon'],
            [ 'kota' => 'Kota Depok'],
            [ 'kota' => 'Kota Sukabumi'],
            [ 'kota' => 'Kota Tasikmalaya'],
        ];
        DB::table('kotas')->insert($kota);
    }
}
