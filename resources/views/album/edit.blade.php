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
      <input type="text" name="title" value="{{ old('title') ? old('title') : $album->title }}" placeholder="title">
    </div>

    <div>
      <label>Cover: </label>
      <input type="text" name="cover" value="{{ old('cover') ? old('cover') : $album->covers->url }}" placeholder="url">
    </div>

    <div>
      @foreach ($artists as $artist)
        <div>
          <input type="checkbox" name="artists[]" {{ $album->artists->contains($artist) ? 'checked' : '' }} value="{{ $artist->id }}">
          <label>{{ $artist->name }}</label>
        </div>
      @endforeach
      {{-- <input type="text" name="name" value="{{ old('name') }}" placeholder="name"> --}}
    </div>

    <div>
      <label>Anno: </label>
      <input type="text" name="year" value="{{ old('year') ? old('year') : $album->year }}" placeholder="year">
    </div>

    <div>
      {{-- <input type="text" name="name" value="{{ old('name') }}" placeholder="name"> --}}
    </div>

    <div>
      <input type="submit" value="Salva">
    </div>
  </form>

  <a href="{{ route('album.show', $album) }}">Torna indietro</a>
@endsection
