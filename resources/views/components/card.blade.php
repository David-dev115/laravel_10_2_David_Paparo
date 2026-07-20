
<div class="card h-100">
    <img src="{{ Storage::url($song->img) }}" class="card-img-top card-image mt-3" alt="immagine canzone">

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

        <p class="mb-1">
            <span class="fw-semibold text-secondary">Inserita da:</span>
            <span>{{ $song->user->name }}</span>
        </p>

        <a href="{{ route('songs.show', $song) }}" class="btn btn-primary mt-3">Dettagli</a>
    </div>
</div>



{{-- <div class="card h-100">
    <img src="https://picsum.photos/300/200" class="card-img-top" alt="...">

    <div class="card-body text-center">
        <h5 class="card-title fw-bold">a</h5>

        <p class="mb-1">
            <span class="fw-semibold text-secondary">Artista:</span>
            <span>b</span>
        </p>

        <p class="mb-1">
            <span class="fw-semibold text-secondary">Album:</span>
            <span>c</span>
        </p>

        <p class="mb-0">
            <span class="fw-semibold text-secondary">Voto:</span>
            <span class="badge bg-primary">d</span>
        </p>
    </div>
</div> --}}
