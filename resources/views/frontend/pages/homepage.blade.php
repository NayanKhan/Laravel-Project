@extends('frontend.layout.template')

@section('body')
    <!--Begin Hero Section-->
<section id="home" class="pd-tp-80 hero">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-12 col-sm-12">
                <div class="hero-text">
                    <h2>Change Your Life with Codex Hunter</h2>
                    <p>Codex Hunter teaches you the skills you need to thrive and earn online - now and in the future.</p>

                    <a href="{{route('allcourse')}}" class="btn btn-blue-1">View Courses</a>
                </div>
            </div>

            <div class="img-right">
                <img src="{{asset('frontend/assets/images/hero-image.png')}}" alt="">
            </div>
        </div>
    </div>

    <div class="shapes">

        <svg class="abstract-svg-1" viewBox="0 0 102 102">
            <circle cx="50" cy="50" r="50"></circle>
        </svg>


        <svg class="abstract-svg-3" viewBox="0 0 401.998 401.998">

            <path d="M377.87,24.126C361.786,8.042,342.417,0,319.769,0H82.227C59.579,0,40.211,8.042,24.125,24.126
C8.044,40.212,0.002,59.576,0.002,82.228v237.543c0,22.647,8.042,42.014,24.123,58.101c16.086,16.085,35.454,24.127,58.102,24.127
h237.542c22.648,0,42.011-8.042,58.102-24.127c16.085-16.087,24.126-35.453,24.126-58.101V82.228
C401.993,59.58,393.951,40.212,377.87,24.126z M365.448,319.771c0,12.559-4.47,23.314-13.415,32.264
c-8.945,8.945-19.698,13.411-32.265,13.411H82.227c-12.563,0-23.317-4.466-32.264-13.411c-8.945-8.949-13.418-19.705-13.418-32.264
V82.228c0-12.562,4.473-23.316,13.418-32.264c8.947-8.946,19.701-13.418,32.264-13.418h237.542
c12.566,0,23.319,4.473,32.265,13.418c8.945,8.947,13.415,19.701,13.415,32.264V319.771L365.448,319.771z" />

        </svg>

        <svg class="abstract-svg-4" viewBox="0 0 102 102">
            <circle cx="50" cy="50" r="50"></circle>
        </svg>

    </div>

</section>

      

        <!--About-->

        <section id="about">
            <!--container-->
            <div class="container">
                <div class="row ">

                    <div class="col-md-4 col-lg-4 col-12 wow slideInDown">
                        <div class="icon-block active block-1">
                            <i class="icofont-layers"></i>
                            <div class="icon-block-info">
                                <h3>7630+ Graduates</h3>
                                <p>Shikhbe Shobai has trained 8559+ trainees so far. And it's increasing everyday.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-12 wow slideInDown">
                        <div class="icon-block block-2">
                            <i class="icofont-money"></i>
                            <div class="icon-block-info">
                                <h3>$12,00,000+ Earned</h3>
                                <p>Our students has reached the combined earning of $1 million (USD) so far.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-12 wow slideInDown">
                        <div class="icon-block block-3">
                            <i class="icofont-users"></i>
                            <div class="icon-block-info">
                                <h3>390000+ Members</h3>
                                <p>Over 390K+ people are connected with us through social media and supporting our mission.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="shapes">

                <svg class="abstract-svg-1" viewBox="0 0 491.858 491.858">

                    <path d="M491.858,442.461c0,13.931-11.293,25.224-25.224,25.224L245.93,373.097L25.224,467.686
C11.292,467.686,0,456.392,0,442.461L227.011,32.58c0,0,18.918-18.918,37.834,0C283.764,51.499,491.858,442.461,491.858,442.461z" />

                </svg>

                <svg class="abstract-svg-2" viewBox="0 0 512 512">

                    <path d="M511.003,496.262l-33.019-72.64c-42.012-92.429-42.012-242.82,0-335.245l33.019-72.641
