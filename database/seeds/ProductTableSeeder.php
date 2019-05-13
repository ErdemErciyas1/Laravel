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
        $product = new \App\Product([
            'imagePath' => 'card-img-top" src="https://mosaic03.ztat.net/vgs/media/article-image-mhq/TP/82/2G/0A/PK/11/TP822G0AP-K11@4.jpg?imwidth=1524',
            'title' => 'Armani Jeans',
            'description' => 'the Armani Jeans are comfortable and last a long time due to the quality',
            'price' => 70
        ]);
        $product->save();
        
        $product = new \App\Product([
            'imagePath' => 'card-img-top" src="https://mosaic03.ztat.net/vgs/media/article-image-mhq/JA/22/2T/0C/BQ/11/JA222T0CB-Q11@12.jpg?imwidth=1524',
            'title' => 'Stone Island Jacket',
            'description' => 'the Stone Island Jacket will keep you warm thanks to a special edition',
            'price' => 100
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'card-img-top" src="https://images.express.com/is/image/expressfashion/0039_03251768_0920?cache=on&wid=361&fmt=jpeg&qlt=75,1&resmode=sharp2&op_usm=1,1,5,0&defaultImage=Photo-Coming-Soon',
            'title' => 'Iceberg Suit',
            'description' => 'business suit provides a serious look',
            'price' => 500
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'card-img-top" src="http://www.makhanlall.com/images/zM9PgeWY0Cuu/adidas-cotton-yeezy-shoes-62BR_3.jpg',
            'title' => 'Adidas Shoes',
            'description' => 'The shoes are made of cotton',
            'price' => 80
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'card-img-top" src="https://www.hatsandcaps.co.uk/images/products/large/203305.jpg',
            'title' => 'Nike Cap',
            'description' => 'The original Nike cap has good quality',
            'price' => 15
        ]);
        $product->save();
    }
}
