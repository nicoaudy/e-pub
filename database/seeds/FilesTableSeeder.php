<?php

use Illuminate\Database\Seeder;

class FilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $limit = 8;

        for ($i=0; $i < $limit; $i++) {
            \App\File::insert(array(
                array(
                    'filename'                  => 'phpF7D6.tmp.pdf',
                    'mime'                      => 'application/pdf',
                    'original_filename'         => 'build-a-javascript-framework.pdf',
                    'image_name'                => rand(1,6).'.png',
                    'image_path'                => 'img/products/',
                    'image_mime'                => 'png',
                    'image_original_filename'   => 'NULL',
                ),
            ));
        }
    }
}
