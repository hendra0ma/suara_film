@extends('template.main_home')
@section('content')




<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<div class="resume-wrapper">
    <section class="profile section-padding bg-light">
        <div class="container">
            <div class="picture-resume-wrapper">
                <div class="picture-resume">
                    <span><img src="https://cf.shopee.co.id/file/880633155fad40ec9a995fcdb20b2fcb_tn" alt="" style="width:120px;height:120px;object-fit:cover"/></span>
                    <svg version="1.1" viewBox="0 0 350 350">

                        <defs>
                            <filter id="goo">
                                <feGaussianBlur in="SourceGraphic" stdDeviation="8" result="blur" />
                                <feColorMatrix in="blur" mode="matrix"
                                    values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 21 -9" result="cm" />
                            </filter>
                        </defs>


                        <g filter="url(#goo)">
                            <circle id="main_circle" class="st0" cx="171.5" cy="175.6" r="130" />

                            <circle id="circle" class="bubble0 st1" cx="171.5" cy="175.6" r="122.7" />
                            <circle id="circle" class="bubble1 st1" cx="171.5" cy="175.6" r="122.7" />
                            <circle id="circle" class="bubble2 st1" cx="171.5" cy="175.6" r="122.7" />
                            <circle id="circle" class="bubble3 st1" cx="171.5" cy="175.6" r="122.7" />
                            <circle id="circle" class="bubble4 st1" cx="171.5" cy="175.6" r="122.7" />
                            <circle id="circle" class="bubble5 st1" cx="171.5" cy="175.6" r="122.7" />
                            <circle id="circle" class="bubble6 st1" cx="171.5" cy="175.6" r="122.7" />
                            <circle id="circle" class="bubble7 st1" cx="171.5" cy="175.6" r="122.7" />
                            <circle id="circle" class="bubble8 st1" cx="171.5" cy="175.6" r="122.7" />
                            <circle id="circle" class="bubble9 st1" cx="171.5" cy="175.6" r="122.7" />
                            <circle id="circle" class="bubble10 st1" cx="171.5" cy="175.6" r="122.7" />

                        </g>
                    </svg>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="name-wrapper">
                <h1>Joko <br> Hartanto</h1><!-- YOUR NAME AND LAST NAME  -->
            </div>
            <div class="clearfix"></div>
            <div class="contact-info clearfix">
                <ul class="list-titles">
                    <li>Call</li>
                    <li>Mail</li>
                    <li>Home</li>
                </ul>
                <ul class="list-content ">
                    <li>+34 123 456 789</li> <!-- YOUR PHONE NUMBER  -->
                    <li>joko.hartanto@gmail.com</li> <!-- YOUR EMAIL -->
                
                    <li>Malang, Lowokwaru</li> <!-- YOUR STATE AND COUNTRY  -->
                </ul>
            </div>
            <div class="contact-presentation">
                <!-- YOUR PRESENTATION RESUME  -->
                <p><span class="bold">Lorem</span> ipsum dolor sit amet, consectetur adipiscing elit. Vivamus euismod
                    congue nisi, nec consequat quam. In consectetur faucibus turpis eget laoreet. Sed nec imperdiet
                    purus. </p>
            </div>
            <div class="contact-social clearfix">
                <ul class="list-titles">
                    <li>Twitter</li>
                    <li>Dribbble</li>
                    <li>Codepen</li>
                </ul>
                <ul class="list-content">
                    <!-- REMEMBER TO PUT THE URL ON THE HREF TAG  -->
                    <li><a href="">@janderson</a></li> <!-- YOUR TWITTER USER  -->
                    <li><a href="">janderson</a></li> <!-- YOUR DRIBBBLE USER  -->
                    <li><a href="">janderson</a></li> <!-- YOUR BEHANCE USER  -->
                </ul>
            </div>
        </div>
    </section>
    <section class="experience section-padding">
        <div class="container">
            <h3 class="experience-title">Experience</h3>
            <div class="experience-wrapper">
                    <div class="company-wrapper clearfix">
                    <div class="experience-title">Company</div> <!-- NAME OF THE COMPANY YOUWORK WITH  -->
                    <div class="time">Nov 2012 - Present</div> <!-- THE TIME YOU WORK WITH THE COMPANY  -->
                </div>

                

                <div class="job-wrapper clearfix">
                    <div class="experience-title">Musisi</div> <!-- JOB TITLE  -->
                    <div class="company-description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a elit facilisis, adipiscing
                            leo in, dignissim magna.</p> <!-- JOB DESCRIPTION  -->
                    </div>
                </div>

                <div class="company-wrapper clearfix">
                    <div class="experience-title">Company</div> <!-- NAME OF THE COMPANY YOUWORK WITH  -->
                    <div class="time">Nov 2015 - Present</div> <!-- THE TIME YOU WORK WITH THE COMPANY  -->
                </div>

                <div class="job-wrapper clearfix">
                    <div class="experience-title">Aktris Film</div> <!-- JOB TITLE  -->
                    <div class="company-description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a elit facilisis, adipiscing
                            leo in, dignissim magna.</p> <!-- JOB DESCRIPTION  -->
                    </div>
                </div>

            </div>
            <!--Skill experience-->

            <div class="section-wrapper clearfix">
                <h3 class="section-title">Skills</h3> <!-- YOUR SET OF SKILLS  -->
                <ul>
                    <li class="skill-percentage">Impersonate</li>
                    <li class="skill-percentage">Acting for Film</li>

                </ul>

            </div>

            <div class="section-wrapper clearfix">
                <h3 class="section-title">Hobbies</h3> <!-- DESCRIPTION OF YOUR HOBBIES -->
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a elit facilisis, adipiscing leo in,
                    dignissim magna.</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a elit facilisis, adipiscing leo in,
                    dignissim magna.</p>
            </div>

        </div>
    </section>

    <div class="clearfix"></div>
</div>


@endsection
