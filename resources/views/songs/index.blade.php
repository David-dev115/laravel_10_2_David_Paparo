


<x-layout>



    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <section class="container">
        <div class="row">

            <h3 class="text-white mb-4 my-5">Catalogo canzoni</h3>


            @foreach ($songs as $element)

            <div class="col-12 col-sm-6 col-lg-3 mb-4">

                {{-- card dinamica --}}

                <x-card

                :song="$element"
                ></x-card>

                {{-- <div class="card h-100">
                    <img src="https://picsum.photos/300/200" class="card-img-top" alt="...">

                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">{{ $element['name'] }}</h5>

                        <p class="mb-1">
                            <span class="fw-semibold text-secondary">Artista:</span>
                            <span>{{ $element['artist'] }}</span>
                        </p>

                        <p class="mb-1">
                            <span class="fw-semibold text-secondary">Album:</span>
                            <span>{{ $element['album'] }}</span>
                        </p>

                        <p class="mb-0">
                            <span class="fw-semibold text-secondary">Voto:</span>
                            <span class="badge bg-primary">{{ $element['vote'] }}</span>
                        </p>
                    </div>
                </div> --}}



                {{-- fine card dinamica --}}
            </div>

            @endforeach

        </div>
    </section>


</x-layout>

