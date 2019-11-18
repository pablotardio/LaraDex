<?php

use Illuminate\Database\Seeder;
use LaraDex\Role;
use LaraDex\User; 
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //cargar los roles
        $role_user= Role::where('name','user')->first();
        $role_admin=Role::where('name','admin')->first();
        //
        $user=new User();
        $user->name="User";
        $user->email="user@gmail.com";
        $user->password=bcrypt('query');
        $user->save();
        $user->roles()->attach($role_user);

        $user=new User();
        $user->name="Admin";
        $user->email="admin@gmail.com";
        $user->password=bcrypt('query');
        $user->save();
        $user->roles()->attach($role_admin);
    }
}
