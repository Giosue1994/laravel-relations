@extends('layout.app')

@section('title')
  Lista Album
@endsection

@section('main_content')
<section id="album">
  <div class="album-list">

    <ul class="album-box">
      @foreach ($albums as $album)
        <li class="single-album">
          <h2>{{ $album->title }}</h2>
          <div class="border">
            <a href="{{ route('album.show', $album) }}">
              <img src="{{ $album->covers->url }}" alt="{{ $album->title }}">
            </a>
          </div>
        </li>
      @endforeach
    </ul>

  </div>
</section>
@endsection