c1.92-4.224,1.018-9.196-2.262-12.477c-3.279-3.28-8.249-4.179-12.477-2.262l-72.641,33.019
c-92.431,42.013-242.82,42.012-335.245,0L15.737,0.997C11.514-0.919,6.543-0.021,3.26,3.259c-3.28,3.281-4.182,8.253-2.262,12.477
l33.019,72.641c42.012,92.428,42.012,242.817,0,335.245l-33.019,72.64c-1.92,4.224-1.018,9.196,2.262,12.477
c3.283,3.283,8.257,4.182,12.477,2.262l72.64-33.019c92.425-42.012,242.817-42.015,335.245,0l72.641,33.019
c1.478,0.671,3.046,0.997,4.603,0.997c2.893,0,5.74-1.128,7.874-3.26C512.02,505.458,512.922,500.487,511.003,496.262z
M432.834,457.716C384.08,435.556,320.041,424.477,256,424.477s-128.081,11.079-176.835,33.239l-45.618,20.736l20.736-45.618
c44.319-97.507,44.319-256.163,0-353.669L33.547,33.546l45.618,20.736c97.505,44.319,256.161,44.322,353.669,0l45.619-20.736
l-20.736,45.619c-44.32,97.505-44.32,256.16,0,353.669l20.736,45.618L432.834,457.716z" />

                </svg>

                <svg class="abstract-svg-3" viewBox="0 0 510 510">

                    <path d="M255,0C114.75,0,0,114.75,0,255s114.75,255,255,255s255-114.75,255-255S395.25,0,255,0z M255,459
c-112.2,0-204-91.8-204-204S142.8,51,255,51s204,91.8,204,204S367.2,459,255,459z" />

                </svg>

                <svg class="abstract-svg-4" viewBox="0 0 184.58 184.58">

                    <path d="M182.004,146.234L108.745,19.345c-3.435-5.949-9.586-9.5-16.455-9.5s-13.021,3.551-16.455,9.5L2.576,146.234
c-3.435,5.948-3.435,13.051,0,19c3.435,5.949,9.586,9.5,16.455,9.5h146.518c6.869,0,13.021-3.552,16.455-9.5
C185.438,159.285,185.438,152.182,182.004,146.234z M169.88,158.234c-0.435,0.751-1.725,2.5-4.331,2.5H19.031
c-2.606,0-3.896-1.749-4.331-2.5c-0.434-0.752-1.302-2.744,0.001-5L87.96,26.345c1.303-2.256,3.462-2.5,4.33-2.5
s3.027,0.244,4.33,2.5l73.259,126.889C171.181,155.49,170.313,157.482,169.88,158.234z" />

                </svg>

                <svg class="abstract-svg-5" viewBox="0 0 102 102">
                    <circle cx="50" cy="50" r="50"></circle>
                </svg>

            </div>
            <!--container-->
        </section>

        <!--About-->
        <section id="about-features" >
            <!--container-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="features-text pd-tp-40">
                            <span class="subtitle">Projects</span>
                            <h2 class="title-h2">Project Based Learning</h2>
                            <p>Shikhbe Shobai provides 100% project oriented training. It means you will do real time client's projects as your assignments. Mentors will make you involved in dealing with the real client's experience.</p>
                            <a href="{{route('allcourse')}}" class="btn btn-blue-1">View Courses</a>

                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-12">
                        <div class="box-img-left">

                            <img src="{{asset('frontend/assets/images/image2.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!--container-->

        </section>
        <!--About -->

        
        <!--Services -->
        <section id="services" class="bg-color ">
            <div class="container">
                <!--container-->
                <div class="row">

                    <div class="col-lg-7 col-md-7  col-12">
                        <img src="{{asset('frontend/assets/images/Support.png')}}" alt="">

                    </div>

                    <div class="col-lg-5 col-md-5  col-12">
                        <div class="features-text ">
                            <span class="subtitle">Get help</span>
                            <h2 class="title-h2">Lifetime Free Support</h2>
                            <p>During the training and after the training, Shikhbe Shobai provides offline and online support to all of their students whenever needed. And it's free for the lifetime!</p>
                            <a href="#" target="_blank" class="btn btn-blue-1">Get Support</a>

                        </div>
                    </div>

                </div>
            </div>

            <div class="shapes">

                <svg class="abstract-svg-1" viewBox="0 0 102 102">
                    <circle cx="50" cy="50" r="50"></circle>
                </svg>

                <svg class="abstract-svg-2" viewBox="0 0 438.536 438.536">

                    <path d="M414.41,24.123C398.333,8.042,378.963,0,356.315,0H82.228C59.58,0,40.21,8.042,24.126,24.123
