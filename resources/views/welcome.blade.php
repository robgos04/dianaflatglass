<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('head')
    <style>
    html {
        scroll-behavior: smooth;
    }
    #home_short_desc p { font-family: 'Manrope', sans-serif; }
    .gallery_bg{
        background-image:url("{{ asset('/images/gallery_bg_1.png') }}"), url("{{ asset('/images/gallery_bg_2.png') }}");
        background-position: left bottom, right bottom;
        background-size:30%;
        background-repeat: no-repeat;
        margin-top: 60px;
    }

    #gallery_modal .modal-content{
        background-image:url("{{ asset('/images/bg_residence.png') }}");
        background-size: 20% 40%;
        background-repeat: no-repeat;
    }

    .sanno_content{
        background-image: url("{{ asset('/images/sanno_contact_bg.png') }}");
        background-size: cover;
        background-position: center;
        height: 100%;
        width: 100%;
        padding: 4% 4% 4% 5%;
        color: #ffffff;
    }
    .sanno_left p{
        font-size: 1.3rem;
        font-family: 'Manrope', sans-serif;
    }
    .sanno_right {
        padding-top: 7%;
        padding-left: 14%;
    }

    .project_content .project-subtitle{
        font-size: 1rem;
        color: rgba(255, 255, 255, 0.85);
        margin-bottom: 40px;
        line-height: 1.6;
    }
    #project_body .divider {
        width: 90% !important;
        margin-left: 5%;
    }

    .cards-row-wrapper {
        position: relative;
    }

    .cards-row {
        display: flex;
        flex-wrap: nowrap;
        overflow-x: auto;
        scroll-behavior: smooth;
        gap: 5px;
        padding: 16px 48px;
        margin-bottom: 30px;
    }

    .cards-row::-webkit-scrollbar {
        display: none;
    }

    .cards-row .col-12 {
        flex: 0 0 320px;
        max-width: 320px;
    }

    .cards-arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border: none;
        background: rgba(255, 255, 255, 0.95);
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.12);
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 2;
        opacity: 0;
        transition: opacity 0.2s ease;
    }

    .cards-row-wrapper:hover .cards-arrow {
        opacity: 1;
    }

    .cards-arrow-left { left: 0; margin-left: 8px; }
    .cards-arrow-right { right: 0; margin-right: 8px; }

    .cards-arrow i { color: #333; font-size: 1rem; }

    .product-list {
        margin-top: 10%;
        margin-bottom: 20%;
    }
    .product-list .col-md-4,
    .product-list .col-sm-4 {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 24px;
    }
    .product-card {
        position: relative;
        width: 100%;
        overflow: hidden;
    }
    .product-card img {
        width: 100%;
        height: 500px;
        display: block;
        object-fit: cover;
    }
    .product-card-overlay {
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        padding: 20px;
        display: flex;
        align-items: flex-end;
        justify-content: space-between;
        gap: 16px;
        background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.72) 100%);
        color: #ffffff;
    }
    .product-card-overlay a{
        text-decoration: none;
        color: #ffffff;
        cursor: pointer;
    }
    .product-card-text {
        max-width: calc(100% - 48px);
    }
    .product-card-text h2 {
        margin: 0 0 6px;
        font-size: 1.25rem !important;
        font-weight: 700;
    }
    .product-card-text p {
        margin: 0;
        font-size: 0.95rem;
        line-height: 1.5;
        opacity: 0.92;
    }
    .product-card-cta {
        flex-shrink: 0;
        width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
    }
    .product-card-cta img {
        width: 100%;
        height: auto;
        display: block;
        filter: brightness(0) invert(1);
    }
    /* Partner card (certificate section) - show h4 by default, hide image */
    .partner-card {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100px;
        position: relative;
        padding: 20px;
    }
    .partner-card h4 {
        margin: 0;
        font-size: 1.5rem;
        font-weight: medium;
        color: #ffffff;
        font-family: 'Inter', sans-serif;
        text-align: center;
        opacity: 1;
        transition: opacity 0.3s ease;
        cursor: pointer;
    }
    .partner-card img {
        width: 150px;
        height: 150px;
        object-fit: contain;
        object-position: center;
        opacity: 1;
        position: absolute;
    }
    /*.partner-card:hover h4 {
        opacity: 0;
    }
    .partner-card:hover img {
        opacity: 1;
    }*/

    .product-badge-coming-soon {
        position: absolute;
        top: 14px;
        right: 14px;
        background: #E53935;
        color: #ffffff;
        font-size: 0.72rem;
        font-weight: 700;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        padding: 4px 10px;
        border-radius: 20px;
        z-index: 10;
        pointer-events: none;
        box-shadow: 0 2px 8px rgba(0,0,0,0.25);
    }
    /* */

    #faq_body {
        position: relative;
        overflow: hidden;
        font-family: 'Inter', sans-serif;
        font-size: 16px;
        color: #ffffff !important;
        padding: 4% 0 15% 0;
    }

    #faq_body::before {
        content: '';
        position: absolute;
        inset: 0;
        background-image: url("{{ asset('/images/faq_bg.png') }}");
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        filter: blur(8px);
        transform: scale(1.1);
        z-index: -1;
    }
    .faq_left {
        padding-top: 3%;
        padding-bottom: 5%;
        padding-left: 5%;
        padding-right: 8%;
    }
    .faq_right {
        padding: 3% 6% 3% 3%;
    }

    /* --- FAQ Accordion Layout (Glassmorphism) --- */
    .faq-list {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .faq-item {
        background: rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 16px;
        padding: 20px 24px;
        transition: all 0.3s ease;
    }

    .faq-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        cursor: pointer;
    }

    .faq-header h4 {
        font-size: 1.15rem;
        font-weight: 500;
        margin: 0;
        color: #ffffff;
    }

    .faq-icon {
        width: 28px;
        height: 28px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        color: #ffffff;
        transition: transform 0.3s ease;
    }

    /* For open items */
    .faq-item.active .faq-icon {
        transform: rotate(180deg);
    }

    .faq-content {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-out;
        font-size: 0.95rem;
        line-height: 1.6;
    }

    /* When the item is expanded */
    .faq-item.active .faq-content {
        max-height: 200px; /* Adjust based on content length */
        margin-top: 14px;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        padding-top: 14px;
    }

    /* Our Partners */
    .project-card{
        border: 1px solid rgba(60, 60, 60, 0.75);
        background: linear-gradient(
        180deg,
        rgba(90, 90, 90, 0.75) 0%,
        rgba(60, 60, 60, 0.75) 100%
        );
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        padding: 2%;
        border-radius: 30px;
        max-height: 100px;
    }
    .project-card img{
        height: 100%;
        width: 60%;
        object-fit: contain;
        object-position: center;
    }

    @media screen and (max-width: 600px) { /* For mobile devices: Adjust gallery background for better visibility and spacing */
        .home_title {
            min-height: 40vh;
            padding-left: 5%;
        }
        #home_short_desc p { font-size: 1rem; }
        .cards-row { padding: 16px 36px; }
        .cards-row .col-12 { flex: 0 0 85%; max-width: 85%; }
        .cards-arrow { opacity: 1; width: 36px; height: 36px; margin: 0; }
        #faq_body{
            padding-top: 10%;
            padding-left: 10%;
            padding-right: 5%;
            padding-bottom: 40%;
        }
        .sanno_content {
            padding: 4% 4% 4% 9%;
        }
        .sanno_right {
            padding-top: 5%;
            padding-left: 4%;
            padding-bottom: 5%;
        }
        #product_body {
            padding-left: 7%;
            padding-right: 9%;
        }
        .projects_row { gap: 20px; }
        .project_content { padding: 7%; }
        footer {
            padding-top: 230px;
            margin-top: -185px;
        }
    }
    @media screen and (min-width: 1900px) { /* large screen pc */
        .home_title {
            padding-left: 15%;
        }
        #home_short_desc { font-size: 20px; }
        .sanno_content { padding:4% 10% 4% 16%; }
        #product_body { padding:5% 16% 5% 15%; }
        .product-card img { height:800px !important; }
        #project_body .divider {
            width: 70% !important;
            margin-left: 15%;
        }
        .project_content {
            padding: 5% 15% 5% 15%;
        }
        .faq_left { padding-left: 16%; }
        .faq_right { padding: 3% 16% 3% 3%; }
        .footer-main {
            padding-left: 15%;
            padding-right: 0%;
        }
        .footer-divider { margin: 14px 52% 14px 0;}
        .footer-bottom { margin: 0px 14%; }
        .cta-section { margin: -195px 14% 0; }
    }
    </style>
    <body>
        <!-- MENU BAR -->
        <nav id="mainNav">
            <div class="nav-inner">

                <!-- Logo -->
                <a href="{{ route('show.home') }}" class="nav-logo" onclick="$('#home_menu').click()">
                    <img src="{{ asset('/images/diana_logo.png') }}" alt="PT. DIANA">
                </a>

                <!-- Hamburger (mobile) -->
                <button class="nav-hamburger" id="navToggle" aria-label="Toggle menu">
                    <span></span><span></span><span></span>
                </button>

                <!-- Links -->
                <div class="nav-links" id="navLinks">
                    <a href="#home_body" id="home_menu" class="nav-link active">Home</a>
                    <a href="#about_body" id="about_menu" class="nav-link">About Us</a>
                    <a href="#product_body" id="product_menu" class="nav-link">Product & Service</a>
                    <a href="#project_body" id="project_menu" class="nav-link">Project</a>
                    <a href="#faq_body" id="faq_menu" class="nav-link">FAQ</a>
                    <a href="#contact_body" id="contact_menu" class="nav-link">Contact Us</a>
                </div>

            </div>
        </nav>
        <!-- -->
        <!-- Lightbox Modal -->
        <div id="lightbox" onclick="closeLightbox()" style="
            display: none;
            position: fixed;
            inset: 0;
            z-index: 9999;
            background: rgba(0, 0, 0, 0.88);
            align-items: center;
            justify-content: center;
            padding: 24px;
            cursor: zoom-out;
        ">
            <!-- Close button -->
            <button onclick="closeLightbox()" style="
                position: absolute;
                top: 20px;
                right: 24px;
                background: rgba(255,255,255,0.12);
                border: none;
                color: #fff;
                font-size: 1.5rem;
                width: 40px;
                height: 40px;
                border-radius: 50%;
                cursor: pointer;
                display: flex;
                align-items: center;
                justify-content: center;
                line-height: 1;
                transition: background 0.2s;
            ">&times;</button>

            <!-- Image -->
            <div onclick="event.stopPropagation()" style="
                max-width: 90vw;
                max-height: 90vh;
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 16px;
            ">

                <h3 id="lightbox-category" style="color:rgba(255,255,255,0.8); font-size:1.3rem; margin:0; max-width:80vw; text-align:center; font-weight:bold;"></h3>
                <img id="lightbox-img" src="" alt="" loading="lazy"
                    style="max-width:100%; max-height:80vh; object-fit:contain; border-radius:12px; box-shadow: 0 20px 60px rgba(0,0,0,0.5);">
                <h4 id="lightbox-caption" style="color:rgba(255,255,255,0.8); font-size:1rem; margin:0;"></h4>
            </div>
        </div>

        <!-- BODY -->
        <div class="container-fluid">
            <!-- home -->
            <div id="home_body" class="home_title">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <p><b>Professional <i>Glass Installation Services</i> in South Sulawesi</b></p>
                    </div>
                    <div class="col-md-4 col-sm-4">
                    </div>     
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12" id="home_short_desc">
                        <p>Transforming residential, commercial, and architectural spaces with premium glass solutions.</p>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="sanno_cta">
                            <a href="{{ route('show.project') }}">
                            Explore Project <i class="ri-arrow-right-long-line"></i>
                            </a>
                        </div>
                    </div>
                </div>   
            </div>
            
            <!-- about -->
            <div id="about_body">
                <div class="row">
                    <div class="col-md-6 col-sm-6 about_left">
                    </div>
                    <div class="col-md-6 col-sm-6 about_right">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <h2>About<br>Diana Glass</h2><br>
                                <p><b><i>Diana Glass</i></b>, founded in 1985, is a leading provider of architectural glass, aluminium systems, and glass accessories. We process, supply, and install products for both residential and commercial projects.</p>
                                <p>As the exclusive agent of Allure Industries Aluminium and the management of Glassmart Makassar, a major provider of Asahimas and Xinyi Glass, we are also an applicator of innovative architectural and interior products such as Reholz, Omge, DormaKaba, Dekson, and many more.</p>
                                <p>Supported by an energetic and creative team, our goal is to deliver excellent products and outstanding services to our customers.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PT Sanno -->
            <div id="sanno_body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 sanno_content">
                        <div class="row">
                            <div class="col-md-8 col-sm-8 sanno_left">
                                <h2><b><i>Tempered Glass</i><br>Processing by PT.Sanno</b></h2>
                                <p>We are the first tempered glass factory provider in Indonesia.</p>
                            </div>
                            <div class="col-md-4 col-sm-4 sanno_right">
                                <div class="sanno_cta">
                                    <a href="https://www.sannoglass.com/">Contact Us <i class="ri-arrow-right-long-line"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- product & service -->
            <div id="product_body">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <h2>Our Product & Service</h2>
                        <p class="product-subtitle">Discover premium glass products and professional installation services<br>for residential, commercial, and architectural projects.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 product_left">
                        <div class="service-list">

                            <div class="service-item active" data-service="1">
                                <div class="service-number">01</div>
                                <div class="service-body">
                                    <h3 class="service-name">Exterior Glass</h3>
                                </div>
                                <div class="service-arrow">→</div>
                            </div>
                            <div class="divider"></div>

                            <div class="service-item" data-service="2">
                                <div class="service-number">02</div>
                                <div class="service-body">
                                    <h3 class="service-name">Interior Glass</h3>
                                </div>
                                <div class="service-arrow">→</div>
                            </div>
                            <div class="divider"></div>

                            <div class="service-item" data-service="3">
                                <div class="service-number">03</div>
                                <div class="service-body">
                                    <h3 class="service-name">Aluminium</h3>
                                </div>
                                <div class="service-arrow">→</div>
                            </div>
                            <div class="divider"></div>

                            <div class="service-item" data-service="4">
                                <div class="service-number">04</div>
                                <div class="service-body">
                                    <h3 class="service-name">Accesories</h3>
                                </div>
                                <div class="service-arrow">→</div>
                            </div>
                            <div class="divider"></div>

                            <div class="service-item" data-service="5">
                                <div class="service-number">05</div>
                                <div class="service-body">
                                    <h3 class="service-name">Survey & Installation</h3>
                                </div>
                                <div class="service-arrow">→</div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 product_right">
                        <!-- Panel 1 -->
                        <div class="product-panel active" data-panel="1">
                            <img src="{{ asset('/images/product_exterior.png') }}" class="product-main-img" loading="lazy">
                            <p class="product-right-desc">Clear, Tinted Glass, Tempered (Safety) Glass, Laminated Glass, Insulated Glass, and more, we deliver customized solutions that combine strength, style, and functionality for any building.</p>
                        </div>
                        <!-- Panel 2 -->
                        <div class="product-panel" data-panel="2">
                            <img src="{{ asset('/images/product_interior.png') }}" class="product-main-img" loading="lazy">
                            <p class="product-right-desc">Mirror, Coated Glass, Frosted, Patterned, and other modern interior options, we provide versatile glass solutions to bring every design vision to life.</p>
                        </div>
                        <!-- Panel 3 -->
                        <div class="product-panel" data-panel="3">
                            <img src="{{ asset('/images/product_aluminium.png') }}" class="product-main-img" loading="lazy">
                            <p class="product-right-desc">Durable, lightweight aluminum for versatile building solutions.</p>
                        </div>
                        <!-- Panel 4 -->
                        <div class="product-panel" data-panel="4">
                            <img src="{{ asset('/images/product_accessories.png') }}" class="product-main-img" loading="lazy">
                            <p class="product-right-desc">Accessories for glass and aluminum with minimalist design.</p>
                        </div>
                        <!-- Panel 5 -->
                        <div class="product-panel" data-panel="5">
                            <img src="{{ asset('/images/product_survey.png') }}" class="product-main-img" loading="lazy">
                            <p class="product-right-desc">Accurate surveys for flawless project execution.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- project -->
            <div id="project_body">
                <section class="our-project-section">

                <div class="divider"></div>
                <div class="project_content">
                    <div class="row align-items-center mb-4">

                    <!-- Left: Title & Description -->
                    <div class="col-md-8 col-sm-8">
                        <h2>Our Project</h2>
                        <p class="project-subtitle">Explore our Interior glass, Exterior glass, and Aluminium projects, completed with quality materials and professional workmanship.</p>
                    </div>

                    <!-- Right: Button -->
                    <div class="col-md-4 col-sm-4 d-flex justify-content-md-end ">
                        <div class="sanno_cta">
                            <a href="{{ route('show.project') }}">See All Project <i class="ri-arrow-right-long-line"></i></a>
                        </div>
                    </div>

                    </div>

                    <!-- Project Cards -->
                    <div class="row projects_row">
                        <div class="col-md-4 col-sm-12">
                            <div class="product-card">
                                <img src="{{ asset('/images/projects/'.$latestExterior->projectpic) }}" alt="Exterior Glass" loading="lazy">

                                <div class="product-card-overlay">
                                    <div class="product-card-text">
                                        <h2>Exterior Glass</h2>
                                    </div>
                                    <a href="{{ route('show.project') }}#exterior">
                                        <div class="product-card-cta ri-arrow-right-long-line" data-lightbox-src="{{ asset('/images/projects/'.$latestExterior->projectpic) }}" data-lightbox-caption="{{ $latestExterior->projectname }}" data-lightbox-category="Exterior Glass" style="cursor:pointer;">
                                        </div>
                                     </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="product-card">
                                <img src="{{ asset('/images/projects/'.$latestInterior->projectpic) }}" alt="Interior Glass" loading="lazy">

                                <div class="product-card-overlay">
                                    <div class="product-card-text">
                                        <h2>Interior Glass</h2>
                                    </div>
                                    <a href="{{ route('show.project') }}#interior">
                                        <div class="product-card-cta ri-arrow-right-long-line" data-lightbox-src="{{ asset('/images/projects/'.$latestInterior->projectpic) }}" data-lightbox-caption="{{ $latestInterior->projectname }}" data-lightbox-category="Interior Glass" style="cursor:pointer;">
                                        </div>
                                     </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="product-card">
                                <img src="{{ asset('/images/projects/'.$latestAluminium->projectpic) }}" alt="Aluminium" loading="lazy">

                                <div class="product-card-overlay">
                                    <div class="product-card-text">
                                        <h2>Aluminium</h2>
                                    </div>
                                    <a href="{{ route('show.project') }}#aluminium">
                                        <div class="product-card-cta ri-arrow-right-long-line" data-lightbox-src="{{ asset('/images/projects/'.$latestAluminium->projectpic) }}" data-lightbox-caption="{{ $latestAluminium->projectname }}" data-lightbox-category="Aluminium" style="cursor:pointer;">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                </section>
            </div>

            <!-- Partners -->
            <div id="certificate_body">
                <section class="certificate-section">

                <div class="overlay"></div>

                    <div class="row align-items-center mb-4">

                        <div class="col-md-12 col-sm-12">
                            <center><h2>Our Partners</h2></center>
                        </div>

                    </div>
                    <br>
                    <div class="cards-row">

                        <div class="col-12 col-md-3 project-card partner-card">
                            <img src="{{ asset('/images/partners/sanno-logo.svg') }}" alt="PT. Sanno" loading="lazy"/>
                        </div>

                        <div class="col-12 col-md-3 project-card partner-card">
                            <img src="{{ asset('/images/partners/allure-logo.svg') }}" alt="Allure Industries" loading="lazy"/>
                        </div>

                        <div class="col-12 col-md-3 project-card partner-card">
                            <img src="{{ asset('/images/partners/asahimas-logo.svg') }}" alt="Asahimas" loading="lazy"/>
                        </div>

                        <div class="col-12 col-md-3 project-card partner-card">
                            <img src="{{ asset('/images/partners/xyg-logo.svg') }}" alt="Xinyi Glass" loading="lazy"/>
                        </div>

                        <div class="col-12 col-md-3 project-card partner-card">
                            <img src="{{ asset('/images/partners/omge-logo.svg') }}" alt="Omge Hardware" loading="lazy"/>
                        </div>

                        <div class="col-12 col-md-3 project-card partner-card">
                            <img src="{{ asset('/images/partners/dormakaba-logo.svg') }}" alt="DormaKaba" loading="lazy"/>
                        </div>

                        <div class="col-12 col-md-3 project-card partner-card">
                            <img src="{{ asset('/images/partners/dekson-logo.svg') }}" alt="Dekson" loading="lazy"/>
                        </div>

                    </div> 

                </section>
            </div>

            <!-- FAQ -->
            <div id="faq_body">
                <div class="row">
                    <div class="col-md-6 col-sm-6 faq_left">
                        <h2>Frequently Asked Questions</h2>
                        <p>Find answers to common questions about Diana Glass, our glass installation services, products, and project process.</p>
                    </div>
                    <div class="col-md-6 col-sm-6 faq_right">
                        <div class="faq-list">

                            <!-- Item 1 (Active/Expanded State) -->
                            <div class="faq-item active">
                                <div class="faq-header">
                                    <h4>What services does Diana Glass provide?</h4>
                                    <div class="faq-icon"><i class="ri-arrow-down-long-line"></i></div>
                                </div>
                                <div class="faq-content">
                                    <p>Diana Glass specializes in professional glass installation services for residential and commercial projects, including tempered glass, laminated glass, shower enclosures, glass railings, glass partitions, canopies, and building facades.</p>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="faq-item">
                                <div class="faq-header">
                                    <h4>Does Diana Glass offer site surveys?</h4>
                                    <div class="faq-icon"><i class="ri-arrow-down-long-line"></i></div>
                                </div>
                                <div class="faq-content">
                                    <p>Yes. Our team can conduct on-site surveys, take accurate measurements, and recommend the most suitable glass solutions for your project requirements.</p>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="faq-item">
                                <div class="faq-header">
                                    <h4>How can I request a quotation?</h4>
                                    <div class="faq-icon"><i class="ri-arrow-down-long-line"></i></div>
                                </div>
                                <div class="faq-content">
                                    <p>You can send us your drawings, dimensions, specifications, or project details through our contact form, email, or WhatsApp. Our team will provide a customized quotation based on your requirements.</p>
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="faq-item">
                                <div class="faq-header">
                                    <h4>Do you provide professional installation?</h4>
                                    <div class="faq-icon"><i class="ri-arrow-down-long-line"></i></div>
                                </div>
                                <div class="faq-content">
                                    <p>Yes. All installations are performed by experienced professionals following industry standards.</p>
                                </div>
                            </div>

                            <!-- Item 5 -->
                            <div class="faq-item">
                                <div class="faq-header">
                                    <h4>How do I get started with Diana Glass?</h4>
                                    <div class="faq-icon"><i class="ri-arrow-down-long-line"></i></div>
                                </div>
                                <div class="faq-content">
                                    <p>Contact our team with your project details. We will guide you through consultation, site survey, quotation, production, and installation.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA "Make your home be modern" -->
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

        </div>
        <!-- -->
    </body>
    <footer>

        <div class="footer-main row">

            <!-- Col 1: Logo + Tagline + Socials -->
            <div class="col-12 col-md-5 footer-brand">
                <img src="{{ asset('/images/diana_logo.png') }}" alt="Diana Flat Glass" class="footer-logo">
                <p class="footer-tagline"><strong>Diana Flat Glass</strong> is the first Tempered Glass factory<br>in South Sulawesi.</p>
                <div class="footer-socials">
                    <a href="https://www.instagram.com/diana.flatglass/" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.facebook.com/share/17jwUP67ve/" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <!-- Col 2: Links -->
            <div class="col-12 col-md-3 footer-links">
                <h6 class="footer-col-title">Links</h6>
                <ul>
                    <li><a href="#home_body">Home</a></li>
                    <li><a href="#about_body">About Us</a></li>
                    <li><a href="#product_body">Product</a></li>
                    <li><a href="{{ route('show.project') }}">Project</a></li>
                    <li><a href="#faq_body">FAQ</a></li>
                    <li><a href="{{ route('show.career') }}">Careers</a></li>
                    <li><a href="{{ route('show.contact') }}">Contact Us</a></li>
                </ul>
            </div>

            <!-- Col 3: Connect with Us -->
            <div class="col-12 col-md-4 footer-connect">
                <h6 class="footer-col-title">Connect with Us</h6>

                <div class="footer-location">
                    <p class="footer-location-title"><i class="fas fa-map-marker-alt"></i> <strong>Store</strong></p>
                    <p>Jl. Sulawesi No. 289, Kota Makassar</p>
                    <p><i class="fas fa-envelope"></i><a href="mailto:info@dianaflatglass.com" style="color:#ffffff !important;"> info@dianaflatglass.com</a></p>
                    <p><i class="fas fa-phone"></i><a href="https://wa.me/+6285397277930" target="_blank" style="color:#ffffff !important;"> 0853-9727-7930</a></p>
                </div>

                <hr class="footer-divider">

                <div class="footer-location">
                    <p class="footer-location-title"><i class="fas fa-map-marker-alt"></i> <strong>Workshop</strong></p>
                    <p>Jl. Kima XIV Kav. SS-14, Daya</p>
                    <p><i class="fas fa-envelope"></i><a href="mailto:info@sannoglass.com" style="color:#ffffff !important;"> info@sannoglass.com</a></p>
                    <p><i class="fas fa-phone"></i><a href="https://wa.me/+6285397277930" target="_blank" style="color:#ffffff !important;"> 0853-9727-7930</a></p>
                </div>
            </div>

        </div>

        <!-- Bottom Bar -->
        <div class="footer-bottom row align-items-center">
            <div class="col-12 col-md-6">
                <p>Copyright &copy;2026 Diana Flat Glass</p>
            </div>
            <div class="col-12 col-md-6 text-md-right">
                <a href="{{ route('show.disclaimer') }}">Disclaimer</a>
                <a href="{{ route('show.terms') }}">Terms of User</a>
                <a href="{{ route('show.privacy') }}">Privacy Policy</a>
            </div>
        </div>

