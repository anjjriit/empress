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
            1 => 
            array (
                'id' => 2,
                'name' => 'access_users',
                'display_name' => 'Access Users',
                'description' => 'Permission for viewing users.',
                'created_at' => '2017-03-03 00:40:15',
                'updated_at' => '2017-03-03 00:40:15',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'create_users',
                'display_name' => 'Create Users',
                'description' => 'Permission to create new users.',
                'created_at' => '2017-03-03 00:41:04',
                'updated_at' => '2017-03-03 00:41:04',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'edit_users',
                'display_name' => 'Edit Users',
                'description' => 'Permission to edit users.',
                'created_at' => '2017-03-03 00:41:47',
                'updated_at' => '2017-03-03 00:41:47',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'delete_users',
                'display_name' => 'Delete Users',
                'description' => 'Permission to delete users.',
                'created_at' => '2017-03-03 00:42:24',
                'updated_at' => '2017-03-03 00:42:24',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'access_roles',
                'display_name' => 'Access Roles',
                'description' => 'Permission to access roles.',
                'created_at' => '2017-03-03 00:43:12',
                'updated_at' => '2017-03-03 00:43:12',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'create_roles',
                'display_name' => 'Create Roles',
                'description' => 'Permission to create roles.',
                'created_at' => '2017-03-03 00:44:21',
                'updated_at' => '2017-03-03 00:44:21',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'edit_roles',
                'display_name' => 'Edit Roles',
                'description' => 'Permission to edit roles.',
                'created_at' => '2017-03-03 00:44:51',
                'updated_at' => '2017-03-03 00:44:51',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'delete_roles',
                'display_name' => 'Delete Roles',
                'description' => 'Permission to delete roles.',
                'created_at' => '2017-03-03 00:45:38',
                'updated_at' => '2017-03-03 00:45:38',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'access_permissions',
                'display_name' => 'Access Permissions',
                'description' => 'Permission to access permissions.',
                'created_at' => '2017-03-03 00:46:27',
                'updated_at' => '2017-03-03 00:46:27',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'create_permissions',
                'display_name' => 'Create Permissions',
                'description' => 'Permission for creating permissions.',
                'created_at' => '2017-03-03 00:47:05',
                'updated_at' => '2017-03-03 00:47:05',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'edit_permissions',
                'display_name' => 'Edit Permissions',
                'description' => 'Permission for editing permissions.',
                'created_at' => '2017-03-03 00:47:37',
                'updated_at' => '2017-03-03 00:47:37',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'delete_permissions',
                'display_name' => 'Delete Permissions',
                'description' => 'Permission for deleting permissions.',
                'created_at' => '2017-03-03 00:48:12',
                'updated_at' => '2017-03-03 00:48:12',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'access_pages',
                'display_name' => 'Access Pages',
                'description' => 'Permission to access pages.',
                'created_at' => '2017-03-03 00:49:39',
                'updated_at' => '2017-03-03 00:49:39',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'create_pages',
                'display_name' => 'Create Pages',
                'description' => 'Permission for creating pages.',
                'created_at' => '2017-03-03 00:50:22',
                'updated_at' => '2017-03-03 00:50:22',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'edit_pages',
                'display_name' => 'Edit Pages',
                'description' => 'Permission for editing pages.',
                'created_at' => '2017-03-03 00:50:52',
                'updated_at' => '2017-03-03 00:50:52',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'delete_pages',
                'display_name' => 'Delete Pages',
                'description' => 'Permission for deleting pages.',
                'created_at' => '2017-03-03 00:51:51',
                'updated_at' => '2017-03-03 00:51:51',
            ),
        ));        
    }
}
