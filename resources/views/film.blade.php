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

    .container-fluid.custom {
        padding-left: 6rem !important;
        padding-right: 6rem !important;
    }

    .image-poster {
        width: 200px;
        height: 300px;
        object-fit: cover
    }

    .container-poster {
        overflow-x: scroll;
        flex-wrap: nowrap;
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

<div class="container-fluid custom mt-4 mb-5">

    {{-- list film --}}
    <section>
        <h1>Trending</h1>
        <div class="row g-3 container-poster">
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



@endsection