C8.045,40.207,0.003,59.576,0.003,82.225v274.084c0,22.647,8.042,42.018,24.123,58.102c16.084,16.084,35.454,24.126,58.102,24.126
h274.084c22.648,0,42.018-8.042,58.095-24.126c16.084-16.084,24.126-35.454,24.126-58.102V82.225
C438.532,59.576,430.49,40.204,414.41,24.123z" />

                </svg>

                <svg class="abstract-svg-3" viewBox="0 0 401.998 401.998">

                    <path d="M377.87,24.126C361.786,8.042,342.417,0,319.769,0H82.227C59.579,0,40.211,8.042,24.125,24.126
C8.044,40.212,0.002,59.576,0.002,82.228v237.543c0,22.647,8.042,42.014,24.123,58.101c16.086,16.085,35.454,24.127,58.102,24.127
h237.542c22.648,0,42.011-8.042,58.102-24.127c16.085-16.087,24.126-35.453,24.126-58.101V82.228
C401.993,59.58,393.951,40.212,377.87,24.126z M365.448,319.771c0,12.559-4.47,23.314-13.415,32.264
c-8.945,8.945-19.698,13.411-32.265,13.411H82.227c-12.563,0-23.317-4.466-32.264-13.411c-8.945-8.949-13.418-19.705-13.418-32.264
V82.228c0-12.562,4.473-23.316,13.418-32.264c8.947-8.946,19.701-13.418,32.264-13.418h237.542
c12.566,0,23.319,4.473,32.265,13.418c8.945,8.947,13.415,19.701,13.415,32.264V319.771L365.448,319.771z" />

                </svg>

                <svg class="abstract-svg-4" viewBox="0 0 184.58 184.58">

                    <path d="M182.004,146.234L108.745,19.345c-3.435-5.949-9.586-9.5-16.455-9.5s-13.021,3.551-16.455,9.5L2.576,146.234
c-3.435,5.948-3.435,13.051,0,19c3.435,5.949,9.586,9.5,16.455,9.5h146.518c6.869,0,13.021-3.552,16.455-9.5
C185.438,159.285,185.438,152.182,182.004,146.234z M169.88,158.234c-0.435,0.751-1.725,2.5-4.331,2.5H19.031
c-2.606,0-3.896-1.749-4.331-2.5c-0.434-0.752-1.302-2.744,0.001-5L87.96,26.345c1.303-2.256,3.462-2.5,4.33-2.5
s3.027,0.244,4.33,2.5l73.259,126.889C171.181,155.49,170.313,157.482,169.88,158.234z" />

                </svg>

                <svg class="abstract-svg-5" viewBox="0 0 102 102">
                    <circle cx="50" cy="50" r="50"></circle>
                </svg>

            </div>
            <!--container-->
        </section>
        <!--Services -->


        <!--Services -->
        <section id="services" class="bg-color-2">
            <div class="container">
                <!--container-->
                <div class="row">

                    <div class="col-lg-5 col-md-5  col-12">
                        <div class="features-text ">
                            <span class="subtitle">Earning</span>
                            <h2 class="title-h2">Learn to Earn</h2>
                            <p>The goal of our training is to make you able to earn. Our students: work in online freelancing marketplaces such as Upwork, Fiverr etc, do remote jobs in international companies, do local jobs in good companies.</p>
                            <a href="#" class="btn btn-blue-1">View Courses</a>

                        </div>
                    </div>

                    <div class="col-lg-7 col-md-7  col-12">
                        <img src="{{asset('frontend/assets/images/image3.png')}}" alt="">

                    </div>

                </div>
            </div>

            <div class="shapes">

                <svg class="abstract-svg-1" viewBox="0 0 102 102">
                    <circle cx="50" cy="50" r="50"></circle>
                </svg>

                <svg class="abstract-svg-2" viewBox="0 0 438.536 438.536">

                    <path d="M414.41,24.123C398.333,8.042,378.963,0,356.315,0H82.228C59.58,0,40.21,8.042,24.126,24.123
