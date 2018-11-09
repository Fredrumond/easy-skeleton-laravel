<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info("Insert user ADMINISTRADOR");
        User::create([
        	'name' => 'Administrador',
            'username' => 'admin',
        	'email' => 'admin@admin.com',
        	'password' => bcrypt('123456'),
            'group_id' => '1',
        ]);
        $this->command->info("--------------------");
    }
}
