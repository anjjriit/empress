<?php

/**
 * database/seeds/PermissionRoleTableSeeder.php
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @license https://github.com/19peaches/empress/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('permission_role')->delete();
        
        \DB::table('permission_role')->insert(array (
            0 => 
            array (
                'permission_id' => 1,
                'role_id' => 1,
            ),
            1 => 
            array (
                'permission_id' => 1,
                'role_id' => 2,
            ),
            2 => 
            array (
                'permission_id' => 1,
                'role_id' => 3,
            ),
            3 => 
            array (
                'permission_id' => 1,
                'role_id' => 4,
            ),
        ));        
    }
}
