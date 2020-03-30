<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\posts as post;

class posts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'id' => '1',
                'user_id' => '1',
                'title' => 'Test Coding Laravel Loops',
                'slug' => Str::slug('Test Coding Laravel Loops', '-'),
                'content' => 'Test Coding Laravel Loops Untuk Masuk ke dalam team programing',
		        'created_at' => Carbon::now(),
		        'updated_at' => Carbon::now()
            ],
            [
                'id' => '2',
                'user_id' => '2',
                'title' => 'Test Coding Python Loops',
                'slug' => Str::slug('Test Coding Python Loops', '-'),
                'content' => 'Test Coding Python Loops Untuk Masuk ke dalam team programing',
		        'created_at' => Carbon::now(),
		        'updated_at' => Carbon::now()
            ]
		]);

        factory(post::class, 2)->create();
    }
}
