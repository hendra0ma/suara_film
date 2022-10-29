<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>{{$title}}</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" crossorigin="anonymous">
    </script>

    <style>
        body {
            height: 100vh;
        }

        body::-webkit-scrollbar {
            width: 0;
            /* Remove scrollbar space */
            background: transparent;
            /* Optional: just make scrollbar invisible */
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
            display: block;
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

        .carousel-item {
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
            padding-right: 6rem;
            position: absolute;
            z-index: 1;
            width: 50%;
            height: 100%;
            background: linear-gradient(to left, transparent 2%, black 50%);
        }

        .img-carousel {
            height: 60vh;
            object-fit: cover;
            -webkit-mask-image: linear-gradient(to right, transparent 2%, black 50%);
        }

        @media (max-width: 1050px) {
            .deskripsi-carousel {
                width: 65%;
            }
            .deskripsi-carousel h1 {
                font-size: 25px;
            }

            .deskripsi-carousel h4 {
                font-size: 18px;
            }
        }

        @media (max-width: 880px) {
            .img-carousel {
                width: 100%;
                object-fit: cover;
                -webkit-mask-image: linear-gradient(to right, transparent 2%, black 0%);
            }

            .deskripsi-carousel {
                padding-left: 4rem;
                padding-right: 2rem;
                width: 40% !important;
                background: rgba(0, 0, 0, 0.6);
            }

            .deskripsi-carousel h1 {
                font-size: 23px !important;
            }

            .deskripsi-carousel h4 {
                font-size: 16px !important;
            }
        }

        @media (max-width: 700px) {

            .img-carousel {
                height: 35vh;
                object-fit: cover;
                -webkit-mask-image: linear-gradient(to right, transparent 2%, black 50%);
            }

            .deskripsi-carousel {
                padding-left: 1rem;
                padding-right: 1rem;
                margin-top: 0% !important;
                width: 40% !important;
                background: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.95));
            }

            .deskripsi-carousel h1 {
                font-size: 20px !important;
                margin-top: 2rem !important;
            }

            .deskripsi-carousel h4 {
                font-size: 13px !important;
                line-height: 1.25rem;
                margin-top: 0.2rem !important;
                margin-bottom: 0.2rem !important;
            }
        }

        @media (max-width: 565px) {
            .deskripsi-carousel h1 {
                font-size: 16px !important;
                margin-top: 1rem !important;
            }

            .deskripsi-carousel h4 {
                font-size: 10px !important;
                line-height: 1rem;
                margin-top: 0.15rem !important;
                margin-bottom: 0.15rem !important;
            }

        
        }

        .carouse-lcontrol-custom {
            z-index: 1000;
        }

        /* .bg-image-att {
            background-image: url(https://i.pinimg.com/564x/20/05/48/200548127f9d2266c0e2e2b4955acd3c.jpg), opacity: 0.5;
            background-repeat: no-repeat; 
            background-position: right; 
            height: 60vh; 
            background-size: contain
        } */

        .d-none-controls {
            display: none;
        }

        #carouselExampleControls:hover+.d-none-controls {
            display: block;
        }

        .image-poster {
            border: 0.75px solid black;
            width: 200px;
            height: 300px;
            object-fit: cover;
        }

        .image-film {
            border: 0.75px solid black;
            width: 200px;
            height: 200px;
            object-fit: cover;
        }

        .image-aktor {
            width: 100px;
            height: 100px;
            object-fit: cover;
        }

        .container-poster {
            overflow-x: scroll !important;
            flex-wrap: nowrap !important;
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

        .btn-scroll-film {
            padding: .375rem 0.35rem;
            height: 200px;
            color: rgba(255, 255, 255, 0.80);
        }

        .btn:focus,
        .btn:active {
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

        .container_film {
            margin-top: 5rem !important;
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
            .container-fluid.footer {
                padding-left: 1rem !important;
                padding-right: 1rem !important;
            }
        }

        .film-mini-detail p {
            margin-bottom: 0;
        }

        .card-film-list {
            border-radius: 20px
        }

        .card-film-list .card-header {
            border-radius: 20px 20px 0px 0px
        }

        .fw-500 {
            font-weight: 500;
        }

        .fw-300 {
            font-weight: 300;
        }

        .btn-lebih-banyak:hover i {
            color: #66c175
        }

        .aktor-name {
            font-size: 18px
        }

        .mobile {
            display: none;
        }

        @media (max-width: 1000px) {
            .mobile {
                display: block;
            }

            .desktop {
                display: none;
            }
        }

    </style>

</head>

<body>
