@extends('layout.app')

@section('title')
  Modifica Album
@endsection

@section('main_content')
  <form action="{{ route('album.update', $album) }}" method="post">
    @csrf
    @method('PUT')

    <div>
      <label>Titilo Album: </label>
      <input type="text" name="title" value="{{ $album->title }}">
    </div>

    <div>
      <label>Cover: </label>
      <input type="text" name="cover" value="{{ $album->covers->url }}">
    </div>

    <div>
      <label>Anno: </label>
      <input type="text" name="year" value="{{ $album->year }}">
    </div>

    <div>
      <input type="submit" value="Salva">
    </div>
  </form>
@endsection
