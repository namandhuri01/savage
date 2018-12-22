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
        

        \DB::table('Data_Types')->delete();
        
        \DB::table('Data_Types')->insert(array (
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
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-12-21 06:31:06',
                'updated_at' => '2018-12-21 06:31:06',
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
                'id' => 4,
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
                'created_at' => '2018-12-21 06:32:46',
                'updated_at' => '2018-12-21 06:32:46',
            ),
            4 => 
            array (
                'id' => 5,
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
                'created_at' => '2018-12-21 06:32:54',
                'updated_at' => '2018-12-21 06:32:54',
            ),
            5 => 
            array (
                'id' => 10,
                'name' => 'posts',
                'slug' => 'facebook-posts',
                'display_name_singular' => 'Post',
                'display_name_plural' => 'Posts',
                'icon' => NULL,
                'model_name' => 'App\\Post',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-12-21 07:48:17',
                'updated_at' => '2018-12-21 07:54:13',
            ),
        ));
        
        
    }
}