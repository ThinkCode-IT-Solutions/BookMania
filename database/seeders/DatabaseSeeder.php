<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\BookImage;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // factory wala tareeka
        User::factory()->count(6)->create();
        Book::factory()->count(10)->create();



        // direct tareeka
        Book::factory()->create([
            'name' => "The Atomic Habit",
            'slug' => 'the-atomic-habit',
            'aurthor_name' => 'James Clear',
            'description' => 'How to build good habit and how to get rid of bad ones',
            'pages' => '300',
            'price' => '449',
            'is_active' => true,
        ]);
        Book::factory()->create([
            'name' => "The Psychology of Money",
        ]);
        Book::factory()->create([
            'name' => "Rich Dad Poor Dad",
        ]);
        Book::factory()->create([
            'name' => "The Subtle Art of Not Giving a F*ck",
        ]);
        BookImage::factory()->count(100)->create();

        $this->call([
            ProductSeeder::class,

        ]);
    }
}
