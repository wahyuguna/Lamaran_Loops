<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\comments as comment;

class comments extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            [
                'id' => '1',
                'post_id' => '1',
                'name' => 'wahyu2',
                'email' => 'wahyu2@gmail.com',
                'website' => 'wahyu2.com',
                'comment' => 'Keren_wahyu2',
		        'created_at' => Carbon::now(),
		        'updated_at' => Carbon::now()
            ],
            [
                'id' => '2',
                'post_id' => '1',
                'name' => 'wahyu3',
                'email' => 'wahyu3@gmail.com',
                'website' => 'wahyu3.com',
                'comment' => 'Keren_wahyu3',
		        'created_at' => Carbon::now(),
		        'updated_at' => Carbon::now()
            ],
            [
                'id' => '3',
                'post_id' => '2',
                'name' => 'wahyu1',
                'email' => 'wahyu1@gmail.com',
                'website' => 'wahyu1.com',
                'comment' => 'Keren1',
		        'created_at' => Carbon::now(),
		        'updated_at' => Carbon::now()
            ],
		]);

        factory(comment::class, 2)->create();
    }
}
