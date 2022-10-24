@extends('template.main_film')
@section('content')
<style>
    body {
        height: 100vh;
    }

    body::-webkit-scrollbar {
        width: 0;  /* Remove scrollbar space */
        background: transparent;  /* Optional: just make scrollbar invisible */
    }

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
        color: #a9abaf;
    }

    nav a.nav-link:hover {
        color: #51a57b;
    }

    nav a.nav-link:focus {
        color: #51a57b;
    }

    nav a.nav-link:after {
        display:block;
        content: ' ';
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

    .text-genre-carousel {
        color: #9a9da2;
        font-size: 24px
    }

    .text-secondary-carousel {
        color: #b7b9bd;
        line-height: 2rem;
        font-size: 20px
    }

    .carousel-control-prev {
        width: 5%;
    }

    .carousel-control-next {
        width: 5%;
    }

    .deskripsi-carousel {
        padding-left: 6rem;
    }

    .img-carousel {
        width: 100%;
        height: 60vh;
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

    .image-poster {
        border: 0.75px solid black;
        width: 200px;
        height: 300px;
        object-fit: cover;
    }

    .container-poster {
        overflow-x: scroll;
        flex-wrap: nowrap;
    }

    .container-poster::-webkit-scrollbar {
        width: 0;
        background: transparent;
    }

    .btn-scroll {
        padding: .375rem 0.35rem;
        height: 300px;
        color: rgba(255, 255, 255, 0.80);
    }
    
    .btn:focus,.btn:active {
       outline: none !important;
       box-shadow: none;
    }

    .parent-relative {
        position: relative;
    }

    .left-button {
        border: 0px;
        background: linear-gradient(to left, transparent 2%, rgba(0, 0, 0, 0.2) 100%);
        position: absolute;
        left: -2rem;
    }

    .right-button {
        border: 0px;
        background: linear-gradient(to right, transparent 2%, rgba(0, 0, 0, 0.2) 100%);
        position: absolute;
        right: -2rem;
    }

    .left-button:hover {
        color: rgb(240, 240, 240);
        border: 0px;
        background: linear-gradient(to left, transparent 2%, rgba(0, 0, 0, 0.3) 100%);
    }

    .right-button:hover {
        color: rgb(240, 240, 240);
        border: 0px;
        background: linear-gradient(to right, transparent 2%, rgba(0, 0, 0, 0.3) 100%);
    }

    a {
        text-decoration: none;
    }

    .text-green {
        color: #66c175;
    }

    .carousel-film {
        margin-top: 58.2px !important;
    }

    .bg-black {
        background-color: #000
    }
    
    footer .lh-none {
        line-height: normal !important;
    }

    ol.olcustom {
            padding-left: 1rem;
        }
        ol.olcustom li {
            margin-bottom: 10px;
            color: #acacac; 
            text-align: justify;
            padding-left: 0.5rem !importan
        }
        @media (max-width: 991.98px) { 
            .container-fluid.footer{
                padding-left: 1rem !important;
                padding-right: 1rem !important;
            }
        }
</style>

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
                        <h4 class="text-genre-carousel mt-2 mb-0">
                            Genre &#183; 18+
                        </h4>
                        <h4 class="text-secondary-carousel mt-2 mb-0">
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
                        <h4 class="text-genre-carousel mt-2 mb-0">
                            Genre &#183; 18+
                        </h4>
                        <h4 class="text-secondary-carousel mt-2 mb-0">
                            Lorem isum dolor sit amet consectetur adipisicing elit. Natus voluptatibus reiciendis odio animi sint, a rem sit explicabo asperiores. Obcaecati soluta, et unde numquam provident ex quae non aspernatur ducimus?
                        </h4>
                    </div>
                </div>
                <div class="col-7">
                    <img src="https://i.pinimg.com/564x/54/8f/4f/548f4f5fd1863dafbe88312703dda0ae.jpg" class="ms-auto d-block img-carousel" alt="...">
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
                        <h4 class="text-genre-carousel mt-2 mb-0">
                            Genre &#183; 18+
                        </h4>
                        <h4 class="text-secondary-carousel mt-2 mb-0">
                            Lorem isum dolor sit amet consectetur adipisicing elit. Natus voluptatibus reiciendis odio animi sint, a rem sit explicabo asperiores. Obcaecati soluta, et unde numquam provident ex quae non aspernatur ducimus?
                        </h4>
                    </div>
                </div>
                <div class="col-7">
                    <img src="https://i.pinimg.com/564x/73/41/98/7341980d518aeef9d525ff4e438bb9de.jpg" class="ms-auto d-block img-carousel" alt="...">
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

<div class="container mt-4 mb-5">

    {{-- list film --}}
    <section class="parent-relative">
        <div class="row align-items-center">
            <div class="col">
                <h1>Trending</h1>
            </div>
            <div class="col text-end"> 
                <a href="#" class="mb-0 link text-green">Lihat Lebih Banyak</a>
            </div>
        </div>

        <button class="btn btn-scroll left-button" id="left-button">
            <h3><i class="fa-solid fa-angle-left"></i></h3>
        </button>

        <button class="btn btn-scroll right-button" id="right-button">
            <h3><i class="fa-solid fa-angle-right"></i></h3>
        </button>

        <div class="row g-3 container-poster" id="poster">
            <div class="col-auto">
                <img class="image-poster" src="https://i.pinimg.com/564x/4c/80/ac/4c80ac0ccf18e1a198bc6b4120a43a79.jpg" alt="">
            </div>
            <div class="col-auto">
                <img class="image-poster" src="https://i.pinimg.com/564x/76/79/fb/7679fb44d1fe6fedf03f637b6fd15079.jpg" alt="">
            </div>
            <div class="col-auto">
                <img class="image-poster" src="https://i.pinimg.com/564x/a9/29/67/a92967108cb3cd316d75ee89c052d8b4.jpg" alt="">
            </div>
            <div class="col-auto">
                <img class="image-poster" src="https://i.pinimg.com/564x/04/7e/a7/047ea77d4ab0eb6c18e83e25309e8f77.jpg" alt="">
            </div>
            <div class="col-auto">
                <img class="image-poster" src="https://i.pinimg.com/736x/6d/bc/28/6dbc281e78eaa97de537744ac5aad3ae.jpg" alt="">
            </div>
            <div class="col-auto">
                <img class="image-poster" src="https://i.pinimg.com/564x/d0/11/33/d0113352f4b921fc92d958e106daefe1.jpg" alt="">
            </div>
            <div class="col-auto">
                <img class="image-poster" src="https://i.pinimg.com/564x/a1/88/e5/a188e568a782853d090c381ee38d79f3.jpg" alt="">
            </div>
            <div class="col-auto">
                <img class="image-poster" src="https://i.pinimg.com/564x/a4/3d/27/a43d27c53e995321825f4bcb881006f5.jpg" alt="">
            </div>
            <div class="col-auto">
                <img class="image-poster" src="https://i.pinimg.com/564x/cb/e0/80/cbe0805aea34cca87635e51a007598a7.jpg" alt="">
            </div>
        </div>

    </section>

</div>

<footer class="bg-black">
    <div class="container-fluid footer p-5 text-white">
        <div class="row justify-content-center">
            <div class="col-md-3 mb-2 mt-2">
                <div class="row">
                    <div class="col-md-12">
                        <img src="{{url('')}}/uploads/sengketa_tanah.png" style="width: 300px" alt="">
                    </div>
                    <div class="col-9">
                        <div class="row justify-content-center mt-4 text-center g-0">
                            <div class="col">
                                <a class="btn p-0 fs-5" href="https://www.instagram.com/sengketatanah.id/" role="button">
                                    <i class="fa-brands fa-instagram text-white"></i>
                                </a>
                            </div>
                            <div class="col">
                                <a class="btn p-0 fs-5" href="https://m.youtube.com/channel/UCXQW3lPJ68brYiThnxX18-A" role="button">
                                    <i class="fa-brands fa-youtube text-white"></i>
                                </a>
                            </div>
                            <div class="col">
                                <a class="btn p-0 fs-5" href="#" role="button">
                                    <i class="fa-brands fa-facebook text-white"></i>
                                </a>
                            </div>
                            <div class="col">
                                <a class="btn p-0 fs-5" href="https://mobile.twitter.com/sengketatanahid" role="button">
                                    <i class="fa-brands fa-twitter text-white"></i>
                                </a>
                            </div>
                            <div class="col">
                                <div class="dropdown">
                                    <button class="btn p-0 fs-5" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                                        id="dropdownMenuButton1">
                                        <i class="fa-solid fa-share text-white"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="https://twitter.com/share?ref_src=twsrc%5Etfw"
                                                data-show-count="false"><i class="fa-brands fa-twitter"></i> Tweet</a></li>
                                        <li>
                                            <a target="_blank"
                                                onClick='window.open("https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fserver.sengketatanah.id%2F&amp;src=sdkpreparse","Ratting","width=550,height=550,left=150,top=200,toolbar=0,status=0,");'
                                                href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fserver.sengketatanah.id%2F&amp;src=sdkpreparse"
                                                class="fb-xfbml-parse-ignore dropdown-item"><i class="fa-brands fa-facebook"></i>
                                                Facebook</a>
                                        </li>
                                    </ul>
                                </div>
                            
                                <a href="" class=""></a>
                                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-2 mt-2">
                <div class="row">
                    <div class="col-12">
                        <h5>Kantor Kami</h5>
                    </div>
                    <div class="col-12" style="color: #acacac">
                        <p class="mb-0">PT. Tanah Airku Merdeka</p>
                        <p class="mb-0">Sovereign Plaza Lantai 19,</p>
                        <p class="mb-0">Jl. TB Simatupang No.36, RT.1/RW.2, Cilandak Bar., Kec. Cilandak, Kota Jakarta Selatan, Daerah Khusus</p>
                        <p class="mb-0">Ibukota Jakarta 12430</p> 
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-2 mt-2">
                <div class="row">
                    <div class="col-12">
                        <h5>Kontak kami</h5>
                    </div>
                    <div class="col-12" style="color: #acacac">
                        <p class="mb-0">Email: cs@tanahmerdeka.id</p>
                        <p class="mb-0">Telepon: 0812 3575 7667</p>
                        <p class="mb-0">Whatsapp: 0812 3575 7667</p>
                        <p class="mb-0">Verificator 0857 7369 0768</p>
                        <p class="mb-0">Collection 0813 8465 4484</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-2 mt-2">
                <div class="row">
                    <div class="col-12" style="color: #acacac">
                        <p class="mb-0">Beranda</p>
                        <p class="mb-0">Galeri</p>
                        <p class="mb-0">Tentang Kami</p>
                        <p class="mb-0">Kontak</p>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mb-4 mt-4" style="border: 2px solid white">
        <div class="row">
            <div class="col-12 text-center" style="color: #acacac;">
                Copyright © 2022 PT. Tanah Airku Merdeka All rights reserved.
            </div>
        </div>
    </div>
</footer>

<script>
    $('#right-button').click(function() {
        event.preventDefault();
        $('#poster').animate({
            scrollLeft: "+=200px"
        }, "slow");
    }); 

     $('#left-button').click(function() {
        event.preventDefault();
        $('#poster').animate({
            scrollLeft: "-=200px"
        }, "slow");
    });
</script>



@endsection
