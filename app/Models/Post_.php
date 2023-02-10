<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
