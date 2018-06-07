<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'title' => str_random(10),
            'author' => str_random(10),
            'article' => str_random(10),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
