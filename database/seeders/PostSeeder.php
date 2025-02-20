<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        foreach ($users as $user) {
            $imageNumbers = range(1, 10);
            shuffle($imageNumbers);
            $imageNumbers = array_slice($imageNumbers, 0, 3);
            foreach ($imageNumbers as $imageNumber) {
                Post::create([
                    'image_path' => "/rooms/room_{$imageNumber}.jpg",
                    'caption' => 'MY ROOM🏠',
                    'user_id' => $user->id,
                ]);
            }
        }
    }
}