C8.045,40.207,0.003,59.576,0.003,82.225v274.084c0,22.647,8.042,42.018,24.123,58.102c16.084,16.084,35.454,24.126,58.102,24.126
h274.084c22.648,0,42.018-8.042,58.095-24.126c16.084-16.084,24.126-35.454,24.126-58.102V82.225
C438.532,59.576,430.49,40.204,414.41,24.123z" />

                </svg>

                <svg class="abstract-svg-3" viewBox="0 0 401.998 401.998">

                    <path d="M377.87,24.126C361.786,8.042,342.417,0,319.769,0H82.227C59.579,0,40.211,8.042,24.125,24.126
C8.044,40.212,0.002,59.576,0.002,82.228v237.543c0,22.647,8.042,42.014,24.123,58.101c16.086,16.085,35.454,24.127,58.102,24.127
h237.542c22.648,0,42.011-8.042,58.102-24.127c16.085-16.087,24.126-35.453,24.126-58.101V82.228
C401.993,59.58,393.951,40.212,377.87,24.126z M365.448,319.771c0,12.559-4.47,23.314-13.415,32.264
c-8.945,8.945-19.698,13.411-32.265,13.411H82.227c-12.563,0-23.317-4.466-32.264-13.411c-8.945-8.949-13.418-19.705-13.418-32.264
V82.228c0-12.562,4.473-23.316,13.418-32.264c8.947-8.946,19.701-13.418,32.264-13.418h237.542
c12.566,0,23.319,4.473,32.265,13.418c8.945,8.947,13.415,19.701,13.415,32.264V319.771L365.448,319.771z" />

                </svg>

                <svg class="abstract-svg-4" viewBox="0 0 184.58 184.58">

                    <path d="M182.004,146.234L108.745,19.345c-3.435-5.949-9.586-9.5-16.455-9.5s-13.021,3.551-16.455,9.5L2.576,146.234
c-3.435,5.948-3.435,13.051,0,19c3.435,5.949,9.586,9.5,16.455,9.5h146.518c6.869,0,13.021-3.552,16.455-9.5
C185.438,159.285,185.438,152.182,182.004,146.234z M169.88,158.234c-0.435,0.751-1.725,2.5-4.331,2.5H19.031
c-2.606,0-3.896-1.749-4.331-2.5c-0.434-0.752-1.302-2.744,0.001-5L87.96,26.345c1.303-2.256,3.462-2.5,4.33-2.5
s3.027,0.244,4.33,2.5l73.259,126.889C171.181,155.49,170.313,157.482,169.88,158.234z" />

                </svg>

                <svg class="abstract-svg-5" viewBox="0 0 102 102">
                    <circle cx="50" cy="50" r="50"></circle>
                </svg>

            </div>
            <!--container-->
        </section>
        <!--Services -->


        <!-- Privilege Card Start  -->
        <section id="services" class="bg-color ">
            <div class="container">
                <!--container-->
                <div class="row">

                    <div class="col-lg-7 col-md-7  col-12">
                        <img src="{{asset('frontend/assets/images/Card-Mockup.png')}}" alt="" class="img-fluid" style="width: 80%; display: block; margin: 50px auto 0;">

                    </div>

                    <div class="col-lg-5 col-md-5  col-12">
                        <div class="features-text ">
                            <span class="subtitle">Shikhbe Shobai</span>
                            <h2 class="title-h2">Privilege card</h2>
                            <p>Shikhbe Shobai has introduced a new service from October 1, 2021, in association with various restaurant, Life style company, Tech company and Bank Asia Ltd. The Privilege card by Shikhbe Shobai Solutions discounts and benefits across a wide range of categories such as dining, life Style, Hotels, Educational institution, Banking service as well as shopping.</p>
                            <a href="#" class="btn btn-blue-1">See Details</a>

                        </div>
                    </div>

                </div>
            </div>

            <div class="shapes">

                <svg class="abstract-svg-1" viewBox="0 0 102 102">
                    <circle cx="50" cy="50" r="50"></circle>
                </svg>

                <svg class="abstract-svg-2" viewBox="0 0 438.536 438.536">

                    <path d="M414.41,24.123C398.333,8.042,378.963,0,356.315,0H82.228C59.58,0,40.21,8.042,24.126,24.123
