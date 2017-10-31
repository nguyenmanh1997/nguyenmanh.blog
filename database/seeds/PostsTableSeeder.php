<?php

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->truncate();

        $faker = Faker\Factory::create();

        for ($i=0; $i < 50; $i++) { 
        	Post::create([
        		'title' => $faker->text($maxNbChars = 255),
        		'thumbnail' => $faker->imageUrl($width = 640, $height = 480),
        		'description' => $faker->text($maxNbChars = 500),
        		'content' => $faker->text($maxNbChars = 10000),
        		'slug' =>$faker->slug(),
        		'user_id' => array_random([1,2,3,4,5,6,7,8,9,10]),
        		'category_id' => array_random([1,2,3,4]),
        	]);
        }
    }
}