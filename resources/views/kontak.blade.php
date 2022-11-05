@extends('template.main_film')
@section('content')

<div class="mb-5 bg-kontak text-center text-white carousel-film">
    <h1 class="display-3">Kontak Kami</h1>
</div>

<div class="container mb-5">

    <div class="row">
        <div class="mt-2 mb-2 col-md-4">
            <div class="card" style="background-color: #66c175; border-radius: 15px">
                <div class="card-body text-white" style="padding: 28px">
                    <h3>Informasi Kontak</h3>
                    <p style="color: rgba(255, 255, 255, 0.75)">Tunggu balasan kami dalam 24 jam setelah anda mengirim pesan.</p>
                    <br>
                    <div class="mt-2">
                        <i class="fa-solid fa-phone"></i> &nbsp; 021-3142860
                    </div>
                    <div class="mt-4">
                        <i class="fa-solid fa-envelope"></i> &nbsp; example@gmail.com
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-2 mb-2 col-md">
            <div class="card" style="border-radius: 15px">
                <div class="card-body">
                    <form action="">
                        <div class="row">
                            <div class="col-md-6 mt-2 mb-2">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="nama" placeholder="Nama">
                                </div>
                            </div>
                            <div class="col-md-6 mt-2 mb-2">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-12 mt-2 mb-2">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subjek" placeholder="Subjek">
                                </div>
                            </div>
                            <div class="col-md-12 mt-2 mb-2">
                                <div class="form-group">
                                    <textarea class="form-control" id="pesan" placeholder="Pesan" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <h1 class="mt-5 text-center mb-3">Lokasi Kami</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1174.9869407416559!2d112.53430816132985!3d-7.877355430924772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1667657160583!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>
@endsection