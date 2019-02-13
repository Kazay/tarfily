<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 100)->create();
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@tartifly.com',
            'password' => bcrypt('secret'),
            'role' => 1
        ]);
    }
}
