@extends('frontend.layout.template')

@section('body')

<section class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="contact-us">
    <div class="container">
        <div class="row">

            <div class="col-md-8 contact-page">
                <span class="divder"> Have any Queries? </span>
                @if ( Session::has('success_message') )
                    <div class="alert alert-success mt-4">{{Session::get('success_message')}}</div>
                @endif
                <form action="{{route('contact.send')}}" method="POST" enctype="multipart/form-data" class="contactus-form">
                    @csrf
                    <input type="hidden" name="" value="">						
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="name" class="form-control" required="required" autocomplete="off" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
                            </div>

                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" name="phone" class="form-control" required="required" autocomplete="off">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" name="email" class="form-control" required="required" autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Write Your Message Here</label>
                                <textarea class="form-control" name="message" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <input type="submit" name="send" class="btn btn-send" value="Send">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-4">
                <div class="contact-info">
                    <!-- <h2>Contact Info</h2> -->

                    <h4>Head Office - Banani</h4>

                    <div class="row">
                        <div class="col-md-2">
                            <i class="fa fa-map-o"></i>
                        </div>

                        <div class="col-md-10">
                            <p>House# 74 Road# 7, Block# H, Banani, Dhaka-1213</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                            <i class="fa fa-phone"></i>
                        </div>

                        <div class="col-md-10">
                            <p>01758066329, 01758066325, 01872650686, 01872657169</p>
                        </div>
                    </div>

                    <h4>Branch Office - Dhaka</h4>

                    <div class="row">
                        <div class="col-md-2">
                            <i class="fa fa-map-o"></i>
                        </div>

                        <div class="col-md-10">
                            <p>HB Enterprise Bhaban. Plot-9, Road-4, Section -7, Mirpur-Dhaka 1216</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                            <i class="fa fa-phone"></i>
                        </div>

                        <div class="col-md-10">
                            <p>01872650688, 01872657167, 01872650685</p>
                        </div>
                    </div>

                    <div class="social-media">
                        <ul>
                            <li><a href="#" targer="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" targer="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" targer="_blank"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" targer="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" targer="_blank"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>


            
        </div>
    </div>
</section>


@endsection