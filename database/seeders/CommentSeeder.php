<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comments = [
            'おしゃれ😍',
            'かっこいい👍',
            'すてき👏',
            '素敵✨',
            'ナイス🙌',
            'いいね👍',
            '👏👏👏',
            '🎉🎉🎉',
            '🍾🍾🍾',
            '🙌🙌🙌',
        ];
        $posts = Post::all();
        $users = User::all();
        foreach ($posts as $post) {
            foreach ($users as $user) {
                Comment::create([
                    'text' => $comments[array_rand($comments)],
                    'user_id' => $user->id,
                    'post_id' => $post->id,
                ]);
            }
        }
    }
}