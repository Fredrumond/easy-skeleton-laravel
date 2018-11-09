<?php

use Illuminate\Database\Seeder;
use App\Models\UsersGroup;
class GroupUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info("Insert group ADMINISTRADOR");
        UsersGroup::create([
        	'name' => 'Administrador'
        ]);
        $this->command->info("--------------------");
    }
}
