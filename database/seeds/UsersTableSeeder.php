<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = \App\Role::where('role_name', 'User')->first();
        $role_admin = \App\Role::where('role_name', 'Admin')->first();

        $user = new User();
        $user->name = 'Pras';
        $user->username = 'pras';
        $user->email = 'admin@app.com';
        $user->password = bcrypt('admin');
        $user->save();
        $user->roles()->attach($role_admin);


        $user = new User();
        $user->name = 'Visitor';
        $user->username = 'user';
        $user->email = 'user@app.com';
        $user->password = bcrypt('user');
        $user->save();
        $user->roles()->attach($role_user);

    }
}
