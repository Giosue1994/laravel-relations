<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Song;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 10; $i++) {

        for ($j=0; $j < 15; $j++) {
          $new_song = new Song();
          $new_song->title = $faker->sentence(2);
          $new_song->genre = $faker->randomElement([
            'pop',
            'jazz',
            'rock',
            'blues',
            'country',
            'reggae',
            'classic',
            'rap',
            'metal',
            'emo',
            'indie',
          ]);
          $new_song->album_id = $i + 1;
          $new_song->save();
        }

      }
    }
}
