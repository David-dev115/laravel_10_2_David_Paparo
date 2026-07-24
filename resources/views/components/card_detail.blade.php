
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


    </div>

    @auth

    @if ($song->user_id == Auth::id())

    <div class="text-center mb-3 d-flex justify-content-center">

        <a href="{{route('songs.edit', $song)}}" class="btn btn-primary">Modifica</a>

        <a href="{{ route('songs.index') }}" class="btn btn-success mx-4">Catalogo</a>

        <form method="POST" action="{{route('songs.destroy' , $song )}}" >
            @method('DELETE')
            @csrf

            <button type="submit" class="btn btn-secondary">
                Elimina
            </button>
        </form>

    </div>

        @else

        <div class="text-center mb-3">
            <a href="{{ route('songs.index') }}" class="btn btn-success">
                Catalogo
            </a>
        </div>

    @endif



    @endauth







</div>


