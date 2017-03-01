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
                'remember_token' => 'oR7H21vKVnzbcek7fBM7hcYKfvy9Zspvigqtj4n25lyzeQ3x7SiHGzthKJH4',
                'activation_token' => NULL,
                'created_at' => '2017-02-09 00:30:59',
                'updated_at' => '2017-02-27 23:06:30',
                'activated_at' => '2017-02-09 00:32:10',
            ),
        ));
    }
}
