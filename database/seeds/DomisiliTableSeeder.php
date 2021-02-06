<?php

use Illuminate\Database\Seeder;
use App\Domisili;
use App\User;
use App\Jabatan;

class DomisiliTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nik' => '6402135908920002',
            'password' => bcrypt('kuala1234')
        ]);
        Domisili::create([
            'user_id' => '1',
            'nama' => 'aminah',
            'kelamin' => 'P',
            'tggl_lhr' => '12/11/1992',
            'agama' => 'islam',
            'pekerjaan' => 'kawin',
            'nik' => '6402135908920002',
            'alamat' => '1',
            'status' => '1',
        ]);
        Jabatan::create([
            'nip' => '12352145',
            'nama' => 'semet',
            'jabatan' => 'Lurah'
        ]);
    }
}
