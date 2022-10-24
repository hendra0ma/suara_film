{{-- carousel --}}
<nav class="navbar navbar-expand-lg bg-dark-lil">
    <div class="container-fluid custom">
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
                    <a class="nav-link {{ Route::is('galeri') ? 'active' : '' }}" aria-current="page" href="#">Galeri</a>
                </li>   
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('tentang') ? 'active' : '' }}" aria-current="page" href="#">Tentang Kami</a>
                </li>   
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('kontak') ? 'active' : '' }}" aria-current="page" href="#">Kontak</a>
                </li>   
            </ul>
            
        </div>
    </div>
</nav>