</footer>
</html>
<script>
// ── Lightbox ──────────────────────────────────
document.addEventListener('click', function(e) {
    if (e.target.classList.contains('product-card-cta')) {
        const imageSrc = e.target.dataset.lightboxSrc;        // Gets: "/images/project_sample_2.png"
        const caption = e.target.dataset.lightboxCaption;     // Gets: "test"
        const category = e.target.dataset.lightboxCategory; 
        
        //openLightbox(imageSrc, caption, category);
    }
});

function openLightbox(imgsrc, caption, category) {
    document.getElementById('lightbox-img').src = imgsrc;
    document.getElementById('lightbox-caption').textContent = caption;
    document.getElementById('lightbox-category').textContent = category;
    var lb = document.getElementById('lightbox');
    lb.style.display = 'flex';
    document.body.style.overflow = 'hidden';  // prevent scroll behind modal
}

function closeLightbox() {
    document.getElementById('lightbox').style.display = 'none';
    document.getElementById('lightbox-img').src = '';
    document.body.style.overflow = '';
}

(function(){
    function onScrollUpdateActive(){
        var offset = 80; // adjust if navbar height differs
        var scrollPos = window.scrollY + offset;
        var sections = document.querySelectorAll('[id$="_body"]');
        var foundId = null;
        sections.forEach(function(sec){
            var top = sec.offsetTop;
            var bottom = top + sec.offsetHeight;
            if(scrollPos >= top && scrollPos < bottom){
                foundId = sec.id;
            }
        });
        var links = document.querySelectorAll('.nav-link');
        links.forEach(function(link){
            link.classList.remove('active');
            var href = link.getAttribute('href');
            if(foundId && href && href.indexOf('#')===0 && href.substring(1) === foundId){
                link.classList.add('active');
            }
        });
    }

    // run on load and on scroll
    document.addEventListener('DOMContentLoaded', function(){
        onScrollUpdateActive();
    });
    window.addEventListener('scroll', onScrollUpdateActive, {passive:true});
})();
</script>
<script>
var position = 0;
var baseUrl = "{{ asset('/images/') }}";

