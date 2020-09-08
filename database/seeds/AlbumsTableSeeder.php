<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Album;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 3; $i++) {
          $new_album = new Album();
          $new_album->title = $faker->word;
          $new_album->artist = $faker->name;
          $new_album->year = $faker->year();
          $new_album->save();
        }
    }
}