C8.045,40.207,0.003,59.576,0.003,82.225v274.084c0,22.647,8.042,42.018,24.123,58.102c16.084,16.084,35.454,24.126,58.102,24.126
h274.084c22.648,0,42.018-8.042,58.095-24.126c16.084-16.084,24.126-35.454,24.126-58.102V82.225
C438.532,59.576,430.49,40.204,414.41,24.123z" />

                </svg>

                <svg class="abstract-svg-3" viewBox="0 0 401.998 401.998">

                    <path d="M377.87,24.126C361.786,8.042,342.417,0,319.769,0H82.227C59.579,0,40.211,8.042,24.125,24.126
C8.044,40.212,0.002,59.576,0.002,82.228v237.543c0,22.647,8.042,42.014,24.123,58.101c16.086,16.085,35.454,24.127,58.102,24.127
h237.542c22.648,0,42.011-8.042,58.102-24.127c16.085-16.087,24.126-35.453,24.126-58.101V82.228
C401.993,59.58,393.951,40.212,377.87,24.126z M365.448,319.771c0,12.559-4.47,23.314-13.415,32.264
c-8.945,8.945-19.698,13.411-32.265,13.411H82.227c-12.563,0-23.317-4.466-32.264-13.411c-8.945-8.949-13.418-19.705-13.418-32.264
V82.228c0-12.562,4.473-23.316,13.418-32.264c8.947-8.946,19.701-13.418,32.264-13.418h237.542
c12.566,0,23.319,4.473,32.265,13.418c8.945,8.947,13.415,19.701,13.415,32.264V319.771L365.448,319.771z" />

                </svg>

                <svg class="abstract-svg-4" viewBox="0 0 184.58 184.58">

                    <path d="M182.004,146.234L108.745,19.345c-3.435-5.949-9.586-9.5-16.455-9.5s-13.021,3.551-16.455,9.5L2.576,146.234
