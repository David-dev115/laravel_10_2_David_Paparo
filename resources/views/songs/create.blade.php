
<x-layout>


    <div class="container vh-100">
        <div class="row h-100 justify-content-center align-items-center">

            <div class="col-12 col-md-6 col-lg-5">

                <h2 class="text-white mb-4">Aggiungi canzone</h2>

                {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif --}}

                <x-display-error></x-display-error>


                <div class="card shadow p-4">

                    <form method="POST" action="{{route('songs.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome</label>
                            <input name="name" type="text" class="form-control" id="name" value="{{old('name')}}">
                        </div>

                        <div class="mb-3">
                            <label for="artist" class="form-label">Artista</label>
                            <input name="artist" type="text" class="form-control" id="artist" value="{{old('artist')}}">
                        </div>

                        <div class="mb-3">
                            <label for="album" class="form-label">Album</label>
                            <input name="album" type="text" class="form-control" id="album" value="{{old('album')}}"  >
                        </div>

                        <div class="mb-3">
                            <label for="vote" class="form-label">Voto</label>
                            <input name="vote" type="number" class="form-control" id="vote" value="{{old('vote')}}" >
                        </div>

                        <div class="mb-3">
                            <label for="img" class="form-label">Inserisci immagine</label>
                            <input name="img" type="file" class="form-control" id="img">
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            aggiungi
                        </button>
                    </form>

                </div>

            </div>

        </div>
    </div>

</x-layout>
