<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(\database\CreateUsersTable::class);
        /*DB::table('users')->insert([
            'name' => 'SA Admin',
            'email' => 'merabi777@gmail.com',
            'password' => '12345679',
        ]);*/
    }
}
