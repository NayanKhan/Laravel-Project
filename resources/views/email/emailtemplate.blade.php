<!--About-->
<section id="about-features" >
    <!--container-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="features-text">
                    
                    <p>Full Name: {{ $emailData['name'] }}</p>
                    <p>Phone Number: {{ $emailData['phone'] }}</p>
                    <p>Email Address: {{ $emailData['email'] }}</p>
                    <p>Address: {{ $emailData['address'] }}</p>
                    <p>Message Subject: {{ $emailData['message'] }}</p>

                </div>
            </div>
        </div>
    </div>
    <!--container-->

</section>
<!--About -->