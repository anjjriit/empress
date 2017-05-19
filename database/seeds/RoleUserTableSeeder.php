<?php

/**
 * database/seeds/RoleUserTableSeeder.php
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @license https://github.com/periaptio/empress/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('role_user')->delete();
        
        \DB::table('role_user')->insert(array (
            0 => 
            array (
                'user_id' => 1,
                'role_id' => 1,
            ),
            1 => 
            array (
                'user_id' => 1,
                'role_id' => 2,
            ),
            2 => 
            array (
                'user_id' => 1,
                'role_id' => 3,
            ),
            3 => 
            array (
                'user_id' => 1,
                'role_id' => 4,
            ),
            4 => 
            array (
                'user_id' => 3,
                'role_id' => 4,
            ),
            5 => 
            array (
                'user_id' => 1,
                'role_id' => 5,
            ),
            6 => 
            array (
                'user_id' => 3,
                'role_id' => 5,
            ),
        ));        
    }
}
