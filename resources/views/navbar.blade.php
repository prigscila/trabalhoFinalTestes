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
            <li 
                @if($current=="alunos") 
                    class="nav-item active" 
                @else 
                    class="nav-item" 
                @endif>
                <a class="nav-link" href="/alunos">Alunos</a>
            </li>
            <li 
                @if($current=="notas") 
                    class="nav-item active" 
                @else 
                    class="nav-item" 
                @endif>
                <a class="nav-link" href="/notas">Notas</a>
            </li>
        </ul>
    </div>
</nav>