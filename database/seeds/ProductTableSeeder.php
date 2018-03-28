<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $product = new \App\Product([
            'imagePath'     => 'https://images.fireside.fm/podcasts/images/b/bc7f1faf-8aad-4135-bb12-83a8af679756/cover_medium.jpg',
            'title'         => 'Hussein',
            'description'   => 'test text',
            'price'         => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'     => 'https://images.fireside.fm/podcasts/images/b/bc7f1faf-8aad-4135-bb12-83a8af679756/cover_medium.jpg',
            'title'         => 'Hussein2',
            'description'   => 'test text2',
            'price'         => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'     => 'https://images.fireside.fm/podcasts/images/b/bc7f1faf-8aad-4135-bb12-83a8af679756/cover_medium.jpg',
            'title'         => 'Hussein3',
            'description'   => 'test text3',
            'price'         => 10
        ]);
        $product->save();
    }
}
