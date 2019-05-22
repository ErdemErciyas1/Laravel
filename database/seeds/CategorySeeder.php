<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new \App\Category([
            'name' => 'Pants'
        ]);
        $category->save();

        $category = new \App\Category([
            'name' => 'Jacket'
        ]);
        $category->save();

        
        $category = new \App\Category([
            'name' => 'Suit'
        ]);
        $category->save();

        
        $category = new \App\Category([
            'name' => 'Shoes'
        ]);
        $category->save();

        
        $category = new \App\Category([
            'name' => 'Cap'
        ]);
        $category->save();



    }
}
