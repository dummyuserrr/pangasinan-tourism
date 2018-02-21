<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = md5(hash('sha512', 'admin').hash('ripemd160', 'admin').md5("strongest"));
        DB::table('users')->insert([
            'username' => 'admin',
            'password' => $password,
            'role' => 'superadmin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