// ── Hamburger toggle ──────────────────────────
document.getElementById('navToggle').addEventListener('click', function () {
    this.classList.toggle('open');
    document.getElementById('navLinks').classList.toggle('open');
});

// ── Close mobile menu on link click ──────────
document.querySelectorAll('.nav-link').forEach(function (link) {
    link.addEventListener('click', function () {
        document.getElementById('navToggle').classList.remove('open');
        document.getElementById('navLinks').classList.remove('open');

        // Update active state
        document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
        this.classList.add('active');
    });
});

$(document).ready(function(){

    // Product service hover switcher
    $('.service-item').on('mouseenter', function () {
        var target = $(this).data('service');

        // Update active state on items
        $('.service-item').removeClass('active');
        $(this).addClass('active');

        // Swap panel
        $('.product-panel').removeClass('active').hide();
        $('.product-panel[data-panel="' + target + '"]').addClass('active').show();
    });

    //Arrow for projects cards
    var $projectCardsRow = $('#projectCardsRow');
    if ($projectCardsRow.length) {
        var projectCardWidth = $projectCardsRow.find('.col-12').first().outerWidth(true) || 320;
        $('.cards-arrow-left').on('click', function(){
            $projectCardsRow.animate({ scrollLeft: '-=' + projectCardWidth }, 300);
        });
        $('.cards-arrow-right').on('click', function(){
            $projectCardsRow.animate({ scrollLeft: '+=' + projectCardWidth }, 300);
        });

        if ($projectCardsRow[0].scrollWidth <= $projectCardsRow.outerWidth()) {
            $('.cards-arrow-left, .cards-arrow-right').hide();
        }
    }
    //

    // Continuous one-direction rightward looping for certificate-section cards-row
    var $certRow = $('#certificate_body .cards-row');
    if ($certRow.length) {
        function setupCertLoop() {
            var $items = $certRow.children();
            if ($items.length < 2) return;

            // compute original width of one set
            var originalWidth = 0;
            $items.each(function(){ originalWidth += $(this).outerWidth(true); });

            // clone items to create seamless loop
            $certRow.append($items.clone());

            var paused = false;
            var rafId = null;
            var speed = 1.5; // pixels per frame (approx)

            function step(){
                if (!paused) {
                    var cur = $certRow.scrollLeft();
                    var next = cur + speed;
                    // when past original set, wrap back by subtracting originalWidth
                    if (next >= originalWidth) next = next - originalWidth;
                    $certRow.scrollLeft(next);
                }
                rafId = requestAnimationFrame(step);
            }

            // pause/resume on hover/focus (desktop) and touch (mobile)
            $certRow.on('mouseenter focusin touchstart', function(){ paused = true; });
            $certRow.on('mouseleave focusout touchend', function(){ paused = false; });

            // start loop
            step();
        }

        // initialize after layout
        setTimeout(setupCertLoop, 80);
    }

    // FAQ Accordion Toggle
    $('.faq-header').on('click', function() {
        var item = $(this).closest('.faq-item');
        
        // Toggle active class on clicked element
        item.toggleClass('active');
        
        // Optional: Collapse other open FAQ elements automatically
        item.siblings().removeClass('active');
    });

    //Hide the arrow for carousel in company profile if only 1 slide
    var lengthSlide = $("#companyProfileText").find(".carousel-item");
    if(lengthSlide.length == 1){
        $(".arrow_text_company_profile").hide();
    }
    //

    $(".carousel_prev").find('img').hide();
    $(".carousel_next").find('img').hide();

    $(".gallery_bg").find("a").each(function(){
        var idGallery = $(this).attr("id");

        $("#"+idGallery).on("click", function(){
            $(".content_gallery").children().remove();

            $('#gallery_modal').modal('show');
            if(idGallery == "residence_btn"){
                $(".gallery_show_img").attr("src", baseUrl+"/gallery/residence/"+residence_img[0].url);
                showGalleryContent(residence_img, "residence");
                $("#gallery_modal").find(".modal-title").html("<b>Residence</b>");
                $(".modal-content").css({"background-image":"url("+baseUrl+"/bg_residence.png')"});
            }else if(idGallery == "building_btn"){
                $(".gallery_show_img").attr("src", baseUrl+"/gallery/building/"+building_img[0].url);
                showGalleryContent(building_img, "building");
                $("#gallery_modal").find(".modal-title").html("<b>Building</b>");
                $(".modal-content").css({"background-image":"url("+baseUrl+"/bg_building.png')"});
            }else if(idGallery == "retail_btn"){
                $(".gallery_show_img").attr("src", baseUrl+"/gallery/retail/"+retail_img[0].url);
                showGalleryContent(retail_img, "retail");
                $("#gallery_modal").find(".modal-title").html("<b>Retail</b>");
                $(".modal-content").css({"background-image":"url("+baseUrl+"/bg_retail.png')"});
            }
        });
    });

    //Menu Product
    $.each(product_array, function( index, value ) {
        var image_src = baseUrl+"/product/"+value.name+"/"+value.logo;
        $("#inside_box_solution").append('<div class="contentBlock_solution" id="'+value.name+'"><center><img src="'+image_src+'" style="height:120%;width:100%"></center></div>');
        $("#"+value.name).on("click", function(){

            if(value.type == "image"){
                $('.product_modal').modal('show');
                $('.product_modal').attr('id', 'division_'+value.name);
                $("#division_"+value.name).find("#template_product_popup_image .row").children().remove();
                $("#division_"+value.name).find(".division_name").html('<center><img src="'+image_src+'" style="height:20%;width:20%;"></center><br><br>');
                $("#division_"+value.name).find(".division_desc").html('<center><p>'+value.desc+'</p></center><br><br>');

                $("#division_"+value.name).find("#template_product_popup_image").show();

                //Show overflow scroll if brand is more than 4
                if(value.product.length > 4){
                    $("#division_"+value.name).find("#template_product_popup_image").css({"overflow-y":"scroll","overflow-x":"hidden","height":"210px"});
                }
                //

                $.each(value.product, function(index, content){
                    var product_logo = baseUrl+"/product/"+value.name+"/"+content.product_name+"/"+content.product_logo;
                    $("#division_"+value.name).find("#template_product_popup_image .row").append('<div class="col-md-3 col-sm-3" id="product_'+content.product_name+'"><center><img src="'+product_logo+'" style="height:55%;width:55%;cursor:pointer;"></center></div>');

                    $("#product_"+content.product_name).on("click",function(){
                        var product_table = baseUrl+"/product/"+value.name+"/"+content.product_name+"/"+content.product_table;
                        $("#division_"+value.name).modal('hide');
                        $('#detailProduct_modal').modal('show');
                        $('#detailProduct_modal').find('.product_gallery .row').children().remove();
                        $('#detailProduct_modal').find('.modal-header .fa-arrow-left').attr("data-target", "#division_"+value.name);
                        $('#detailProduct_modal').find('.product_desc').html(content.product_desc);
                        $('#detailProduct_modal').find('.product_table img').attr("src", product_table);
                        $("#carouselProdukImage").find("ul.carousel-indicators").children().remove();
                        $("#carouselProdukImage").find(".carousel-inner").children().remove();

                        $.each(content.product_image, function(index, img){
                            var imgName = baseUrl+"/product/"+value.name+"/"+content.product_name+"/"+img.url;
                            $('#detailProduct_modal').find('.product_gallery .row').append('<div class="col-md-3 col-sm-3 imgProduct" id="img_'+index+'"><center><img src="'+imgName+'" style="height:90%;width:90%;"></center></div>');
                            $('#carouselProdukImage').find(".ul.carousel-indicators").append('<li data-target="#carouselProdukImage" data-slide-to="'+index+'"></li>');
                            $('#carouselProdukImage').find(".carousel-inner").append('<div class="carousel-item" data-id="'+index+'"><center><img id="imgCarousel" src="'+imgName+'" style="cursor:zoom-in;"><center></div>');
                            if(index == 0){
                                $("#carouselProdukImage").find(".carousel-item").addClass("active");
                            }

                            $(".imgProduct#img_"+index).on("click", function(){
                                //var bigImage = baseUrl+"/product/"+value.name+"/"+content.product_name+"/"+content.product_image[index].url;
                                $('#carouselProdukImage').find(".carousel-item.active").removeClass('active');
                                $('#carouselProdukImage').find(".carousel-item[data-id="+index+"]").addClass('active');
                            });
                        });

                    });
                });
            }else if(value.type == "text"){
                $('.product_modal').modal('show');
                $('.product_modal').attr('id', 'division_'+value.name);
                $("#division_"+value.name).find("#template_product_popup_image").css({"height":"auto"});
                $("#division_"+value.name).find("#template_product_popup_image .row").children().remove();
                $("#division_"+value.name).find(".division_name").html('<center><img src="'+image_src+'" style="height:20%;width:20%;"></center><br><br>');
                $("#division_"+value.name).find(".division_desc").html('<center><p>'+value.desc+'</p></center><br><br>');

                $.each(value.product, function(index, content){
                    var product_logo = baseUrl+"/product/"+value.name+"/"+content.product_name+"/"+content.product_logo;
                    $("#division_"+value.name).find("#template_product_popup_image .row").append('<div class="col-md-3 col-sm-3" id="product_'+content.product_name+'"><center><img src="'+product_logo+'" style="height:55%;width:55%;cursor:pointer;"></center></div>');

                    $("#product_"+content.product_name).on("click",function(){
                        var Urlproduct = baseUrl+"/product/"+value.name+"/"+content.product_name;
                        $("#division_"+value.name).modal('hide');
                        $('#subOption_modal').modal('show');
                        
                        //Hide the right arrow and left arrow if subMenu is only 4 or less than 5
                        if(!content.hasOwnProperty("product_submenu") || (content.hasOwnProperty("product_submenu") && content.product_submenu.length <= 4) ){
                            $(".solution_subOption-prev").hide();
                            $(".solution_subOption-next").hide();
                        }else{
                            $(".solution_subOption-prev").show();
                            $(".solution_subOption-next").show();
                        }
                        //

                        $('#subOption_modal').find('#inside_box_subOption').children().remove();
                        $('#subOption_modal').find('.modal-header .fa-arrow-left').show();
                        $("#template_submenu").find("ul").children().remove();
                        $('#subOption_modal').find('.modal-header .fa-arrow-left').attr("data-target", "#division_"+value.name);
                        $('#subOption_modal').find('.division_name').html('<center><img src="'+Urlproduct+"/"+content.product_logo+'" style="height:20%;width:20%;"></center><br><br>'); 
                        $('#subOption_modal').find('.division_desc').html("<p>"+content.product_desc+"</p>");

                        $.each(content.product_submenu, function(index, menu){
                            $('#subOption_modal').find('.division_brand #template_product_popup_text #inside_box_subOption').append('<div class="col-md-4 col-sm-4 menuProduct" id="menu_'+index+'"><center>'+menu.menu_name+'</center></div>');
                            if(content.product_submenu.length == 1){
                                $('#subOption_modal').find('#inside_box_subOption .menuProduct').css({"border-right":"none"});
                            }
                            $("#menu_"+index).on("click",function(){
                                $("#template_submenu").find("ul").children().remove();
                                $.each(menu.menu_submenu, function(indexSubMenu, submenu){
                                    $("#template_submenu").find("ul").append("<li style='cursor:pointer;' class='subMenu_"+index+"_"+indexSubMenu+"'>"+submenu.subMenu_name+"</li>");

                                    $(".subMenu_"+index+"_"+indexSubMenu).on("click",function(){
                                        $("#subOption_modal").modal('hide');
                                        $('#detailProduct_modal').modal('show');

                                        $('#detailProduct_modal').find('.product_gallery .row').children().remove();
                                        $('#carouselProdukImage').find(".ul.carousel-indicators").children().remove();
                                        $('#carouselProdukImage').find(".carousel-inner").children().remove();
                                        $('#detailProduct_modal').find('.modal-header .fa-arrow-left').attr("data-target", "#subOption_modal");
                                        $('#detailProduct_modal').find('.product_desc').html("<p>"+submenu.subMenu_desc+"</p>");

                                        if(submenu.subMenu_table != ''){
                                            var product_table_url = baseUrl+"/product/"+value.name+"/"+content.product_name+"/"+menu.menu_folder+"/"+submenu.subMenu_table;
                                            $('#detailProduct_modal').find('.product_table img').show();
                                            $('#detailProduct_modal').find('.product_table img').attr("src", product_table_url);
                                        }else{
                                            $('#detailProduct_modal').find('.product_table img').hide();
                                            $('#detailProduct_modal').find('.product_table').html("<p>No specification table</p>");
                                        }
                                        $.each(submenu.subMenu_image, function(indexImage, imageSubMenu){
                                            var imgName = baseUrl+"/product/"+value.name+"/"+content.product_name+"/"+menu.menu_folder+"/"+imageSubMenu.url;
                                            $('#detailProduct_modal').find('.product_gallery .row').append('<div class="col-md-3 col-sm-3 imgProduct" id="img_'+indexImage+'"><center><img src="'+imgName+'" style="height:90%;width:90%;"></center></div>');
                                            $('#carouselProdukImage').find(".ul.carousel-indicators").append('<li data-target="#carouselProdukImage" data-slide-to="'+indexImage+'"></li>');
                                            $('#carouselProdukImage').find(".carousel-inner").append('<div class="carousel-item" data-id="'+indexImage+'"><center><img src="'+imgName+'" id="imgCarouselText" style="cursor:zoom-in;"><center></div>');

                                            if(indexImage == 0){
                                                $("#carouselProdukImage").find(".carousel-item").addClass("active");
                                            }

                                            $(".imgProduct#img_"+indexImage).on("click", function(){
                                                //var bigImage = baseUrl+"/product/"+value.name+"/"+content.product_name+"/"+content.product_image[index].url;
                                                $('#carouselProdukImage').find(".carousel-item.active").removeClass('active');
                                                $('#carouselProdukImage').find(".carousel-item[data-id="+indexImage+"]").addClass('active');
                                            });
                                        });

                                    });
                                });
                            });
                        });
                    });
                });
            }else if(value.type == "gallery"){
                var active_index = 0;
                $('.productGallery2_modal').modal('show');
                $('.productGallery2_modal').find(".fa.fa-arrow-left").hide();

                $(".division_list").find('.row').children().remove();
                $('#carouselProdukGallery2Image').find(".ul.carousel-indicators").children().remove();
                $('#carouselProdukGallery2Image').find(".carousel-inner").children().remove();
                $('.productGallery2_modal').attr('id', 'division_'+value.name);

                $.each(value.product, function(index, content){
                    var product_logo = baseUrl+"/product/"+value.name+"/"+content.product_logo;

                    $('.division_list').find('.row').append('<div class="col-md-12 col-sm-12 imgProduct" id="img_'+index+'"><center><img src="'+product_logo+'" style="height:50%;width:50%;"></center></div>');

                    $('#carouselProdukGallery2Image').find(".ul.carousel-indicators").append('<li data-target="#carouselProdukGallery2Image" data-slide-to="'+index+'"></li>');
                    $('#carouselProdukGallery2Image').find(".carousel-inner").append('<div class="carousel-item" data-id="'+index+'"><center><img id="imgCarousel2" src="'+product_logo+'"><br><br><center></div>');
                    if(index == 0){
                        $("#carouselProdukGallery2Image").find(".carousel-item").addClass("active");
                        $(".imgProduct#img_"+index).addClass("active");
                    }

                    $(".imgProduct#img_"+index).on("click", function(){
                        //var bigImage = baseUrl+"/product/"+value.name+"/"+content.product_name+"/"+content.product_image[index].url;
                        $('#carouselProdukGallery2Image').find(".carousel-item.active").removeClass('active');
                        $('#carouselProdukGallery2Image').find(".carousel-item[data-id="+index+"]").addClass('active');
                        $(".row").find(".imgProduct.active").removeClass("active");
                        $(".imgProduct#img_"+index).addClass("active");
                    });
                });

                $("#carouselProdukGallery2Image .carousel_prev, #carouselProdukGallery2Image .carousel_next").on("click", function(){
                    $(".row").find(".imgProduct.active").removeClass("active");
                    active_index = $('#carouselProdukGallery2Image').find(".carousel-item.active").attr("data-id");
                });
            
            }else if(value.type == "brandGallery"){

                $('#subOption_modal').modal('show');
                $('.productGallery_modal').find(".fa.fa-arrow-left").show();
                $('#subOption_modal').find('#template_submenu ul').children().remove();
                $('#subOption_modal').find('.modal-header .fa-arrow-left').hide();
                $('#subOption_modal').find('#inside_box_subOption').children().remove();
                $('#subOption_modal').find(".division_name").html('<center><img src="'+image_src+'" style="height:20%;width:20%;"></center><br><br>');
                $('#subOption_modal').find(".division_desc").html('<p>'+value.desc+'</p>');

                $('#subOption_modal').find("#template_product_popup_text").show();

                //Hide the right arrow and left arrow if subMenu is only 4 or less than 5
                if((value.product).length <= 4 ){
                    $(".solution_subOption-prev").hide();
                    $(".solution_subOption-next").hide();
                }else{
                    $(".solution_subOption-prev").show();
                    $(".solution_subOption-next").show();
                }
                //

                $.each(value.product, function(productIndex, content){
                    $('#subOption_modal').find('.division_brand #template_product_popup_text #inside_box_subOption').append('<div class="col-md-3 col-sm-3 menuProduct" id="product_'+productIndex+'" data-id="'+productIndex+'"><center>'+content.product_name+'</center></div>');

                    $("#product_"+productIndex).on("click",function(){
                        $('.productGallery_modal').modal('show');
                        $('#subOption_modal').modal('hide');

                        $(".division_list").find('.row').children().remove();
                        $('#carouselProdukGalleryImage').find(".ul.carousel-indicators").children().remove();
                        $('#carouselProdukGalleryImage').find(".carousel-inner").children().remove();
                        var idProduct = $(this).attr("data-id");
                        $('.productGallery_modal').attr('id', 'division_'+idProduct);
                        $('.productGallery_modal').find('.modal-header .fa-arrow-left').attr("data-target", '#subOption_modal');

                        $.each(value.product[idProduct].product_image, function(imageIndex, imageContent){
                            var product_logo = baseUrl+"/product/"+value.name+"/"+content.product_name+"/"+imageContent.url;

                            $('.division_list').find('.row').append('<div class="col-md-12 col-sm-12 imgProduct" id="imgBrand_'+imageIndex+'"><center><img src="'+product_logo+'" style="height:50%;width:50%;"></center></div>');

                            $('#carouselProdukGalleryImage').find(".ul.carousel-indicators").append('<li data-target="#carouselProdukGalleryImage" data-slide-to="'+imageIndex+'"></li>');
                            $('#carouselProdukGalleryImage').find(".carousel-inner").append('<div class="carousel-item" data-id="'+imageIndex+'"><center><img id="imgCarousel2" src="'+product_logo+'"><br><br><center></div>');

                            if(imageIndex == 0){
                                $("#carouselProdukGalleryImage").find(".carousel-item").addClass("active");
                                $(".imgProduct#img_"+imageIndex).addClass("active");
                            }

                            $(".imgProduct#imgBrand_"+imageIndex).on("click", function(){
                                //var bigImage = baseUrl+"/product/"+value.name+"/"+content.product_name+"/"+content.product_image[index].url;
                                $('#carouselProdukGalleryImage').find(".carousel-item.active").removeClass('active');
                                $('#carouselProdukGalleryImage').find(".carousel-item[data-id="+imageIndex+"]").addClass('active');
                                $(".row").find(".imgProduct.active").removeClass("active");
                                $(".imgProduct#img_"+imageIndex).addClass("active");
                            });
                        });
                    });
                });
            }

        });
    });

    //Menu Service
    $.each(service_array, function( index, value ) {
        var service_url = baseUrl+"/service/";
        var image_src = service_url+"/"+value.before;
        var image_after_src = service_url+"/"+value.after;
        var image_popup_src = service_url+"/"+value.big;
        $("#inside_box").append('<div class="contentBlock" id="'+value.id+'"><center><img src="'+image_src+'" class="service_image"><br>'+value.text+'</center></div>');

        // Hover function
        $("#"+value.id).find("img").hover(function(){
            $(this).attr("src", image_after_src);
        }, function(){
            $(this).attr("src", image_src);
        });

        //Click to show modal
        $("#"+value.id).on("click", function(){
            $('#service_modal').modal('show');
            
            $("#service_modal").find(".service_popup_img").html('<center><img src="'+image_popup_src+'" class="service_image_popup"><br><br><h4>'+value.text+'</h4></center>');
            if(value.id != "understand_service"){
                $("#service_modal").find("#demo").hide();
                $("#service_modal").find("#content_service").show();
                $("#service_modal").find("#content_service").html(value.desc);
            }else{
                $("#demo").find("ul.carousel-indicators").children().remove();
                $("#demo").find(".carousel-inner").children().remove();
                $("#service_modal").find("#content_service").hide();
                $("#service_modal").find("#demo").show();
                $.each(value.desc, function( index, content ) {
                    $("#demo").find("ul.carousel-indicators").append('<li data-target="#demo" data-slide-to="'+index+'"></li>');
                    $("#demo").find(".carousel-inner").append('<div class="carousel-item"><center><div class="col-md-12 col-sm-12" id="content_service">'+content+'</div><center></div>');
                    if(index == 0){
                        $("#demo").find(".carousel-item").addClass("active");
                    }
                });
            }
        });
    });

    function showGalleryContent(imgArray, category){
        $('#carouselGalleryImage').find(".ul.carousel-indicators").children().remove();
        $('#carouselGalleryImage').find(".carousel-inner").children().remove();
        //looping image for residence
        $.each(imgArray, function( index, value ) {
            var base_url = baseUrl+"/gallery/";
            var image_src = base_url+"/"+category+"/"+value.url;
            $(".content_gallery").append('<div class="col-md-3 col-sm-3 gallery_box"><img src="'+image_src+'" class="gallery_box_img" data-index="'+index+'"></div>');

            $(".gallery_box_img").on("click",function(){
                //var imgsrc = $(this).attr('src');
                //$(".gallery_show_img").attr("src", imgsrc);
                //if(imgsrc == image_src){
                    //$(".gallery_desc").text(value.desc);
                //}
                var nomor = $(this).attr('data-index');
                $('#carouselGalleryImage').find(".carousel-item.active").removeClass('active');
                $('#carouselGalleryImage').find(".carousel-item[data-id="+nomor+"]").addClass('active');
            });

            $("#carouselGalleryImage").find(".carousel-inner").append('<div class="carousel-item" data-id="'+index+'"><center><img data-enlargeable src="'+image_src+'" class="gallery_show_img"></center></div>');

            if(index == 0){
                $("#carouselGalleryImage").find(".carousel-item").addClass("active");
            }
        });
    }

    $(".topnav").find('a').each(function(){
        var idMenu = $(this).attr("id");        

        $("#"+idMenu).on("click", function(){
            $("#"+idMenu).parent().find('.active').removeClass('active');
            $("#"+idMenu).addClass("active");
            if(idMenu == "about_menu"){
                $(".logo_video").css({"opacity":"1","transition":"opacity 2s linear","transition-delay":"2s"});
            }
            if($(".topnav").hasClass('responsive')){
                myFunction();
            }
        });
    });

    $(".img_gallery_opt.residence_img").hover(function(){
        $(this).addClass('img_hover');
        $(this).attr("src", baseUrl+"/residence.jpg");
    }, function(){
        $(this).attr("src", baseUrl+"/residence_red.jpg");
    });
    $(".img_gallery_opt.building_img").hover(function(){
        $(this).attr("src", baseUrl+"/building.jpg");
    }, function(){
        $(this).attr("src", baseUrl+"/building_red.jpg");
    });
    $(".img_gallery_opt.retail_img").hover(function(){
        $(this).attr("src", baseUrl+"/retail.jpg");
    }, function(){
        $(this).attr("src", baseUrl+"/retail_red.jpg");
    });

    //$('img[data-enlargeable]').addClass('img-enlargeable').click(function(){
    $('.largeable_img .carousel-inner').click(function(){
        //var src = $(this).attr('src');
        var src = $(this).find(".active img").attr('src');
        var modal;
        function removeModal(){ 
            modal.remove(); 
            $('body').off('keyup.modal-close'); 
        }
        modal = $('<div class="bigBackground">').css({
            //background: 'url('+src+') ',
            //backgroundColor: 'blue',
            backgroundSize: 'contain',
            backgroundRepeat: 'no-repeat',
            position:'fixed',
            zIndex:'10000',
            cursor: 'zoom-out',
            }).append("<img src="+src+" class='imgBigBackground'></img>").click(function(){
            removeModal();
        }).appendTo('body');

        //handling ESC
        $('body').on('keyup.modal-close', function(e){
            if(e.key==='Escape'){ removeModal(); } 
        });
    });

    $('.zoomIn').addClass('img-enlargeable').click(function(){
        var src = $(this).attr('src');
        var modal;
        function removeModal(){ 
            modal.remove(); 
            $('body').off('keyup.modal-close'); 
        }
        modal = $('<div class="zoomInBackground">').css({
            backgroundSize: 'contain',
            backgroundRepeat: 'no-repeat',
            position:'fixed',
            zIndex:'10000',
            cursor: 'zoom-out',
            }).append("<img src="+src+" class='imgZoomBackground'></img>").click(function(){
            removeModal();
        }).appendTo('body');

        //handling ESC
        $('body').on('keyup.modal-close', function(e){
            if(e.key==='Escape'){ removeModal(); } 
        });
    });

    $('.product_image_chosen .carousel-inner').click(function(){
        var src = $(this).find(".active img").attr('src');

        var modal;
        function removeModal(){ 
            modal.remove(); 
            $('body').off('keyup.modal-close'); 
        }
        modal = $('<div class="productZoomInBackground">').css({
            backgroundSize: 'contain',
            backgroundRepeat: 'no-repeat',
            position:'fixed',
            zIndex:'10000',
            cursor: 'zoom-out',
            }).append("<img src="+src+" class='productImgZoomBackground' height='75%'></img>").click(function(){
            removeModal();
        }).appendTo('body');

        //handling ESC
        $('body').on('keyup.modal-close', function(e){
            if(e.key==='Escape'){ removeModal(); } 
        });
    });

    /*$(".contentBlock_solution").on("click",function(){
        $('#product_modal').modal('show');
    });*/

});

