

@extends('template.main_film')
@section('content')
    <div class="main-banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="caption header-text">
                        <h4>
                            <em>SWARA</em> RESWARA ABADI
                        </h4>
                        <p>PT. SWARA RESWARA ABADI berdiri pada tahun 2018 tepatnya di tanggal 8 Mei
                            2018 di kota Jakarta Selatan berdasarkan akta notaris yang dibuat oleh
                            Ilmiawan Dekrit Supatmo, SH. MH. Serta telah memperoleh persetujuan
                            Menteri Hukum dan Hak Asasi Manusia Republik Indonesia.
                    </div>
                    <div class="second-button"><a href="faqs.html">Check our FAQs</a></div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="services section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-heading">
                                <h2>
                                    PRODUCT<em> PROMOTION EVENT </em> 

                                </h2>
                                <div class="line-dec"></div>
                                <p>Membantu personal / lembaga / perusahaan untuk
                                    mempromosikan atau mencitrakan dan mengenalkan
                                    kepada publik / masyarakat berbagai produk baru
                                    ataupun renewal</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="service-item">
                                <div class="icon">
                                    <img src="{{asset('landpage')}}/assets/images/services-01.jpg" alt="discover SEO"
                                        class="templatemo-feature">
                                </div>
                                <h4>EXHIBITION / EXPO</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="service-item">
                                <div class="icon">
                                    <img src="{{asset('landpage')}}/assets/images/services-02.jpg" alt="data analysis"
                                        class="templatemo-feature">
                                </div>
                                <h4>ANNIVERSARY / BIRTHDAY EVENT</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="service-item">
                                <div class="icon">
                                    <img src="{{asset('landpage')}}/assets/images/services-03.jpg" alt="precise data"
                                        class="templatemo-feature">
                                </div>
                                <h4>PTRADITIONAL & MODERN DANCE</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="service-item">
                                <div class="icon">
                                    <img src="{{asset('landpage')}}/assets/images/services-04.jpg" alt="SEO marketing"
                                        class="templatemo-feature">
                                </div>
                                <h4>PRODUCT LAUNCHING & PROMOTION EVENT</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="projects section" id="projects">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Discover Our <em>Work</em> &amp; <span>Projects</span></h2>
                        <div class="line-dec"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doers eiusmod.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-features owl-carousel">
                        <div class="item">
                            <img src="{{asset('landpage')}}/assets/images/projects-01.jpg" alt="">
                            <div class="down-content">
                                <h4>Digital Agency HTML Templates</h4>
                                <a href="#"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{asset('landpage')}}/assets/images/projects-02.jpg" alt="">
                            <div class="down-content">
                                <h4>Admin Dashboard CSS Templates</h4>
                                <a href="#"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{asset('landpage')}}/assets/images/projects-03.jpg" alt="">
                            <div class="down-content">
                                <h4>Best Responsive Website Layouts</h4>
                                <a href="#"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{asset('landpage')}}/assets/images/projects-04.jpg" alt="">
                            <div class="down-content">
                                <h4>HTML CSS Layouts for your websites</h4>
                                <a href="#"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{asset('landpage')}}/assets/images/projects-02.jpg" alt="">
                            <div class="down-content">
                                <h4>Bootstrap 5 Themes for Free</h4>
                                <a href="#"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{asset('landpage')}}/assets/images/projects-03.jpg" alt="">
                            <div class="down-content">
                                <h4>Mobile Friendly Website Layouts</h4>
                                <a href="#"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection