<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Blog;
use App\Models\Event;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Event::factory(10)->create();
        Blog::factory(10)->create();
        DB::table('tags')->insert([
            'tag' => 'Popular',
        ]);
        DB::table('tags')->insert([
            'tag' => 'Climates',
        ]);
        DB::table('tags')->insert([
            'tag' => 'Animal',
        ]);
        DB::table('tags')->insert([
            'tag'=> 'Trash',
        ]);
    }
}
