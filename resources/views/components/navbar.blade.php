
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav ">
            <ul class="navbar-nav">
                {{-- <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('songs.index')}}">Catalogo</a>
                </li>



                {{-- @auth --}}
                {{-- questo contenuto è visibile solo se l'utente è loggato --}}
                {{-- @endauth --}}


                {{-- @guest --}}
                {{-- questo contenuto è visibile solo se non l'utente è loggato --}}
                {{-- @endguest --}}

                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{route('songs.create')}}">Aggiungi</a>
                </li>
                @endauth

                {{-- schema base --}}
                {{-- @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}">Registrati</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">Accedi</a>
                </li>
                @endguest

                @auth
                <li class="nav-item">
                    <a class="nav-link" href="#">ciao {{Auth::user()->name}}</a>
                </li>
                <li class="nav-item">
                    <form class="" action="{{route('logout')}}" method="POST">
                        @csrf
                        <button type="submit" class="nav-link"> esci</button>
                    </form>
                </li>
                @endauth --}}
                {{-- fine schema base --}}


                {{-- dropdown --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Area riservata
                    </a>
                    <ul class="dropdown-menu">
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('register')}}">Registrati</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}">Accedi</a>
                        </li>
                        @endguest
                        @auth
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{Auth::user()->name}}</a>
                        </li>

                        <li>
                            <a class="nav-link" href="{{'user.profile'}}">Area riservata</a>
                        </li>

                        <li class="nav-item">
                            <form class="" action="{{route('logout')}}" method="POST">
                                @csrf
                                <li><hr class="dropdown-divider"></li>

                                <button type="submit" class="nav-link"> esci</button>
                            </form>
                        </li>
                        @endauth
                    </ul>
                </li>
                {{-- fine drop --}}


                {{-- <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>
