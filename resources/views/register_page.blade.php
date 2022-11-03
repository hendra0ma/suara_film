<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{asset('dropzone/basic.css')}}" rel="stylesheet">
    <link href="{{asset('')}}dropify/css/dropify.min.css" rel="stylesheet">
    <link href="{{asset('dropzone/dropzone.css')}}" rel="stylesheet">

    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" crossorigin="anonymous">
    </script>
    <style>
    .file-icon>p{
        font-size: medium;
    }

    </style>
</head>

<body>


    <section class="h-100" style="background-color: #8fc4b7;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                    <div class="card rounded-3">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img3.webp"
                            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
                            alt="Sample photo">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Info</h3>

                            <form class="px-md-2" class="dropzone">


                                <div class="form-floating mb-3">
                                    <input type="text" placeholder="Nama" class="form-control" id="nama" />
                                    <label for="nama">Nama</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" placeholder="email" class="form-control" id="email" />
                                    <label for="email">email</label>
                                </div>



                                <div class="form-floating mb-3">
                                    <input type="text" placeholder="Umur" class="form-control" id="umur" />
                                    <label for="umur">Umur</label>
                                </div>


                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <div class="form-floating datepicker">
                                            <input type="text" placeholder="Berat Badan" class="form-control"
                                                id="berat" />
                                            <label for="berat">Berat Badan</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <div class="form-floating datepicker">
                                            <input type="text" placeholder="Tinggi Badan" class="form-control"
                                                id="tinggi" />
                                            <label for="tinggi">Tinggi Badan</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="mb-4">

                                    <div class="form-floating">
                                        <textarea name="" id="alamat" cols="40" rows="10" placeholder="Alamat"
                                            class="form-control"></textarea>
                                        <label for="alamat">Alamat</label>
                                    </div>

                                </div>
                                <div class="mb-4">

                                    <div class="form-floating">
                                        <textarea name="" id="pengalaman" cols="40" rows="10" placeholder="Pengalaman"
                                            class="form-control"></textarea>
                                        <label for="pengalaman">Pengalaman</label>
                                    </div>

                                </div>
                                <div class="mb-4">
                                    <label for="foto">Foto</label>
                                    <input type="file" class="dropify" id="foto"/>
                                </div>
                                <div class="mb-4">
                                    <label for="Video">Video</label>
                                    <input type="file" class="dropify" id="Video"/>
                                </div>



                                <button type="submit" class="btn btn-success btn-lg mb-1">Submit</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="{{asset('dropzone/dropzone.js')}}"></script>
    <script src="{{asset('dropzone/dropzone-amd-module.js')}}"></script>

    <script src="{{asset('')}}dropify/js/dropify.min.js"></script>
    <script>
        $('.dropify').dropify();

    </script>
</body>

</html>
