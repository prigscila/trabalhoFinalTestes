<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
    <button 
        class="navbar-toggler" 
        type="button" 
        data-toggle="collapse"
        data-target="#navbar" 
        aria-controls="navbar" 
        aria-expanded="false" 
        arialabel="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">
            <li 
                @if($current=="home") 
                    class="nav-item active" 
                @else 
                    class="nav-item" 
                @endif>
                <a class="nav-link" href="/">Home</a>
            </li>
            @auth
            <li 
                @if($current=="alunos") 
                    class="nav-item active" 
                @else 
                    class="nav-item" 
                @endif>
                <a class="nav-link" href="/alunos">Alunos</a>
            </li>
            @if(Auth::user()->tipo == 1)
                <li 
                    @if($current=="notas") 
                        class="nav-item active" 
                    @else 
                        class="nav-item" 
                    @endif>
                    <a class="nav-link" href="/notas">Notas</a>
                </li>
            @endif
            @endauth
        </ul>
        <ul class="navbar-nav ">
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Acessar') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Desconectar') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</nav>