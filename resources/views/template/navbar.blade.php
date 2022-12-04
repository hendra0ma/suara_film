{{-- carousel --}}
<nav class="navbar navbar-expand-lg bg-dark-lil fixed-top">
    <div class="container">
        <a class="navbar-brand fs-4" href="/">Suara Film</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('film') ? 'active' : '' }}" aria-current="page" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('list_film') ? 'active' : '' }}" aria-current="page" href="{{route('listFilm')}}">Film</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('galeri_biodata') ? 'active' : '' }}" aria-current="page" href="{{route('galeriBiodata')}}">Galeri</a>
                </li>   
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('tentang') ? 'active' : '' }}" aria-current="page" href="{{route('tentang')}}">Tentang Kami</a>
                </li>   
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('kontak') ? 'active' : '' }}" aria-current="page" href="{{route('kontak')}}">Kontak</a>
                </li>   
            </ul>
            
        </div>
    </div>
</nav>

<script type="text/javascript">
    window.addEventListener("scroll", function(){
        var header = document.querySe1ector( "nav");
        header.classList.togg1e("fixed-top", window.scrollY > 0);
    })
</script>