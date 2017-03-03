<?php

/**
 * database/seeds/UsersTableSeeder.php
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @license https://github.com/19peaches/empress/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

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
                'username' => 'admin',
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => '$2y$10$Jd1ceOxHFc9Vi99Hd8BeZe7h6EtCSNHCoFrT7Flmq4pdPACZFHd7m',
                'remember_token' => 'stmlukZxIKe0PyjMUAbkzU5NLRHLUo2ZPOeNQDNnCg8kEoiGWs0Faw7nxN7m',
                'activation_token' => NULL,
                'created_at' => '2017-02-09 00:30:59',
                'updated_at' => '2017-02-27 23:06:30',
                'activated_at' => '2017-02-09 00:32:10',
            ),
            1 => 
            array (
                'id' => 3,
                'username' => 'sjones',
                'name' => 'Steve Jones',
                'email' => 'sjones@example.com',
                'password' => '$2y$10$qe0NvMkirRfGiP4Qpeq3n.e2jvg48NVFbsPuQd/Rf9G/GmagjAtzu',
                'remember_token' => 'iIVTyMyCxGNDKeh4SgvWJlMTgvQpk1prtWue4w1EnwMe8nATiVspyig5irnB',
                'activation_token' => NULL,
                'created_at' => '2017-03-02 16:26:53',
                'updated_at' => '2017-03-02 16:29:03',
                'activated_at' => '2017-03-02 16:29:03',
            ),
        ));
    }
}
