<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Generator as Faker;
use App\Album;
use App\Artist;
use App\Song;
use App\Cover;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::all();

        return view('album.index', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $artists = Artist::all();

      return view('album.create', compact('artists'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Faker $faker)
    {
        $data = $request->all();

        $new_album = new Album();
        $new_album->title = $data['title'];
        $new_album->year = $data['year'];
        $new_album->save();

        if (isset($data['artists'])) {
          $new_album->artists()->sync($data['artists']);
        }

        // $new_song = new Song();
        // $new_song->title = $data['title'];
        // $new_song->genre = $data['genre'];
        // $new_song->album_id = $new_album->id;
        // $new_song->save();

        $new_cover = new Cover();
        $new_cover->url = $faker->imageUrl(200, 200);
        $new_cover->album_id = $new_album->id;
        $new_cover->save();


        return redirect()->route('album.show', $new_album);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
        return view('album.show', compact('album'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {
        $artists = Artist::all();
        $songs = Song::all();

        return view('album.edit', [
          'album' => $album,
          'artists' => $artists,
          'songs' => $songs,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Album $album)
    {
        $data = $request->all();

        if (isset($data['artists'])) {
          $album->artists()->sync($data['artists']);
        } else {
          $album->artists()->detach();
        }

        $album->update($data);

        return redirect()->route('album.show', $album);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
