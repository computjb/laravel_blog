<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //apaga os dados da tabela
    	Post::truncate();

    	factory('App\Post',15)->create();
    }
}
