<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Surgefile',
            'email' => 'surgefile@gmail.com',
            'password' => bcrypt('surgefile'),
            'role_id' => '1',
        ]);
        $role = Role::create([
            'name' => 'admin',
            'description' => 'App Uploader',
            'role_id'=>'2'
        ]);
    }
}
