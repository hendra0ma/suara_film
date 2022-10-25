@extends('template.main_film')
@section('content')

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
            <div class="col mb-3">
                <a href="#" class="btn btn-lebih-banyak py-0" style="border-left: 3px solid #66c175">
                    <h2 class="mb-0">Trending <i class="fa-solid fa-angle-right fs-3"></i></h2>
                </a>
            </div>
        </div>

        <button class="btn btn-scroll left-button desktop" id="left-button">
            <h3><i class="fa-solid fa-angle-left"></i></h3>
        </button>

        <button class="btn btn-scroll right-button desktop" id="right-button">
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

    </section>

</div>





@endsection
