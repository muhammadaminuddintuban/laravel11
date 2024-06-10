<?php 

namespace App\Models;

use Illuminate\Support\Arr;

class post
{
    public static function all()
    {
        return [
            [
                'id' => '1',
                'slug' => 'Judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Muhammad Aminuddin',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam similique, voluptas exercitationem unde commodi in ipsa molestiae, fuga, dolorem dolorum optio. Fugit id facere, quidem dolorem officiis ea pariatur natus.'
            ],
            [
                'id'    => '2',
                'slug' => 'Judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Muhammad Aminuddin',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis debitis dicta magnam? Numquam hic ex veritatis nihil repudiandae ipsam dolore beatae similique dignissimos corrupti et consequatur labore, temporibus iste vitae?.'
            ]
            ];
    }

    public static function find($slug){

        // Callback Function
        // return Arr::first(static::all(), function($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        // Aerofunction
        return Arr::first(static::all(), fn ($post) => $post ['slug'] == $slug);
    }
}

?>