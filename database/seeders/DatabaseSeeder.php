<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $tags = [
            "Ascenseur",
            "Poubelles individuelles",
            "Piscine",
            "Accès PMR",
            "Test",
            "BAL intérieure",
            "Portail électrique",
            "poiupoiupoiu",
            "tag tag tag"
        ];

        foreach ($tags as $tag) {
            Tag::create(['name' => $tag]);
        }
    }
}
