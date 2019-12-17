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
			'name'=>'insaf',
			'photo'=>'user2.jpg',
			'phone'=>'54698725',
            'email'=>'insaf@insaf',
            'password'=>bcrypt('12345'),
	         
		]);
    }
}
