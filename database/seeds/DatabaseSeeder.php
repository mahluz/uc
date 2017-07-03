<?php

use Illuminate\Database\Seeder;
use App\role;

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
    }
}
