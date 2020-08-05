<?php

use Illuminate\Database\Seeder;

class categoryseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\Category::insert([
	        	['name'=>'History'],
	        	['name'=>'Design'],
	        	['name'=>'Programming'],
	        	['name'=>'Networking'],
	        	['name'=>'Database'],
	        	['name'=>'Multimedia'],
        	]);
    }
}
