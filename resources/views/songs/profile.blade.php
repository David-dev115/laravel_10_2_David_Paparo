
<x-layout>

    <div class="container-fluid">

        <div class="row justify-content-center">

            <h2 class="text-white text-center my-5"> Discografia di {{ Auth::user()->name  }}</h2>

            @forelse (Auth::user()->songs as $song)

            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                {{-- <div style="width: 18rem;"> --}}
                    <x-card :song="$song" />
                </div>
            {{-- </div> --}}

            @empty
            <div class="col-12 col-md-3 d-flex flex-column justify-content-center gap-3 text-center">
                <p class="text-white">Non hai caricato nessuna canzone</p>
                <a href="{{route('songs.create')}}" class="btn btn-light">Aggiungi la tua prima canzone</a>
            </div>
            @endforelse

        </div>

    </div>

</x-layout>
