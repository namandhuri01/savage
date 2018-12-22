<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'Sifars',
                'email' => 'admin@sifars.com',
                'avatar' => 'users\\December2018\\LaRCWyZgXQL3k5OBwgki.png',
                'password' => '$2y$10$R/d40hYbTmEuc6W5zCjiyOFVm3sOYbhjoRZ/N1dZFdgiAJP5EwRBq',
                'remember_token' => 'R8epwPoIMysdz5HKzzVI6KPaZVuaL8Mtg4e3HNpFaGHOjY51cLqo49spufJk',
                'settings' => '{"locale":"en"}',
                'created_at' => '2018-12-21 06:32:06',
                'updated_at' => '2018-12-21 12:22:44',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 1,
                'name' => 'naman',
                'email' => 'naman@facebook.com',
                'avatar' => 'users\\December2018\\czo8GQdHnnGFGzCmHLDo.jpg',
                'password' => '$2y$10$/moJbvrVZwX4POBy21SUV.NS/RNexPXYSF2gcktGdfm5aXRRE0VuS',
                'remember_token' => '8weytKbJRrg1St8sWPY0mTVK8wDXbpCmBNctaVe5Cmd129cpQRvbCI22RUi1',
                'settings' => '{"locale":"en"}',
                'created_at' => '2018-12-21 09:56:20',
                'updated_at' => '2018-12-21 10:19:06',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 1,
                'name' => 'jatin',
                'email' => 'jatin@sifars.com',
                'avatar' => 'users\\December2018\\OUiqtnAkKVYShLhJRWK4.jpg',
                'password' => '$2y$10$9BA938fTmLJ0GeNhGQQ4n.4vYHbwUGcztKLMBsvnkNhv0vH4wu.uO',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2018-12-21 12:46:40',
                'updated_at' => '2018-12-21 12:47:55',
            ),
        ));
        
        
    }
}