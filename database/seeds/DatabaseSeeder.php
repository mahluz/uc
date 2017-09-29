<?php

use Illuminate\Database\Seeder;
use App\role;
use App\Layout;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        role::create([
        	"role"=>"admin"
        	]);
        User::create([
            'name' => "Eka",
            'email' => "eka@gmail.com",
            'role_id'=> 1,
            'password' => bcrypt("eka123"),
        ]);

    }
}
