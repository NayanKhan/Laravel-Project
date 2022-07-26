<!-- Header -->
<header class="navbar-header">
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{route ('home')}}">
                <span>
                    <img style="width: 150px;margin-top: 10px;margin-bottom: 10px;" src="{{asset('frontend/assets/images/Codex-Hunter-Logo.png')}}" alt="">
                </span>
            </a>
            <button class="navbar-toggler" type="button" id="sidebarCollapse">
                <span class="navbar-toggler-icon icofont-navigation-menu"></span>
            </button>
            <div class="navbar-collapse justify-content-center" id="sidebar">

             
                <ul class="navbar-nav">
                     

                    <li class="nav-item active">
                        <a class="nav-link section-scroll" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link section-scroll" href="{{route('allcourse')}}">Courses</a>
                    </li>

                    <!--  <li class="nav-item"> About Us
                         <a data-scroll="" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         
                        </a> 
                        <div class="dropdown-menu dropdown-menu-about" aria-labelledby="navbarDropdown">
                            <ul>
                                <li>
                                    <a class="dropdown-item" href="#">About Us</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Privilege Card</a>
                                </li>
                            </ul>
                        </div> 
                    </li> Header -->                           
                    <li class="nav-item">
                        <a data-scroll="" class="nav-link section-scroll" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll="" class="nav-link section-scroll" href="#">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll="" class="nav-link section-scroll" href="#">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll="" class="nav-link section-scroll" href="{{route('contact')}}">Contact Us</a>
                    </li> 
                    {{-- <li class="nav-item">
                        <a data-scroll="" class="nav-link section-scroll live" href="#">Contact Us</a>
                    </li> --}}
                    
                </ul>
            </div>

            <div class="ml-auto ml-auto-mobile top-bar">

                <a href="#" class="login-btn"><i class="icofont-login"></i> Signin</a>
                <a href="#" class="login-btn  mobile-hide"><i class="icofont-business-man-alt-1"></i> Signup</a>
                                                                            

            </div>
        </div>
    </nav>
</header>
<!--Header-->  