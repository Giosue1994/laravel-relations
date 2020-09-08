<ul>
  @foreach ($albums as $album)
    <li>
      <span>Titolo Album: {{ $album->title }}</span>
      <div>
        <img src="{{ $album->covers->url }}" alt="{{ $album->title }}">
      </div>
      <br>
      <a href="{{ route('album.show', $album) }}">Mostra dettagli</a>
    </li>
    <br>
  @endforeach
</ul>
