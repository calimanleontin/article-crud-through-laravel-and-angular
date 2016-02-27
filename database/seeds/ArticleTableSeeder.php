<?php

use App\Article;
use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('article')->delete();

        Article::create(array(
            'author' =>'leontin',
            'content' => 'ceva jmecher',
            'title' => 'titlu nou',
            'slug' => 'titlu-nou',
            'visitors' => 12
        ));

        Article::create(array(
            'author' =>'leontin',
            'content' => 'ceva jmecher',
            'title' => 'titlu nou',
            'slug' => 'titlu-nou',
            'visitors' => 12
        ));

        Article::create(array(
            'author' =>'leontin',
            'content' => 'ceva jmecher',
            'title' => 'titlu nou',
            'slug' => 'titlu-nou',
            'visitors' => 12
        ));

        Article::create(array(
            'author' =>'leontin',
            'content' => 'ceva jmecher',
            'title' => 'titlu nou',
            'slug' => 'titlu-nou',
            'visitors' => 12
        ));

        Article::create(array(
            'author' =>'leontin',
            'content' => 'ceva jmecher',
            'title' => 'titlu nou',
            'slug' => 'titlu-nou',
            'visitors' => 12
        ));
    }
}