@extends('layout.app')

@section('title')
  {{ $album->title }}
@endsection

@section('main_content')
  <h1>Titolo Album: {{ $album->title }}</h1>
  <div>
    <img src="{{ $album->covers->url }}" alt="{{ $album->title }}">
  </div>
  <p>
    Artisti:
    @foreach ($album->artists as $artist)
      <p>{{ $artist->name }}</p>
    @endforeach
  </p>
  <p>Anno: {{ $album->year }}</p>

  <h2>Lista Canzoni</h2>
  <ul>
    @foreach ($album->songs as $song)
      <li>
        <h3>{{ $song->title }}</h3>
        <span>Genere:{{ $song->genre }}</span>
        <br>
      </li>
    @endforeach
  </ul>

  <div>
    <a href="{{ route('album.edit', $album) }}">Modifica</a>
  </div>
  <br>
  <div>
    <a href="{{ route('album.index') }}">Home</a>
  </div>
@endsection
