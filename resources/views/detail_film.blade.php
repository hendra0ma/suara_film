@extends('template.main_film')
@section('content')
<div class="container container_film mt-4 mb-5">
    <div class="row">
        <div class="col-md-12"><h1 class="display-4 fw-500">{{$req->title}}</h1></div>
        <div class="col-md-12 fw-500">{{$req->year}} &nbsp;&#8226;&nbsp; {{$req->age}} &nbsp;&#8226;&nbsp; {{$req->long}}</div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <iframe width="100%" height="450" src="{{$req->trailer}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="col-auto desktop">
            <img style="height: 450px" src="{{$req['img_cover']}}" alt="">
        </div>
        <div class="col-12 mt-1">
            <span class="badge bg-dark rounded-pill">Komedi</span>
        </div>
    </div>
    <div class="row mt-3 fw-500">
        <div class="col-md-8" style="border-right: 1px solid #dfdfdf">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis tenetur maxime omnis delectus sint, consequatur nesciunt velit nam maiores quam dicta doloribus perferendis, placeat hic consectetur officiis. Cupiditate beatae ipsa amet magnam, laborum, sapiente quae natus fugiat, sint quaerat exercitationem! Architecto, quod?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, facere velit molestias enim aperiam unde cum dolorem quibusdam perferendis incidunt assumenda odio iusto neque laborum nihil veritatis vitae. Est consectetur totam, nemo laudantium voluptates explicabo quod voluptatibus atque tempore laborum autem ab aperiam dolorum iure cumque minus libero. Porro eaque corporis dolorem labore doloremque aliquam consequatur perspiciatis blanditiis illum dolores?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos at amet aliquid harum doloribus mollitia eius iste, nostrum saepe ad, consectetur autem ut inventore repellendus commodi sed eum ea voluptatem.</p>
        </div>
        <div class="col-md-4">
            <p><b>Tahun</b> : {{$req->year}}</p>
            <p><b>Genre</b> : {{$req->genre}}</p>
            <p><b>Tanggal Rilis</b> : {{$req->date}}</p>
            <p><b>Sutradara</b> : {{$req->director}}</p>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-12 mb-3">
            <a href="#" class="btn btn-lebih-banyak py-0" style="border-left: 3px solid #66c175">
                <h2 class="mb-0">Foto <i class="fa-solid fa-angle-right fs-3"></i></h2>
            </a>
        </div>
        <div class="col parent-relative">
            <button class="btn btn-scroll-film left-button desktop" id="left-button">
                <h3><i class="fa-solid fa-angle-left"></i></h3>
            </button>
        
            <button class="btn btn-scroll-film right-button desktop" id="right-button">
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

    <div class="row mt-5 desktop">
        <div class="col-12 mb-3">
            <f class="btn btn-lebih-banyak py-0" style="border-left: 3px solid #66c175">
                <h2 class="mb-0">Aktor</h2>
            </f>
        </div>
        <div class="col-12 parent-relative">
            <div class="row g-3 ">

                <div class="col-md-6">
                
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <img class="image-aktor rounded-circle" src="https://i1.sndcdn.com/avatars-IesRuX9vhlBZzVuz-1H6bOA-t500x500.jpg" alt="">
                        </div>
                        <div class="flex-grow-1 ms-4 aktor-name">
                            <b>Dwayne Johnson</b>
                            <br>
                            The Wok
                        </div>
                    </div>
                    
                </div>
                
                <div class="col-md-6">
                    
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <img class="image-aktor rounded-circle" src="https://i1.sndcdn.com/avatars-IesRuX9vhlBZzVuz-1H6bOA-t500x500.jpg" alt="">
                        </div>
                        <div class="flex-grow-1 ms-4 aktor-name">
                            <b>Dwayne Johnson</b>
                            <br>
                            The Wok
                        </div>
                    </div>
                    
                </div>
                
                <div class="col-md-6">
                    
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <img class="image-aktor rounded-circle" src="https://i1.sndcdn.com/avatars-IesRuX9vhlBZzVuz-1H6bOA-t500x500.jpg" alt="">
                        </div>
                        <div class="flex-grow-1 ms-4 aktor-name">
                            <b>Dwayne Johnson</b>
                            <br>
                            The Wok
                        </div>
                    </div>
                    
                </div>
                
                <div class="col-md-6">
                    
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <img class="image-aktor rounded-circle" src="https://i1.sndcdn.com/avatars-IesRuX9vhlBZzVuz-1H6bOA-t500x500.jpg" alt="">
                        </div>
                        <div class="flex-grow-1 ms-4 aktor-name">
                            <b>Dwayne Johnson</b>
                            <br>
                            The Wok
                        </div>
                    </div>
                    
                </div>
                
            </div>

        </div>
    </div>

    <div class="row mt-5 mobile">
        <div class="col-12 mb-3">
            <f class="btn btn-lebih-banyak py-0" style="border-left: 3px solid #66c175">
                <h2 class="mb-0">Aktor</h2>
            </f>
        </div>
        <div class="col parent-relative">
            <button class="btn btn-scroll-film left-button desktop" id="left-button">
                <h3><i class="fa-solid fa-angle-left"></i></h3>
            </button>
        
            <button class="btn btn-scroll-film right-button desktop" id="right-button">
                <h3><i class="fa-solid fa-angle-right"></i></h3>
            </button>
        
            <div class="row g-4 container-poster" id="poster">
                <div class="col-auto text-center">
                    <img class="image-aktor rounded-circle" src="https://i1.sndcdn.com/avatars-IesRuX9vhlBZzVuz-1H6bOA-t500x500.jpg" alt="">
                    <div>
                        <b>Dwayne Johnson</b>
                        <br>
                        The Wok
                    </div>
                </div>
            
                <div class="col-auto text-center">
                    <img class="image-aktor rounded-circle" src="https://i1.sndcdn.com/avatars-IesRuX9vhlBZzVuz-1H6bOA-t500x500.jpg" alt="">
                    <div>
                        <b>Dwayne Johnson</b>
                        <br>
                        The Wok
                    </div>
                </div>
            
                <div class="col-auto text-center">
                    <img class="image-aktor rounded-circle" src="https://i1.sndcdn.com/avatars-IesRuX9vhlBZzVuz-1H6bOA-t500x500.jpg" alt="">
                    <div>
                        <b>Dwayne Johnson</b>
                        <br>
                        The Wok
                    </div>
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