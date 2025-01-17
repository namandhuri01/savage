<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-12-21 06:31:06',
                'updated_at' => '2018-12-25 04:36:53',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-12-21 06:31:06',
                'updated_at' => '2018-12-21 06:31:06',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-12-21 06:31:06',
                'updated_at' => '2018-12-21 06:31:06',
            ),
            3 => 
            array (
                'id' => 18,
                'name' => 'facebook_groups',
                'slug' => 'facebook-groups',
                'display_name_singular' => 'Facebook Group',
                'display_name_plural' => 'Facebook Groups',
                'icon' => NULL,
                'model_name' => 'App\\FacebookGroup',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-12-25 04:31:54',
                'updated_at' => '2018-12-25 04:42:07',
            ),
            4 => 
            array (
                'id' => 19,
                'name' => 'facebook_users',
                'slug' => 'facebook-users',
                'display_name_singular' => 'Facebook User',
                'display_name_plural' => 'Facebook Users',
                'icon' => NULL,
                'model_name' => 'App\\FacebookUser',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-12-25 04:32:31',
                'updated_at' => '2018-12-25 04:32:31',
            ),
            5 => 
            array (
                'id' => 21,
                'name' => 'posts',
                'slug' => 'facebook-posts',
                'display_name_singular' => 'Post',
                'display_name_plural' => 'Posts',
                'icon' => NULL,
                'model_name' => 'App\\Post',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => 'posts belong to admin user',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-12-25 04:45:26',
                'updated_at' => '2018-12-25 04:45:26',
            ),
        ));
        
        
    }
}