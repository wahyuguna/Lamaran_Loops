<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\User;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => '1',
                'name' => 'wahyu1',
                'email' => 'wahyu1@gmail.com',
                'password' => bcrypt('12345678'),
		        'created_at' => Carbon::now(),
		        'updated_at' => Carbon::now()
            ],
             [
                'id' => '2',
                'name' => 'wahyu2',
                'email' => 'wahyu2@gmail.com',
                'password' => bcrypt('12345678'),
		        'created_at' => Carbon::now(),
		        'updated_at' => Carbon::now()
            ],
             [
                'id' => '3',
                'name' => 'wahyu3',
                'email' => 'wahyu3@gmail.com',
                'password' => bcrypt('12345678'),
		        'created_at' => Carbon::now(),
		        'updated_at' => Carbon::now()
            ],
		]);

        factory(User::class, 2)->create();
    }
}
