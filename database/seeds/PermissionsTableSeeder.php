<?php

/**
 * database/seeds/PermissionsTableSeeder.php
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @license https://github.com/19peaches/empress/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'access_admin',
                'display_name' => 'Access Admin',
                'description' => 'Adds permission to access the admin area.',
                'created_at' => '2017-02-28 19:44:16',
                'updated_at' => '2017-02-28 19:44:16',
            ),
        ));        
    }
}
