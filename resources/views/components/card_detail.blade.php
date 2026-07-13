
<div class="card h-100">
    <img src="{{ Storage::url($song->img) }}" class="card-img-top card-image-detail mt-3" alt="immagine canzone">

    <div class="card-body text-center">
        <h5 class="card-title fw-bold">{{ $song->name }}</h5>

        <p class="mb-1">
            <span class="fw-semibold text-secondary">Artista:</span>
            <span>{{ $song->artist}}</span>
        </p>

        <p class="mb-1">
            <span class="fw-semibold text-secondary">Album:</span>
            <span>{{ $song->album }}</span>
        </p>

        <p class="mb-0">
            <span class="fw-semibold text-secondary">Voto:</span>
            <span class="badge bg-primary">{{ $song->vote }}</span>
        </p>

        {{-- <a href="{{ route('songs.show', $song) }}" class="btn btn-primary mt-3">Dettagli</a> --}}
    </div>
</div>
