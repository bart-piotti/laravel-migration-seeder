<?php

use Illuminate\Database\Seeder;
use App\Product;
use Faker\Generator as Faker;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $products_array = config('products');
        foreach ($products_array as $product) {
            $newProduct = new Product();
            $newProduct->product_code = $product['product_code'];
            $newProduct->brand = $product['brand'];
            $newProduct->seller_name = $product['seller_name'];
            $newProduct->seller_lastname = $product['seller_lastname'];
            $newProduct->price = $product['price'];
            $newProduct->save();
        }

        for ($i=0; $i < 10; $i++) {
            $newProduct = new Product();
            $newProduct->product_code = $faker->randomNumber($nbDigits = 8, $strict = false);
            $newProduct->brand = $faker->company;
            $newProduct->seller_name = $faker->firstname;
            $newProduct->seller_lastname = $faker->lastname;
            $newProduct->price = $faker->numberBetween($min = 10, $max = 1000);
            $newProduct->save();
        }
    }
}
