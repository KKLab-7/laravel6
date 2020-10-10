<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [['summer_clothes1.jpg','サロンペット',6000,2,7],
                      ['summer_clothes2.jpg','ワンピース',12980,4,5],
                      ['summer_clothes3.jpg','ワンピース',9980,1,5],
                      ['summer_clothes4.jpg','サロンペット',8000,7,7],
                      ['summer_clothes5.jpg','マーメイドスカート',7980,8,9],
                      ['summer_clothes6.jpg','ティアード・スカート',13500,3,9],
                      ['summer_clothes7.jpg','ストライプ',8980,9,6],
                      ['summer_clothes8.jpg','ストレートパンツ',9980,10,7],
                      ['summer_clothes9.jpg','ワイドパンツ',15980,6,7],
                      ['summer_clothes10.jpg','ギャザースカート',9980,5,9],
                    ];

        foreach ($products as $product) {
            DB::table('products')->insert([
                'img' => $product[0],
                'name' => $product[1],
                'cost' => $product[2],
                'ranking' => $product[3],
                'item_id' => $product[4],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
