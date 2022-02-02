<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            "name" => 'Muhamad Ihwan',
            "email" => 'ihwan@gmail.com',
            "password" => bcrypt('12345')
        ]);

        Category::create([
            "name" => 'Website',
            "slug" => 'website'
        ]);

        Category::create([
            "name" => 'Desain Logo',
            "slug" => 'desain-logo'
        ]);

        Category::create([
            "name" => 'Mobile App',
            "slug" => 'mobile-app'
        ]);

        Category::create([
            "name" => 'SEO',
            "slug" => 'seo'
        ]);

        Product::create([
            "title" => 'Judul Pertama',
            "slug" => 'judul-pertama',
            "excerpt" => 'ipsum, dolor sit amet consectetur adipisicing elit',
            "body" => 'ipsum, dolor sit amet consectetur adipisicing elit In, aperiam recusandae expedita ea animi dicta, consequatur explicabo beatae odit, amet non consequuntur nemo distinctio voluptatem? Corrupti hic atque pariatur doloremque beatae modi reiciendis soluta sapiente, fugit voluptatem sunt incidunt consequuntur accusantium praesentium illo quisquam. Doloribus ipsum quos illum maxime accusamus.>',
            "category_id" => 1,
            "user_id" => 1
        ]);

        Product::create([
            "title" => 'Judul Kedua',
            "slug" => 'judul-ke-dua',
            "excerpt" => 'ipsum, dolor sit amet consectetur adipisicing elit',
            "body" => 'ipsum, dolor sit amet consectetur adipisicing elit In, aperiam recusandae expedita ea animi dicta, consequatur explicabo beatae odit, amet non consequuntur nemo distinctio voluptatem? Corrupti hic atque pariatur doloremque beatae modi reiciendis soluta sapiente, fugit voluptatem sunt incidunt consequuntur accusantium praesentium illo quisquam. Doloribus ipsum quos illum maxime accusamus.>',
            "category_id" => 1,
            "user_id" => 1
        ]);

        Product::create([
            "title" => 'Judul Ketiga',
            "slug" => 'judul-ke-tiga',
            "excerpt" => 'ipsum, dolor sit amet consectetur adipisicing elit',
            "body" => 'ipsum, dolor sit amet consectetur adipisicing elit In, aperiam recusandae expedita ea animi dicta, consequatur explicabo beatae odit, amet non consequuntur nemo distinctio voluptatem? Corrupti hic atque pariatur doloremque beatae modi reiciendis soluta sapiente, fugit voluptatem sunt incidunt consequuntur accusantium praesentium illo quisquam. Doloribus ipsum quos illum maxime accusamus.>',
            "category_id" => 1,
            "user_id" => 1
        ]);
    }
}