//Hover Carousel in service popup
$(".carousel_prev").hover(function(){
    $(".carousel_prev").find('img').show();
}, function(){
    $(".carousel_prev").find('img').hide();
});

$(".carousel_next").hover(function(){
    $(".carousel_next").find('img').show();
}, function(){
    $(".carousel_next").find('img').hide();
});
//

/*$(".horizon-next").hover(function(){
    loopNext();
}, function(){
    $('.container_vision').stop();
});*/
$(".horizon-prev").on("click", function(){
    loopPrev();
});
$(".horizon-next").on("click", function(){
    loopNext();
});

/*function loopNext(){
    $('.container_vision').animate({scrollLeft:'+=50'}, 'fast', 'linear', loopNext);
}*/
function loopNext(){
    $('.container_vision').animate({scrollLeft:'+=70'}, 'fast', 'linear');
}
function loopPrev(){
    $('.container_vision').animate({scrollLeft:'-=70'}, 'fast', 'linear');
}

$('.solution_horizon-prev').on("click",function() {
    loopPrevSolution();
});

$(".solution_horizon-next").on("click",function(){
    loopNextSolution();
});

function loopNextSolution(){
    $('.container_solution').animate({scrollLeft:'+=70'}, 'fast', 'linear');
}
function loopPrevSolution(){
    $('.container_solution').animate({scrollLeft:'-=70'}, 'fast', 'linear');
}

