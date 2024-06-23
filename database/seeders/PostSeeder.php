<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post = new Post();
        $post->title = 'Title 1';
        $post->content = 'Content 1';
        $post->category = 'Category 1';
        $post->published_at = now();
        $post->save();

        $post2 = new Post();
        $post2->title = 'Title 2';
        $post2->content = 'Content 2';
        $post2->category = 'Category 2';
        $post2->published_at = now();
        $post2->save();
    }
}
