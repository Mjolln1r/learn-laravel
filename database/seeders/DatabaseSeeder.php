<?php

namespace Database\Seeders {

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use App\Models\Category;
    use App\Models\Post;
    use App\Models\Tag;
    use Illuminate\Database\Seeder;

    class DatabaseSeeder extends Seeder
    {
        /**
         * Seed the application's database.
         */
        public function run(): void
        {
            Category::factory(20)->create();
            Tag::factory(40)->create();
            Post::factory(100)->create();

            }
        }
}
