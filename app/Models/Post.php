<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
        [
            "title" => "Post Pertama",
            "slug" => "post-pertama",
            "author" => "Dwi saka pangestu",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis expedita magni fuga. Maiores eligendi asperiores ipsa sunt iste nam similique, laboriosam enim quis sit laudantium ullam sint consequuntur molestias cum, soluta fuga illo ex aliquid voluptatem aliquam, sapiente nobis dolorem nihil! Impedit, dolore asperiores doloremque quos enim ducimus nam corporis, vitae reiciendis molestiae voluptatum vero beatae qui officiis cupiditate iusto fugiat repudiandae nulla nemo! Perferendis sed qui neque laborum atque dolor nisi id, assumenda ipsa beatae dolore. Laborum, sint alias?"
        ],
    
        [
            "title" => "Post Kedua",
            "slug" => "post-kedua",
            "author" => "Saka",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis beatae non nulla pariatur magni et, animi earum unde quidem fugit ex sint? Est natus placeat quis deleniti omnis perspiciatis, nisi voluptatum, harum aliquid corrupti maxime quo obcaecati ex quisquam odio illum tempora exercitationem. Vitae soluta illum deleniti itaque, consequatur sed consectetur excepturi iste earum aspernatur provident voluptatem nemo temporibus nam facere possimus magni rerum beatae et, aliquam laborum nisi quisquam obcaecati aut? Dolor earum similique iure quibusdam facere qui explicabo repellat quod ipsum distinctio, assumenda sed omnis, vel nulla aliquid sequi? Optio adipisci repudiandae culpa a nostrum, est nam pariatur?"
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
