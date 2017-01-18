<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new App\Role();
        $role->role_name= 'User';
        $role->role_description = 'A Normal user';
        $role->save();

        $role = new App\Role();
        $role->role_name= 'Admin';
        $role->role_description = 'A Super user';
        $role->save();
    }
}
