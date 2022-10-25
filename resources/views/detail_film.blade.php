@extends('template.main_film')
@section('content')
<div class="container container_film mt-4 mb-5">
    <div class="row">
        <div class="col-md-12"><h1 class="display-4 fw-500">Title</h1></div>
        <div class="col-md-12 fw-500">2022 &nbsp;&#8226;&nbsp; PG-13 &nbsp;&#8226;&nbsp; 2j 10m</div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <iframe width="100%" height="450" src="https://www.youtube.com/embed/jEDaVHmw7r4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="col-12 mt-1">
            <span class="badge bg-dark rounded-pill">Komedi</span>
        </div>
    </div>
    <div class="row mt-3 fw-500">
        <div class="col-8" style="border-right: 1px solid #dfdfdf">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis tenetur maxime omnis delectus sint, consequatur nesciunt velit nam maiores quam dicta doloribus perferendis, placeat hic consectetur officiis. Cupiditate beatae ipsa amet magnam, laborum, sapiente quae natus fugiat, sint quaerat exercitationem! Architecto, quod?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, facere velit molestias enim aperiam unde cum dolorem quibusdam perferendis incidunt assumenda odio iusto neque laborum nihil veritatis vitae. Est consectetur totam, nemo laudantium voluptates explicabo quod voluptatibus atque tempore laborum autem ab aperiam dolorum iure cumque minus libero. Porro eaque corporis dolorem labore doloremque aliquam consequatur perspiciatis blanditiis illum dolores?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos at amet aliquid harum doloribus mollitia eius iste, nostrum saepe ad, consectetur autem ut inventore repellendus commodi sed eum ea voluptatem.</p>
        </div>
        <div class="col-4">
            <p><b>Tahun</b> : 2020</p>
            <p><b>Genre</b> : Komedi</p>
            <p><b>Tanggal Rilis</b> : 21 Januari 2020</p>
            <p><b>Sutradara</b> : Budi Hartanto</p>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col parent-relative">
            <h1>Foto</h1>
            <button class="btn btn-scroll-film left-button" id="left-button">
                <h3><i class="fa-solid fa-angle-left"></i></h3>
            </button>
        
            <button class="btn btn-scroll-film right-button" id="right-button">
                <h3><i class="fa-solid fa-angle-right"></i></h3>
            </button>
        
            <div class="row g-3 container-poster" id="poster">
                <div class="col-auto">
                    <img class="image-film" src="https://i.pinimg.com/564x/4c/80/ac/4c80ac0ccf18e1a198bc6b4120a43a79.jpg" alt="">
                </div>
                <div class="col-auto">
                    <img class="image-film" src="https://i.pinimg.com/564x/76/79/fb/7679fb44d1fe6fedf03f637b6fd15079.jpg" alt="">
                </div>
                <div class="col-auto">
                    <img class="image-film" src="https://i.pinimg.com/564x/a9/29/67/a92967108cb3cd316d75ee89c052d8b4.jpg" alt="">
                </div>
                <div class="col-auto">
                    <img class="image-film" src="https://i.pinimg.com/564x/04/7e/a7/047ea77d4ab0eb6c18e83e25309e8f77.jpg" alt="">
                </div>
                <div class="col-auto">
                    <img class="image-film" src="https://i.pinimg.com/736x/6d/bc/28/6dbc281e78eaa97de537744ac5aad3ae.jpg" alt="">
                </div>
                <div class="col-auto">
                    <img class="image-film" src="https://i.pinimg.com/564x/d0/11/33/d0113352f4b921fc92d958e106daefe1.jpg" alt="">
                </div>
                <div class="col-auto">
                    <img class="image-film" src="https://i.pinimg.com/564x/a1/88/e5/a188e568a782853d090c381ee38d79f3.jpg" alt="">
                </div>
                <div class="col-auto">
                    <img class="image-film" src="https://i.pinimg.com/564x/a4/3d/27/a43d27c53e995321825f4bcb881006f5.jpg" alt="">
                </div>
                <div class="col-auto">
                    <img class="image-film" src="https://i.pinimg.com/564x/cb/e0/80/cbe0805aea34cca87635e51a007598a7.jpg" alt="">
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

        </div>
    </div>
</div>
@endsection