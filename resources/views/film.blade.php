@extends('template.main_film')
@section('content')
<style>
    nav.bg-darker {
        background-color: #3d3e42;
    }

    nav a.navbar-brand {
        color: #66c175;
        font-weight: bold;
    }

    nav a.nav-link {
        margin-left: 10px;
        font-weight: 500;
        color: #51a57b;
    }

    nav a.nav-link:hover {
        color: #51a57b;
    }

    nav a.nav-link:after {
        display:block;
        content: ' ';
        color: #51a57b;
        border-bottom: 2px solid #51a57b;
        transform: scaleX(0);  
        transition: transform 250ms ease-in-out;
    }

    nav a.nav-link:hover:after {
        color: #51a57b;
        border-bottom: 2px solid #51a57b;
        transform: scaleX(1.15);
    }

    nav a.nav-link.active {
        font-weight: 500;
        color: #51a57b;
    }
    nav a.nav-link.active:after {
        color: #51a57b;
        border-bottom: 2px solid #51a57b;
        transform: scaleX(1.15);
    }

    .carousel-item{
        transition: 1s ease;
    }

    .bg-dark-lil {
        background-color: #000;
    }

    /* .carousel-film {
        padding-left: 11rem;
    } */

    .text-genre-carousel {
        color: #9a9da2;
        line-height: 2.5rem
    }

    .text-secondary-carousel {
        color: #b7b9bd;
        line-height: 2.5rem
    }

    .carousel-control-prev {
        width: 8%;
    }

    .carousel-control-next {
        width: 8%;
    }

    .deskripsi-carousel {
        padding-left: 8rem;
    }

    .img-carousel {
        width: 100%;
        height: 580px;
        object-fit: cover;
    }

    .img-carousel {
        -webkit-mask-image: linear-gradient(to right, transparent 2%, black 50%);
    }

    .d-none-controls {
        display: none;
    }

    #carouselExampleControls:hover + .d-none-controls {
        display: block;
    }
</style>

{{-- carousel --}}
<nav class="navbar navbar-expand-lg bg-dark-lil">
    <div class="container">
        <a class="navbar-brand fs-4" href="/">Suara Film</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Galeri</a>
                </li>   
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Tentang Kami</a>
                </li>   
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Kontak</a>
                </li>   
            </ul>
            
        </div>
    </div>
</nav>

{{-- film-carousel --}}
<div id="carouselExampleControls" class="carousel slide bg-dark-lil carousel-film" ata-bs-ride="carousel">
    <div class="carousel-inner">

        <div class="carousel-item active">
            <div class="row">
                <div class="col-5">
                    <div class="deskripsi-carousel">
                        <h1 class="text-white mt-5">
                            Title
                        </h1>
                        <h4 class="text-genre-carousel mt-3 mb-0">
                            Genre &#183; 18+
                        </h4>
                        <h4 class="text-secondary-carousel mt-3 mb-0">
                            Lorem isum dolor sit amet consectetur adipisicing elit. Natus voluptatibus reiciendis odio animi sint, a rem sit explicabo asperiores. Obcaecati soluta, et unde numquam provident ex quae non aspernatur ducimus?
                        </h4>
                    </div>
                </div>
                <div class="col-7">
                    <img src="https://i.pinimg.com/564x/20/05/48/200548127f9d2266c0e2e2b4955acd3c.jpg" class="ms-auto d-block img-carousel" alt="...">
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="row">
                <div class="col-5">
                    <div class="deskripsi-carousel">
                        <h1 class="text-white mt-5">
                            Title
                        </h1>
                        <h4 class="text-genre-carousel mt-3 mb-0">
                            Genre &#183; 18+
                        </h4>
                        <h4 class="text-secondary-carousel mt-3 mb-0">
                            Lorem isum dolor sit amet consectetur adipisicing elit. Natus voluptatibus reiciendis odio animi sint, a rem sit explicabo asperiores. Obcaecati soluta, et unde numquam provident ex quae non aspernatur ducimus?
                        </h4>
                    </div>
                </div>
                <div class="col-7">
                    <img src="https://i.pinimg.com/564x/54/8f/4f/548f4f5fd1863dafbe88312703dda0ae.jpg" class="ms-auto d-block img-carousel" alt="...">
                </div>
            </div>
        </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

@endsection
