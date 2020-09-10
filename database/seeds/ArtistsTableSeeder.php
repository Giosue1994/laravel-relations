<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Artist;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50 ; $i++) {
          $new_artist = new Artist();
          $new_artist->name = $faker->name;
          $new_artist->year = $faker->numberBetween(5, 99);
          $new_artist->biography = $faker->realText(1000);
          $new_artist->save();
        }
    }
}
