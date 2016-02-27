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
        ));

        Article::create(array(
            'author' =>'leontin',
            'content' => 'ceva jmecher',
        ));

        Article::create(array(
            'author' =>'leontin',
            'content' => 'ceva jmecher',
        ));

        Article::create(array(
            'author' =>'leontin',
            'content' => 'ceva jmecher',
        ));

        Article::create(array(
            'author' =>'leontin',
            'content' => 'ceva jmecher',
        ));
    }
}