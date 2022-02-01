<?php

namespace App\Models;


class Product
{
    private static $post_products = [
        [
            "title" => "Judul Product 1",
            "slug" => "judul-product-1",
            "author" => 'Muhamad Ihwan',
            "body" => "Isi keterangan product pertama"
        ],
        [
            "title" => "Judul Product 2",
            "slug" => "judul-product-2",
            "author" => 'Muhamad Ihwan',
            "body" => "Isi keterangan product kedua"
        ],
        [
            "title" => "Judul Product 3",
            "slug" => "judul-product-3",
            "author" => 'Muhamad Ihwan',
            "body" => "Isi keterangan product ketiga"
        ],
        [
            "title" => "Judul Product 4",
            "slug" => "judul-product-4",
            "author" => 'Muhamad Ihwan',
            "body" => "Isi keterangan product keempat"
        ],
        [
            "title" => "Judul Product 5",
            "slug" => "judul-product-5",
            "author" => 'Muhamad Ihwan',
            "body" => "Isi keterangan product kelima"
        ]
    ];
    public static function all()
    {
        return collect(self::$post_products);
    }

    public static function find($slug)
    {
        $products = static::all();

        return $products->firstWhere('slug', $slug);
    }







    private static $categories = [
        [
            "name" => "Video Tutorial",
            "jumlah" => '14'
        ],
        [
            "name" => "Ebook Tutorial",
            "jumlah" => '2'
        ],
        [
            "name" => "Source Code",
            "jumlah" => '1'
        ],
        [
            "name" => "Template Website",
            "jumlah" => '15'
        ]
    ];
    public static function categories()
    {
        return self::$categories;
    }
}
