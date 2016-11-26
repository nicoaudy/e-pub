<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Category::insert(array(
            array(
                'name'  => 'Novel'
            ),
            array(
                'name'  => 'Science'
            ),
            array(
                'name'  => 'Computer Science'
            ),
            array(
                'name'  => 'What Ever'
            ),
        ));
    }
}
