<h1>Titolo Album: {{ $album->title }}</h1>
<div>
  <img src="{{ $album->covers->url }}" alt="{{ $album->title }}">
</div>
<p>Artista: {{ $album->artist }}</p>
<p>Anno: {{ $album->year }}</p>

<h2>Lista Canzoni</h2>
<ul>
  @foreach ($album->songs as $song)
    <li>{{ $song->title }}</li>
  @endforeach
</ul>

<div>
  <a href="{{ route('album.index') }}">Home</a>
</div>
