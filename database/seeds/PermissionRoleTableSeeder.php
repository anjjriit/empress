<?php

/**
 * database/seeds/PermissionRoleTableSeeder.php
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @license https://github.com/periaptio/empress/blob/master/LICENSE
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
                'permission_id' => 2,
                'role_id' => 1,
            ),
            2 => 
            array (
                'permission_id' => 3,
                'role_id' => 1,
            ),
            3 => 
            array (
                'permission_id' => 4,
                'role_id' => 1,
            ),
            4 => 
            array (
                'permission_id' => 5,
                'role_id' => 1,
            ),
            5 => 
            array (
                'permission_id' => 6,
                'role_id' => 1,
            ),
            6 => 
            array (
                'permission_id' => 7,
                'role_id' => 1,
            ),
            7 => 
            array (
                'permission_id' => 8,
                'role_id' => 1,
            ),
            8 => 
            array (
                'permission_id' => 9,
                'role_id' => 1,
            ),
            9 => 
            array (
                'permission_id' => 10,
                'role_id' => 1,
            ),
            10 => 
            array (
                'permission_id' => 11,
                'role_id' => 1,
            ),
            11 => 
            array (
                'permission_id' => 12,
                'role_id' => 1,
            ),
            12 => 
            array (
                'permission_id' => 13,
                'role_id' => 1,
            ),
            13 => 
            array (
                'permission_id' => 14,
                'role_id' => 1,
            ),
            14 => 
            array (
                'permission_id' => 15,
                'role_id' => 1,
            ),
            15 => 
            array (
                'permission_id' => 16,
                'role_id' => 1,
            ),
            16 => 
            array (
                'permission_id' => 17,
                'role_id' => 1,
            ),
            17 => 
            array (
                'permission_id' => 1,
                'role_id' => 2,
            ),
            18 => 
            array (
                'permission_id' => 2,
                'role_id' => 2,
            ),
            19 => 
            array (
                'permission_id' => 3,
                'role_id' => 2,
            ),
            20 => 
            array (
                'permission_id' => 4,
                'role_id' => 2,
            ),
            21 => 
            array (
                'permission_id' => 5,
                'role_id' => 2,
            ),
            22 => 
            array (
                'permission_id' => 6,
                'role_id' => 2,
            ),
            23 => 
            array (
                'permission_id' => 7,
                'role_id' => 2,
            ),
            24 => 
            array (
                'permission_id' => 8,
                'role_id' => 2,
            ),
            25 => 
            array (
                'permission_id' => 10,
                'role_id' => 2,
            ),
            26 => 
            array (
                'permission_id' => 11,
                'role_id' => 2,
            ),
            27 => 
            array (
                'permission_id' => 12,
                'role_id' => 2,
            ),
            28 => 
            array (
                'permission_id' => 14,
                'role_id' => 2,
            ),
            29 => 
            array (
                'permission_id' => 15,
                'role_id' => 2,
            ),
            30 => 
            array (
                'permission_id' => 16,
                'role_id' => 2,
            ),
            31 => 
            array (
                'permission_id' => 17,
                'role_id' => 2,
            ),
            32 => 
            array (
                'permission_id' => 1,
                'role_id' => 3,
            ),
            33 => 
            array (
                'permission_id' => 2,
                'role_id' => 3,
            ),
            34 => 
            array (
                'permission_id' => 3,
                'role_id' => 3,
            ),
            35 => 
            array (
                'permission_id' => 4,
                'role_id' => 3,
            ),
            36 => 
            array (
                'permission_id' => 6,
                'role_id' => 3,
            ),
            37 => 
            array (
                'permission_id' => 10,
                'role_id' => 3,
            ),
            38 => 
            array (
                'permission_id' => 14,
                'role_id' => 3,
            ),
            39 => 
            array (
                'permission_id' => 15,
                'role_id' => 3,
            ),
            40 => 
            array (
                'permission_id' => 16,
                'role_id' => 3,
            ),
            41 => 
            array (
                'permission_id' => 17,
                'role_id' => 3,
            ),
            42 => 
            array (
                'permission_id' => 1,
                'role_id' => 4,
            ),
            43 => 
            array (
                'permission_id' => 2,
                'role_id' => 4,
            ),
            44 => 
            array (
                'permission_id' => 14,
                'role_id' => 4,
            ),
            45 => 
            array (
                'permission_id' => 15,
                'role_id' => 4,
            ),
            46 => 
            array (
                'permission_id' => 16,
                'role_id' => 4,
            ),
        ));
    }
}
