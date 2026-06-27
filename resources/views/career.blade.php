<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('head')
    <style>
    .project-top{
        background-image: url("{{ asset('/images/hero_bg.png') }}");
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        height: 260px;
        display:flex;
        align-items:center;
        justify-content:space-between;
        color: #ffffff;
        padding-left: 100px;
        padding-right: 100px;
    }
    .project-top h1{font-size:36px; font-weight:700; display:inline-flex; align-items:center; gap:12px; margin:4% 0 0 -2%;}
    .project-top-copy {
        max-width: 420px;
        text-align: left;
        font-family: 'Inter', sans-serif;
        font-size: 1rem;
        line-height: 1.6;
        color: rgba(255,255,255,0.92);
        margin: 0;
    }
    .project-top-copy p{
        margin-bottom: -2rem;
    }
    .general-list { 
        margin: 2% 5% 15% 5%;
    }
    .general-list p{
        color: black;
    }

    @media screen and (max-width: 600px) {
        .project-top{height:auto; padding-left:50px; padding-right:50px; justify-content:center; flex-wrap:wrap; text-align:center; padding-top: 20%; padding-bottom: 80px;}
        .project-top h1{font-size:24px; width:100%; justify-content:center;}
        .project-top-copy { width:100%; text-align:center; margin-top: 18px; }
        .general-list { margin-bottom: 40%; margin-top: 5%; }
    }
    @media screen and (min-width: 1900px) {
        .project-top { height: 300px; }
        .project-top h1 { margin-left: 0; }
        .general-list { margin: 2% 5% 15% 16%; }
    }
    </style>
    <body>
        @include('navbar')

        <!-- HERO -->
        <div class="row project-top text-start">
            <h1>Career</h1>
            <div class="project-top-copy">
                <p>Join our team and grow with a glass company committed to quality, innovation, and professionalism in every process.</p>
            </div>
        </div>

        <!-- CAREER BODY -->
        <div class="general-list">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h3>Join Our Team</h3>
                    <p>We are looking for passionate and dedicated individuals to grow with our company. If you are interested in joining us, please send your CV and portfolio to <a href="mailto:dianaglass@gmail.com">dianaglass@gmail.com</a></p>
                </div>
            </div>

        </div>

        <!-- CTA -->
        <div id="contact_body">
            <section class="cta-section">
                <div class="container">
                    <div class="row align-items-center">
                    <div class="col-12 col-md-12">
                        <h2>Enhance Your Home with Modern Glass Solutions</h2>
                        <p>Transform your home with premium glass solutions that bring more natural light,<br>openness, and timeless elegance.</p>
                        <div class="sanno_cta">
                            <a href="{{ route('show.contact') }}">Contact Us <i class="ri-arrow-right-long-line"></i></a>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
        </div>

        @include('footer')
    </body>
    <script>

    </script>
</html>