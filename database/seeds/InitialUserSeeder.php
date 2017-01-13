<?php

use Illuminate\Database\Seeder;
use \App\User;
use \App\Role;
use \App\Permission;

class InitialUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('roles')->delete();
        DB::table('permissions')->delete();

        # superadmin
        DB::table('users')->insert([
            'name' => 'Super Admin',
            'email' => 'supersembako@mailinator.com',
            'password' => bcrypt('123456'),
        ]);

        # admin
        DB::table('users')->insert([
            'name' => 'Admin1',
            'email' => 'admin1sembako@mailinator.com',
            'password' => bcrypt('123456'),
        ]);

        DB::table('users')->insert([
            'name' => 'Admin2',
            'email' => 'admin2sembako@mailinator.com',
            'password' => bcrypt('123456'),
        ]);

        # guest
        DB::table('users')->insert([
            'name' => 'Guest',
            'email' => 'guestsembako@mailinator.com',
            'password' => bcrypt('123456'),
        ]);

        # create role
        $superadmin = new Role();
        $superadmin->name         = 'superadmin';
        $superadmin->display_name = 'Super Administrator';
        $superadmin->description  = 'User is allowed to manage and edit other users';
        $superadmin->save();

        $admin = new Role();
        $admin->name         = 'admin';
        $admin->display_name = 'Administrator';
        $admin->description  = 'User is allowed to access dashboard';
        $admin->save();

        $guest = new Role();
        $guest->name         = 'guest';
        $guest->display_name = 'Guest';
        $guest->description  = 'User is allowed to see public section';
        $guest->save();

        # attach role
        $user_superadmin = User::where('email', '=', 'supersembako@mailinator.com')->first();
        $user_superadmin->attachRole($superadmin);

        $user_admin1 = User::where('email', '=', 'admin1sembako@mailinator.com')->first();
        $user_admin1->attachRole($admin);

        $user_admin2 = User::where('email', '=', 'admin2sembako@mailinator.com')->first();
        $user_admin2->attachRole($admin);

        $user_guest = User::where('email', '=', 'guestsembako@mailinator.com')->first();
        $user_guest->attachRole($guest);

        # create permissions
    }
}
