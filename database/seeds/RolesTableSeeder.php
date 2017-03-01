<?php

/**
 * database/seeds/RolesTableSeeder.php
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @license https://github.com/19peaches/empress/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'super',
                'display_name' => 'Super Admin',
                'description' => 'Super admin role for complete site administration.',
                'created_at' => '2017-02-27 14:41:21',
                'updated_at' => '2017-02-28 19:18:47',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'admin',
                'display_name' => 'Admin',
                'description' => 'General administrative role.',
                'created_at' => '2017-03-01 00:10:27',
                'updated_at' => '2017-03-01 00:10:27',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'manager',
                'display_name' => 'Manager',
                'description' => 'Site manager role.',
                'created_at' => '2017-03-01 00:18:16',
                'updated_at' => '2017-03-01 00:18:16',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'editor',
                'display_name' => 'Editor',
                'description' => 'Content editor role.',
                'created_at' => '2017-03-01 00:18:42',
                'updated_at' => '2017-03-01 00:18:42',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'customer',
                'display_name' => 'Customer',
                'description' => 'Basic customer role for logged in users.',
                'created_at' => '2017-03-01 00:19:37',
                'updated_at' => '2017-03-01 00:19:37',
            ),
        ));        
    }
}
