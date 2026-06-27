<style>
    @media screen and (min-width: 1900px) { /* large screen pc */
        .cta-section { margin: -195px 14% 0px; }
        .footer-main {
                padding-left: 15%;
                padding-right: 0%;
            }
        .footer-divider { margin: 14px 52% 14px 0;}
        .footer-bottom { margin: 0px 14%; }
    }
</style>
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
                    <li><a href="{{ route('show.home') }}#home_body">Home</a></li>
                    <li><a href="{{ route('show.home') }}#about_body">About Us</a></li>
                    <li><a href="{{ route('show.home') }}#product_body">Product</a></li>
                    <li><a href="{{ route('show.project') }}">Project</a></li>
                    <li><a href="{{ route('show.home') }}#faq_body">FAQ</a></li>
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