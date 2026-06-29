<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('head')
    <style>
    .project-top{
        background-image: url("{{ asset('/images/hero_bg.png') }}");
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        height: 400px;
        display:flex;
        align-items:center;
        justify-content:space-between;
        color: #ffffff;
        padding-left: 100px;
        padding-right: 100px;
    }
    .project-top h1{font-size:56px; font-weight:700; display:inline-flex; align-items:center; gap:12px; margin:4% 0 0 -2%; letter-spacing: -0.99px;}
    .project-top-copy {
        text-align: left;
        font-family: 'Manrope', sans-serif;
        font-size: 1.25rem;
        line-height: 1.4;
        color: rgba(255,255,255);
        margin: 0;
    }
    .project-top-copy p {
        margin-bottom: -2rem;
        text-align: left;
        font-size: 1rem;
    }
    .general-list { 
        margin: 2% 5% 15% 5%;
    }
    .general-list p,.general-list li{
        color: #4B4B4B !important;
        font-family: 'Manrope', sans-serif;
        font-size: 15px;
    }
    .general-list h2{
        color: black;
        font-family: 'Inter', sans-serif;
        font-weight: bold;
        font-size: 20px !important;
    }

    .contactus_cta {
        font-size: 20px;
        font-family: 'Inter', sans-serif;
        background-color: #C83D2A;
        color: #ffffff !important;
        border: 1px solid #ffffff;
        border-radius: 12px;
        text-align: left;
        text-decoration: none !important;
        width: 210px;
        height: 48px;
        margin-top: 20%;
        margin-left: 7%;
        margin-bottom: 20%;
        padding-top: 9px;
        padding-bottom: 6px;
        padding-left: 18px;
        padding-right: 8px;
    }
    footer {
        padding-top: 70px !important;
    }
    .form_email {
        margin-bottom: 2%;
    }

    @media screen and (max-width: 600px) {
        .project-top{height:auto; padding-left:50px; padding-right:50px; justify-content:center; flex-wrap:wrap; text-align:center; padding-top: 20%; padding-bottom: 80px;}
        .project-top h1{font-size:24px; width:100%; justify-content:center;}
        .project-top-copy { width:100%; text-align:center; margin-top: 18px; }
        .general-list { margin-bottom: 40%; margin-top: 5%; }
        .form_email .col-md-6, .form_email .col-sm-6 { width: 100% !important; margin-bottom: 2%; }
        .form_email .col-md-12, .form_email .col-sm-12 { width: 100% !important; }
        .contact-input { padding: 14px 16px !important; font-size: 16px; width: 100%; }
        .contact-input::placeholder { font-size: 14px; }
        .d-flex { flex-direction: column !important; width: 100%; padding: 0 20px !important; }
        .contactus_cta { margin: 20px 0 !important; width: 100%; padding: 14px 16px !important; height: auto; }
        input#contact_name, textarea#contact_message { padding: 2% 1% 2% 2% !important; }
    }
    @media screen and (min-width: 1900px) {
        .general-list { margin: 2% 15% 15% 16%; }
        .project-top { height: 300px; }
        .project-top h1 { margin-left: 0; }
    }
    </style>
    <body>
        @include('navbar')

        <!-- HERO -->
        <div class="row project-top text-start">
            <h1>Contact Us</h1>
            <div class="project-top-copy">
                <p>Ready to start your project? Contact Diana Glass<br>for professional consultation, customized glass<br>solutions, and reliable installation services.</p>
            </div>
        </div>

        <!-- DISCLAIMER BODY -->
        <div class="general-list">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h2>Let's Connect</h2>
                    <p>Have questions or need a custom glass solution? Our team is ready to help you with reliable support and professional service.</p>
                </div>
            </div>
            <!-- Form -->
            <div class="row form_email">
                <div class="col-md-12 col-sm-12">
                    <input type="text" name="contact_name" id="contact_name" class="form-control contact-input" placeholder="Your Name">
                </div>
            </div>
            <div class="row form_email">
                <div class="col-md-6 col-sm-6">
                    <input type="text" name="contact_email" id="contact_email" class="form-control contact-input" placeholder="Email Address">
                </div>
                <div class="col-md-6 col-sm-6">
                    <input type="number" name="contact_no" id="contact_no" class="form-control contact-input" placeholder="Phone Number">
                </div>
            </div>
            <div class="row form_email">
                <div class="col-md-12 col-sm-12">
                    <textarea name="contact_message" id="contact_message" class="form-control contact-input" rows="4" placeholder="Your message, address, or social media"></textarea>
                </div>
            </div>
            <div class="row">    
                <div class="d-flex align-items-center gap-4">
                    <button type="submit" class="btn_email contactus_cta" style="cursor:pointer;">
                        Send Message <i class="ri-arrow-right-long-line"></i>
                    </button>
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <center>
                    <iframe class="map" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA8Orx1XfWotNUBM4WuFrzu6JS1YGHaQEg&q=Diana+Flat+Glass+Processing,Jalan+Sulawesi,Butung,Makassar+City,South+Sulawesi,Indonesia&zoom=18" allowfullscreen></iframe>
                <center>
            </div>
        </div>

        @include('footer')
    </body>
    <script>
    $(".btn_email").on("click",function(){
        sendEmail();
    });

    function sendEmail(){
        $.ajax({
            url: '{{ route("send.email") }}',
            method: 'GET',
            data: {
                'name': $("#contact_name").val(),
                'email': $("#contact_email").val(),
                'phone':$("#contact_no").val(),
                'message':$("#contact_message").val(),
            },
            success: function(resp) {
                alert("Email sent");
                $("#contact_name").val('');
                $("#contact_email").val('');
                $("#contact_no").val('');
                $("#contact_message").val('');
            },
            cache: false
        });
    }
    </script>
</html>