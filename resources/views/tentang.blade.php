@extends('template.main_film')
@section('content')


<div class="page-heading">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 align-self-center">
                <div class="caption  header-text">
                  
                    <h4>Discover More <em>About Us</em></h4>
                    
                    <p style="text-align: justify;">
                        PT. SWARA RESWARA ABADI berdiri pada tahun 2018 tepatnya di tanggal 8 Mei
                        2018 di kota Jakarta Selatan berdasarkan akta notaris yang dibuat oleh
                        Ilmiawan Dekrit Supatmo, SH. MH. Serta telah memperoleh persetujuan
                        Menteri Hukum dan Hak Asasi Manusia Republik Indonesia melalui surat
                        keputusan nomor : AHU-0024253.AH.01.01.TAHUN 2018. 
                    </p>
                   
                    <p style="text-align: justify;">
                        Berdirinya perusahaan kami sebagai bentuk respon dalam menggerakkan dan
                        meningkatkan ekonomi. PT. Swara Reswara Abadi adalah perusahaan yang
                        bergerak di bidang rumah produksi, event organizer, supplier, kontraktor, arst
                        management dan jasa lainnya. Bidang usaha yang ditangani perseroan ini
                        merupakan kompetensi perseroan dan didukung oleh m manajemen yang
                        mempunyai pengalaman, kompetensi dan dedikasi dibidang tersebut. 
                    </p>
                   
                </div>
            </div>
            <div class="col-lg-5 align-self-center">
                <img src="{{asset('landpage')}}/assets/images/about-us-image.jpg" alt="">
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-5 align-self-center">
                <img src="{{asset('landpage')}}/assets/images/happyclient-01.jpg" alt="">
            </div>
            <div class="col-lg-7 align-self-center">
                <div class="caption  header-text
                
                ">

                    <p style="padding-right: 0%; padding-left: 25%; text-align:justify">
                        Dengan dedikasi yang nggi kami terus berkomitmen untuk memberikan
                        pelayanan yang berkualitas, pelayanan yang maksimal, serta kemudahan akses
                        terhadap semua jaringan perusahaan. 
                    </p>

                    <p style="padding-right: 0%; padding-left: 25%; text-align:justify">
                        Untuk mewujudkan keinginan tersebut kami selalu berusaha melakukan
                        inovasi terkait dengan pelayanan serta kontrol terhadap klien kami. Selain itu
                        kami juga memiliki sistem sumber daya manusia yang baik dan terencana. 
                    </p>

                    <p style="padding-right: 0%; padding-left: 25%; text-align:justify">
                        PT. Swara Reswara Abadi berkomitmen dalam meningkatkan sumber daya
                        manusia yang berintegritas, disiplin, kreaf dan produkf. Menjaga
                        pertumbuhan dan pendapatan perusahaan dengan strategi bisnis yang tepat
                        dengan mengedepankan penggunaan data serta teknologi dalam segala aspek
                        sehingga ketepatan dan kegiatan pengambilan keputusan dapat dilakukan
                        dalam menjawab tantangan baik yang datang dari luar maupun dari dalam
                        organisasi. 
                    </p>
                   
                </div>
            </div>
        </div>
    </div>
    
    <div class="video-info section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="video-thumb">
                        <img src="{{asset('landpage')}}/assets/images/video-thumb.jpg" alt="">
                        <a href="http://youtube.com" target="_blank"><i class="fa fa-play"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="section-heading">
                        <h2>Detailed Information On What We Do &amp; Who We Are</h2>
                        <div class="line-dec"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doers eiusmod tempor incididunt ut
                            labore et
                            dolore dolor.</p>
                    </div>
                    <div class="skills">
                        <div class="skill-slide marketing">
                            <div class="fill"></div>
                            <h6>SEO Marketing</h6>
                            <span>90%</span>
                        </div>
                        <div class="skill-slide digital">
                            <div class="fill"></div>
                            <h6>Digital Marketing</h6>
                            <span>80%</span>
                        </div>
                        <div class="skill-slide media">
                            <div class="fill"></div>
                            <h6>Social Media Management</h6>
                            <span>95%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
