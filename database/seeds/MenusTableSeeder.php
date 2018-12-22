<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Menus')->delete();
        
        \DB::table('Menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'created_at' => '2018-12-21 06:31:06',
                'updated_at' => '2018-12-21 06:31:06',
            ),
        ));
        
        
    }
}