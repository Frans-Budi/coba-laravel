<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Frans Budi Kashira",
        "email" => "fransbudikashira@gmail.com",
        "image" => "frans.JPG"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae quos nostrum, alias cum temporibus minima libero earum ducimus laudantium iure quas sapiente quia laborum optio ullam quam nemo id! Delectus ullam dignissimos doloremque? Eum voluptates similique harum, earum magnam omnis numquam, reiciendis veritatis qui iusto sed magni ipsum! Nostrum quia, adipisci quis soluta, eveniet veritatis beatae possimus aspernatur, molestias expedita modi at dolore ab qui sequi. Fugit non tempore rem veniam ab sed magni laboriosam qui veritatis rerum. Soluta, aut!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Doddy Ferdiansyah",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. At id inventore quos harum, ea eveniet repudiandae odio optio ducimus quibusdam numquam iure eaque rerum voluptas modi soluta accusantium similique adipisci! Laboriosam consectetur quaerat tempore, ut at minus impedit corporis non dolorum laudantium vel quisquam dignissimos, voluptatum suscipit doloribus culpa assumenda. Voluptatum obcaecati quisquam, velit ipsum accusamus officiis aut fugit minima iusto nesciunt nisi, rerum, perspiciatis atque quo cumque repellendus vel. Vel eius laborum laboriosam dolor facilis, cum minima eum quaerat temporibus reprehenderit nesciunt eligendi nulla debitis ipsam! Quia, natus rerum eius assumenda, enim eaque accusantium dignissimos porro maiores et animi?"
        ],
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts,
    ]);
});


// halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae quos nostrum, alias cum temporibus minima libero earum ducimus laudantium iure quas sapiente quia laborum optio ullam quam nemo id! Delectus ullam dignissimos doloremque? Eum voluptates similique harum, earum magnam omnis numquam, reiciendis veritatis qui iusto sed magni ipsum! Nostrum quia, adipisci quis soluta, eveniet veritatis beatae possimus aspernatur, molestias expedita modi at dolore ab qui sequi. Fugit non tempore rem veniam ab sed magni laboriosam qui veritatis rerum. Soluta, aut!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Doddy Ferdiansyah",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. At id inventore quos harum, ea eveniet repudiandae odio optio ducimus quibusdam numquam iure eaque rerum voluptas modi soluta accusantium similique adipisci! Laboriosam consectetur quaerat tempore, ut at minus impedit corporis non dolorum laudantium vel quisquam dignissimos, voluptatum suscipit doloribus culpa assumenda. Voluptatum obcaecati quisquam, velit ipsum accusamus officiis aut fugit minima iusto nesciunt nisi, rerum, perspiciatis atque quo cumque repellendus vel. Vel eius laborum laboriosam dolor facilis, cum minima eum quaerat temporibus reprehenderit nesciunt eligendi nulla debitis ipsam! Quia, natus rerum eius assumenda, enim eaque accusantium dignissimos porro maiores et animi?"
        ],
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post,
    ]);
});
