@extends('layout.app')

@section('title')
  Lista Album
@endsection

@section('main_content')
  <ul>
    @foreach ($albums as $album)
      <li>
        <span>Nome Album: {{ $album->title }}</span>
        <div>
          <img src="{{ $album->covers->url }}" alt="{{ $album->title }}">
        </div>
        <br>
        <a href="{{ route('album.show', $album) }}">Mostra dettagli</a>
      </li>
      <br>
    @endforeach
  </ul>
@endsection
