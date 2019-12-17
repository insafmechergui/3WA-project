<?php

use Illuminate\Database\Seeder;
use App\Modules\User\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
        	'name'=>'cyrina',
        	'email'=>'cyrina@cyrina',
            'password'=>bcrypt('12345'),
            'role_id'=>'1',

        ]);
    }
}
