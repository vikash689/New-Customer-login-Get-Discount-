<?php

use Illuminate\Database\Seeder;

class discountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('discounts')->insert(array(
			 array(
			   'discount' => 10000,
			   'given_time' => 1,
			 ),
			 array(
			   'discount' => 5000,
			   'given_time' => 2,
			 ),
			 array(
			   'discount' => 2000,
			   'given_time' => 4,
			 ),
			 array(
			   'discount' => 1000,
			   'given_time' => 5,
			 ),
			 array(
			   'discount' => 500,
			   'given_time' => 8,
			 ),
			 array(
			   'discount' => 200,
			   'given_time' => 10,
			 ),
			 array(
			   'discount' => 100,
			   'given_time' => 12,
			 ),
			 array(
			   'discount' => 50,
			   'given_time' => 15,
			 ),
		   ));
    }
}
