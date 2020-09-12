@extends('layout.app')

@section('title')
  Crea Album
@endsection

@section('main_content')
  <form action="{{ route('album.store') }}" method="post">
    @csrf
    @method('POST')

    <div>
      <label>Titilo Album: </label>
      <input type="text" name="title" value="{{ old('title') }}" placeholder="title">
    </div>

    <div>
      @foreach ($artists as $artist)
        <div>
          <input type="checkbox" name="artists[]" value="{{ $artist->id }}">
          <label>{{ $artist->name }}</label>
        </div>
      @endforeach
      {{-- <input type="text" name="name" value="{{ old('name') }}" placeholder="name"> --}}
    </div>

    <div>
      <label>Anno: </label>
      <input type="text" name="year" value="{{ old('year') }}" placeholder="year">
    </div>

    <div>
      {{-- <input type="text" name="name" value="{{ old('name') }}" placeholder="name"> --}}
    </div>

    <div>
      <input type="submit" value="Crea">
    </div>
  </form>

  <div>
    <a href="">Torna indietro</a>
  </div>
  <br>
  <div>
    <a href="{{ route('album.index') }}">Home</a>
  </div>
@endsection
