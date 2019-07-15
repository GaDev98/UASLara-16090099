<?php

use Illuminate\Database\Seeder;
use App\TblUser;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TblUser::create([
        	'nama' => 'Dian',
        	'email' => 'Dian@gmail.com',
        	'alamat' => 'jl.kidullor',
        	'password' => bcrypt('12345'),
        	'tgl_lahir' => '1999/2/12',
        	'Status_Sekolah' => 'pelajar',
        	'gambar' => 'jilo.png'
        ]);
    }
}
