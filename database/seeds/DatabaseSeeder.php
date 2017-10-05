<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $postQuantity = 100;
        $commentQuantity = 1000;
        factory(App\Post::class, $postQuantity)->create();
        factory(App\Comment::class, $commentQuantity)->create()->each(function ($comment) use ($postQuantity) {
            $comment->update([
                'user_id'   =>  rand(1, $postQuantity - 1),
                'post_id'   =>  rand(1, $postQuantity - 1)
            ]);
        });
    }
}
