<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $limit = 30;
        $faker = \Faker\Factory::create();

        for ($i=0; $i < $limit; $i++) {
            \App\Product::insert(array(
                array(
                    'name'                      => $faker->name,
                    'description'               => $faker->paragraph,
                    'price'                     => 100000,
                    'image_id'                  => rand(1,8),
                    'file_id'                   => rand(1,8),
                ),
            ));
        }
    }
}
