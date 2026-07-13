

<x-layout>

    <div class="container-fluid vh-100">
        <div class="row h-100 justify-content-center align-items-center text-center">

            <div class="col-12 col-md-6 col-lg-4">
                <h1 class="text-white mb-4">Registrati</h1>


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

                <form   action="{{route('register')}}" method="POST"  >
                    @csrf
                    <div class="mb-3 mt-5">
                        <label for="name" class="form-label text-light">Nome</label>
                        <input  name='name' type="text" class="form-control" id="name" >

                    </div>
                    <div class="mb-3 mt-5">
                        <label for="email" class="form-label text-light">Email</label>
                        <input name='email' type="email" class="form-control" id="email" aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3 mt-5">
                        <label for="password" class="form-label text-light">Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3 mt-5">
                        <label for="password_confirmation" class="form-label text-light">Conferma Password</label>
                        <input name="password_confirmation" type="password" class="form-control" id="password_confirmation">
                    </div>

                    <button type="submit" class="btn btn-primary">Iscriviti</button>
                </form>

                {{-- <div class="d-flex justify-content-center gap-3">
                    <a href="{{route('song.index')}}" class="btn btn-primary">Catalogo</a>
                    <a href="{{route('store.song')}}" class="btn btn-light">Aggiungi</a>
                </div> --}}
            </div>

        </div>
    </div>

    <div class="container">

        <div class="row mt-5">

            <div class="col-12 col-md-6" >



            </div>

        </div>

    </div>

</x-layout>
