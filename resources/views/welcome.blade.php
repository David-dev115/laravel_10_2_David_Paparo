

<x-layout>

    <div class="container-fluid vh-100">
        <div class="row h-100 justify-content-center align-items-center text-center">

            <div class="col-12">
                <h1 class="text-white mb-4">Jukebox</h1>

                <div class="d-flex justify-content-center gap-3">
                    <a href="{{route('song.index')}}" class="btn btn-primary">Catalogo</a>
                    <a href="{{route('songs.create')}}" class="btn btn-light">Aggiungi</a>
                </div>
            </div>

        </div>
    </div>

</x-layout>
