<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // User::create([
        //     'name' => 'Sandhika Galih',
        //     'email' => 'sandhikagalih@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);

        // User::create([
        //     'name' => 'Doddy Ferdiansyah',
        //     'email' => 'doddy@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, non maxime eaque nulla nihil libero quibusdam sapiente voluptatibus, commodi ipsam nemo, vel perferendis placeat earum',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, non maxime eaque nulla nihil libero quibusdam sapiente voluptatibus, commodi ipsam nemo, vel perferendis placeat earum voluptas labore quos magnam cum adipisci. Iure officiis, officia vel maxime veniam qui sequi libero dolores maiores non? Voluptatem voluptates quisquam dignissimos non unde autem fuga asperiores dolore consequuntur voluptatibus, provident numquam adipisci beatae velit aperiam minus aut iusto accusamus natus fugit consectetur praesentium sequi perferendis quae. Ducimus, impedit obcaecati quis incidunt temporibus quia veniam est corrupti earum accusantium! Voluptate iure vitae labore, sed quas quibusdam quia assumenda a optio ea aut. Voluptatum, in tempora.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, non maxime eaque nulla nihil libero quibusdam sapiente voluptatibus, commodi ipsam nemo, vel perferendis placeat earum',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, non maxime eaque nulla nihil libero quibusdam sapiente voluptatibus, commodi ipsam nemo, vel perferendis placeat earum voluptas labore quos magnam cum adipisci. Iure officiis, officia vel maxime veniam qui sequi libero dolores maiores non? Voluptatem voluptates quisquam dignissimos non unde autem fuga asperiores dolore consequuntur voluptatibus, provident numquam adipisci beatae velit aperiam minus aut iusto accusamus natus fugit consectetur praesentium sequi perferendis quae. Ducimus, impedit obcaecati quis incidunt temporibus quia veniam est corrupti earum accusantium! Voluptate iure vitae labore, sed quas quibusdam quia assumenda a optio ea aut. Voluptatum, in tempora.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, non maxime eaque nulla nihil libero quibusdam sapiente voluptatibus, commodi ipsam nemo, vel perferendis placeat earum',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, non maxime eaque nulla nihil libero quibusdam sapiente voluptatibus, commodi ipsam nemo, vel perferendis placeat earum voluptas labore quos magnam cum adipisci. Iure officiis, officia vel maxime veniam qui sequi libero dolores maiores non? Voluptatem voluptates quisquam dignissimos non unde autem fuga asperiores dolore consequuntur voluptatibus, provident numquam adipisci beatae velit aperiam minus aut iusto accusamus natus fugit consectetur praesentium sequi perferendis quae. Ducimus, impedit obcaecati quis incidunt temporibus quia veniam est corrupti earum accusantium! Voluptate iure vitae labore, sed quas quibusdam quia assumenda a optio ea aut. Voluptatum, in tempora.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, non maxime eaque nulla nihil libero quibusdam sapiente voluptatibus, commodi ipsam nemo, vel perferendis placeat earum',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, non maxime eaque nulla nihil libero quibusdam sapiente voluptatibus, commodi ipsam nemo, vel perferendis placeat earum voluptas labore quos magnam cum adipisci. Iure officiis, officia vel maxime veniam qui sequi libero dolores maiores non? Voluptatem voluptates quisquam dignissimos non unde autem fuga asperiores dolore consequuntur voluptatibus, provident numquam adipisci beatae velit aperiam minus aut iusto accusamus natus fugit consectetur praesentium sequi perferendis quae. Ducimus, impedit obcaecati quis incidunt temporibus quia veniam est corrupti earum accusantium! Voluptate iure vitae labore, sed quas quibusdam quia assumenda a optio ea aut. Voluptatum, in tempora.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