c-3.435,5.948-3.435,13.051,0,19c3.435,5.949,9.586,9.5,16.455,9.5h146.518c6.869,0,13.021-3.552,16.455-9.5
C185.438,159.285,185.438,152.182,182.004,146.234z M169.88,158.234c-0.435,0.751-1.725,2.5-4.331,2.5H19.031
c-2.606,0-3.896-1.749-4.331-2.5c-0.434-0.752-1.302-2.744,0.001-5L87.96,26.345c1.303-2.256,3.462-2.5,4.33-2.5
s3.027,0.244,4.33,2.5l73.259,126.889C171.181,155.49,170.313,157.482,169.88,158.234z" />

                </svg>

                <svg class="abstract-svg-5" viewBox="0 0 102 102">
                    <circle cx="50" cy="50" r="50"></circle>
                </svg>

            </div>
            <!--container-->
        </section>
        <!--Privilege Card End -->


        <!--Services -->
        <section id="features">
            <div class="container">
                <!--container-->
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title-h2" style="text-align: center;">How To Change Your Life?</h2>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"> <img src="{{asset('frontend/assets/images/tab-1.png')}}" alt=""></div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"><img src="{{asset('frontend/assets/images/tab-3.png')}}" alt=""></div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel"><img src="{{asset('frontend/assets/images/tab-2.png')}}" alt=""></div>
                            <div class="tab-pane fade" id="nav-contact-1" role="tabpanel"><img src="{{asset('frontend/assets/images/tab-4.png')}}" alt=""></div>
                        </div>
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active link-color-1" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><i class="icofont-unique-idea"></i><strong>Engage with ideas</strong>
     <p>Lorem ipsum dolor sit amet,<br> consectetur adipisicing elit.</p> </a>
                                <a class="nav-item nav-link link-color-2" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="icofont-anchor"></i><strong>Manage Marketing</strong>
      <p> Lorem ipsum dolor sit amet,<br> consectetur adipisicing elit.</p></a>
                                <a class="nav-item nav-link link-color-3" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"><i class="icofont-ui-chat"></i><strong>Chat comunication</strong><p> Lorem ipsum dolor sit amet,<br> consectetur adipisicing elit.</p></a>
                                <a class="nav-item nav-link link-color-4" data-toggle="tab" href="#nav-contact-1" role="tab" aria-controls="nav-contact" aria-selected="false"><i class="icofont-files-stack"></i><strong>File Sharing</strong><p> 
       Lorem ipsum dolor sit amet,<br> consectetur adipisicing elit.</p></a>
                            </div>
                        </nav>
                    </div>
                </div>

                <!--container-->
            </div>
        </section>


        <section id="video" class= " clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-video">
                            <img src="{{asset('frontend/assets/images/lab.jpg')}}" class="box-video-img" alt="">

                            <div class="box-video-btn">
                                <a href="https://www.youtube.com/embed/uLDvdlW9VEY" class="video-modal"> <img src="{{asset('frontend/assets/images/play.svg')}}" alt=""></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!--testimonials-->

        <section id="testimonials" class="pb-5">

            <div class="container-page ">
                <!--container-->

                <div class="container">
                    <div class="row">

                        <div class=" col-md-4 col-12">
                            <div class="text-quote">

                                <img src="{{asset('frontend/assets/images/testimonial/quote.png')}}" alt="">

                                <h2 class="title-h2">Success Stories</h2>
                                <p class="font-p mg-tp-60">
                                    Coming from all walks of life, our graduates have something in common: they decided to learn with us to pursue their dreams.
                                </p>
                                <a href="" target="_blank" class="btn btn-blue-1">See All Success Stories</a>
                            </div>

                            <div class="slider-avatar">

                                <div data-slide="1" class="item-image avatar1 medium-avtar">
                                    <img src="{{asset('frontend/assets/images/testimonial/nayan.jpg')}}">
                                </div>
                                <div data-slide="2" class="item-image avatar2 medium-avtar">
                                    <img src="{{asset('frontend/assets/images/testimonial/alif-small.jpg')}}">
                                </div>
                                <div data-slide="3" class="item-image avatar3 medium-avtar">
                                    <img src="{{asset('frontend/assets/images/testimonial/alif-small.jpg')}}">
                                </div>

                            </div>

                        </div>

                        <div class=" col-md-8 col-12">
                            <div class="testimonial-slider">

                                <div class="item">

                                    <div class="avatar-item">

                                        <img src="https://www.shikhbeshobai.com/public/frontend/assets/images/testimonial/imran.jpg" alt="">

                                    </div>
                                    <div class="item-inner">

                                        <p>পরিবারের আর্থিক অবস্থা ভালো ছিল না। ইচ্ছা ছিল ভাল কিছু করে উপার্জন করার। একদিন ফেসবুকের মাধ্যমে শিখবে সবাই সম্পর্কে জানতে পাই। তারপর যাচাই বাছাই করে ভর্তি হয়ে যাই তাদের ওয়েব ডিজাইনের অনলাইন কোর্সে। তারপর থেকে উঠে পড়ে লাগলাম স্কিল ডেভেলপমেন্ট এর পিছনে। এক মাস ফ্রিল্যান্সিং ট্রেনিং এর পর নেমে পরলাম অনলাইন মার্কেটপ্লেসে। আল্লাহ্‌র রহমতে কাজ আসা শুরু করে। এখন আমার তিনটি ফিক্সড ক্লাইন্ট। সবচেয়ে বড় ব্যাপার হচ্ছে আমি এখানে আমাদের বাড়ির কাজ ধরেছি।</p>

                                        <div class="avatar-info">
                                            <h4>মোঃ নয়ন খান </h4>
                                            <small>ফুল স্ট্যাক ওয়েব ডেভেলপমেন্ট</small>
                                        </div>

                                    </div>

                                </div>

                                <div class="item">

                                    <div class="avatar-item">

                                        <img src="https://www.shikhbeshobai.com/public/frontend/assets/images/testimonial/sabiha.jpg" alt="">

                                    </div>

                                    <div class="item-inner">

                                        <p>মূলত অনেক কারনই রয়েছে ফ্রিল্যান্সিং করার পেছনে। আমার স্বামী ডিফেন্সে এ জব করে, ২ বছর পর পরই বদলি হতে হয়। সে ক্ষেত্রে এক জায়গায় বেশিদিন জব করাও সম্ভব হচ্চিল না। অন্যদিকে মেয়ে সন্তান হবার পর চাকরি করাটা প্রায় অসম্ভবই হয়ে গিয়েছিল। পাশাপাশি আমি হচ্ছি ভ্রমণ পিপাশু। তাই আর কিছু না ভেবে খোঁজ করতে থাকি ঘরে বসে কিছু করার। ফেসবুকের মাধ্যমে শিখবে সবাই সম্পর্কে জানতে পাই। সেখান থেকে ইউআই/ইউএক্স এর অফলাইন কোর্সটি করি। অনলাইনে ফ্রিল্যান্সিং করার পর আলহামদুলিল্লাহ এখন সব কিছুই করতে পারছি।</p>

                                        <div class="avatar-info">
                                            <h4>সাবিহা আরেফিন </h4>
                                            <small>ফাইভার লেভেল ২ সেলার</small>
                                        </div>

                                    </div>

                                </div>

                                <div class="item">

                                    <div class="avatar-item">

                                        <img src="https://www.shikhbeshobai.com/public/frontend/assets/images/testimonial/alif.jpg" alt="">

                                    </div>

                                    <div class="item-inner">

                                        <p>ফ্রিল্যান্সিং এর যাত্রা শুরু শিখবে সবাই এর হাত ধরেই। এরপর ধীরে ধীরে পার্মানেন্ট কিছু ক্লাইন্ট পেয়ে যাই। প্রায় মাসেই ৬ ডিজিট উপার্জন থাকে। আল্লাহ্‌র রহমতে নিজের পরিবারের সম্পূর্ণ খরচ চালাতে এখন সক্ষম এবং একটি জমিও কিনেছি কিস্তিতে। আলহামদুলিল্লাহ্‌ সব ভালোই যাচ্ছে।  </p>

                                        <div class="avatar-info">
                                            <h4>ইমরান হোসেন আলিফ</h4>
                                            <small>ফাইভার লেভেল ২ সেলার</small>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                        <!-- avatar images -->

                        <!-- avatar images -->

                    </div>
                </div>
                <!--container-->

            </div>

        </section>
        <!-- testimonials -->
        {{-- <section class="newsletter">
            <div class="container">
                <div class="newsletter-inner row">
                    <div class="col-md-6">
                        <h2>Head Office - Banani Branch</h2>
                        <p>House# 74 Road# 7, <br>Block# H, Banani, Dhaka-1213 <br>
                        Phone: 01758066329, 01758066325, 01872650686, 01872657169 </p>
                    </div>

                    <div class="col-md-6">
                        <h2>Branch Office - Mirpur Branch</h2>
                        <p>HB Enterprise Bhaban. <br>Plot-9, Road-4, Section -7, <br>Mirpur-Dhaka 1216 <br>Phone: 01872650688, 01872657167, 01872650685</p>
                    </div>

                    <!-- <div class="col-md-4">
                        <h2>Dhanmondi Branch</h2>
                        <p>House # 21/b, <br>Dhanmondi 27 old, New 16, <br>Dhaka 1205 Phone: 01870726738, 01717808205, 01872657168</p>
                    </div> -->
                </div>
            </div>
        </section> --}}
@endsection