<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = [
            't.tanaka',
            's.suzuki',
            'i.ito',
            's.sato',
            'h.hayashi',
        ];

        foreach ($names as $name) {
            $imageNumbers = range(1, 10);
            $imageNumber = $imageNumbers[array_rand($imageNumbers)];

            User::factory()->create([
                'name' => $name,
                'email' => "{$name}@example.com",
                'icon' => "/rooms/room_{$imageNumber}.jpg",
                'description' => 'はじめまして。よろしくお願いします。',
            ]);
        }
    }
}
