
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky" style="top:0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo text-white">
                            <h1 class="mb-0">Swara Film</h1>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/" class="{{ Route::is('landing') ? 'active' : '' }}">Home</a></li>
                            <li class="scroll-to-section"><a href="{{route('listFilm')}}" class="{{ Route::is('listFilm') ? 'active' : '' }}">Film</a></li>
                            <li class="scroll-to-section"><a href="{{route('galeriBiodata')}}" class="{{ Route::is('galeriBiodata') ? 'active' : '' }}">Biodata</a></li>
                            <li class="has-sub">
                                <a href="javascript:void(0)">Layanan</a>
                                <ul class="sub-menu">
                                    <li><a href="">COMPANY / CUSTOMER GATHERING</a></li>
                                    <li><a href="">ARTIST & TALENT MANAGEMENT</a></li>
                                    <li><a href="">SEMINAR</a></li>
                                    <li><a href="">ENTERTAINMENT PROPERTY</a></li>
                                    <li><a href="">PRODUCT LAUNCHING & PROMOTION EVENT</a></li>
                                    <li><a href="">EXHIBITION / EXPO</a></li>
                                    <li><a href="">ANNIVERSARY / BIRTHDAY EVENT</a></li>
                                    <li><a href="">TRADITIONAL & MODERN DANCE</a></li>
                                </ul>
                            </li>
                            {{-- <li class="scroll-to-section"><a href="#infos">Infos</a></li> --}}
                            <li class="scroll-to-section"><a href="{{route('tentang')}}" class="{{ Route::is('tentang') ? 'active' : '' }}">Tentang</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