$('.solution_subOption-prev').on("click",function() {
    loopPrevsubOption();
});

$(".solution_subOption-next").on("click",function(){
    loopNextsubOption();
});

function loopNextsubOption(){
    $('.container_subOption').animate({scrollLeft:'+=40'}, 'fast', 'linear');
}
function loopPrevsubOption(){
    $('.container_subOption').animate({scrollLeft:'-=40'}, 'fast', 'linear');
}

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

var widthScreen = $(window).width();
$(window).resize(function() {
    widthScreen = $(window).width();
});

function setActiveMenu(id) {
    $(".nav-link").removeClass("active");
    $("#" + id).addClass("active");
}
/*
$(window).scroll(function() {
    var scrollTop = $(window).scrollTop();
    console.log("big: "+scrollTop+" -- "+widthScreen);
    $(".topnav").find('.active').removeClass('active');
    if(widthScreen >= 1425 && widthScreen <= 1905){ //1425 macbook 13inch 1903 pc
        if(scrollTop < 1004){
            $("#home_menu").addClass("active");
        }else if(scrollTop >= 1004 && scrollTop < 1774) {
            $("#about_menu").addClass("active");
            $(".logo_video").css({"opacity":"1","transition":"opacity 2s linear","transition-delay":"3s"});
        }else if(scrollTop >= 1774 && scrollTop < 2652){
            $("#product_menu").addClass("active");
        }else if(scrollTop >= 2652 && scrollTop < 3448){
            $("#project_menu").addClass("active");
        }else if(scrollTop >= 3448){
            $("#contact_menu").addClass("active");
        }
    }else if(widthScreen <= 375){ //iphone X screen 375 x 812
        if(scrollTop < 500){
            $("#home_menu").addClass("active");
        }else if(scrollTop >= 500 && scrollTop < 1200) {
            $("#about_menu").addClass("active");
            $(".logo_video").css({"opacity":"1","transition":"opacity 2s linear","transition-delay":"3s"});
        }else if(scrollTop >= 1200 && scrollTop < 1700){
            $("#product_menu").addClass("active");
        }else if(scrollTop >= 1700 && scrollTop < 2500){
            $("#project_menu").addClass("active");
        }else if(scrollTop >= 2500){
            $("#contact_menu").addClass("active");
        }
    }
});*/
//Check scroll on viewport https://stackoverflow.com/questions/34838507/change-css-on-scroll-depending-on-screen-size
//GMAPS: https://developers.google.com/maps/documentation/embed/get-started
//Billing https://console.cloud.google.com/billing/01FF86-116910-4810DF/manage?cloudshell=false&project=dianaglass
//Remove anchor tags https://stackoverflow.com/questions/20198731/how-do-you-remove-anchor-tags-from-url
</script>