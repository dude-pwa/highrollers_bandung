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
        $user = new User();
        $user->name = 'Pras';
        $user->username = 'pras';
        $user->email = 'admin@app.com';
        $user->password = bcrypt('admin');
        $user->save();
    }
}
