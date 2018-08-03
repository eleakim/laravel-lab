<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'name' => 'default',
            'slug' => 'default'
        ]);

        DB::table('categories')->insert([
            'name' => 'Sem categoria',
            'slug' => 'sem-categoria'
        ]);

        DB::table('posts')->insert([
            'user_id' => '1',
            'title' => 'Olá mundo!',
            'slug' => 'ola-mundo',
            'excerpt' => 'Seja bem vindo ao nosso framweork',
            'content' => 'Seja bem vindo ao nosso framework'
        ]);

        DB::table('category_post')->insert([
            'post_id' => '1',
            'category_id' => '1'
        ]);

        DB::table('post_tag')->insert([
            'post_id' => '1',
            'tag_id' => '1'
        ]);
    }
}
