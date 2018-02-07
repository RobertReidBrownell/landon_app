<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	    DB::table('clients')->insert(
	    	[
			    'title' => 'Mr',
			    'name' => 'John',
			    'last_name' => 'Doe',
			    'address' => '123 Fake',
			    'zip_code' => '73045',
			    'city' => 'Tulsa',
			    'state' => 'OK',
			    'email' => 'john@fake.com',
		    ]
	    );
	    DB::table('clients')->insert(
		    [
			    'title' => 'Ms',
			    'name' => 'Jane',
			    'last_name' => 'Doe',
			    'address' => '1234 Fakeer',
			    'zip_code' => '98405',
			    'city' => 'Enid',
			    'state' => 'OK',
			    'email' => 'jane@fake.com',
		    ]
	    );
    }
}
