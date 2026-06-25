<style>
@media screen and (min-width: 1900px) {
    .nav-inner {
        padding: 0px 0px;
        max-width: 92%;
    }
}
</style>

<!-- MENU BAR -->
<nav id="mainNav">
    <div class="nav-inner">
        <a href="#" class="nav-logo" onclick="$('#home_menu').click()">
            <img src="{{ asset('/images/diana_logo.png') }}" alt="PT. DIANA">
        </a>
        <button class="nav-hamburger" id="navToggle" aria-label="Toggle menu">
            <span></span><span></span><span></span>
        </button>
        <div class="nav-links" id="navLinks">
            <a href="{{ route('show.home') }}#home_body" id="home_menu" class="nav-link">Home</a>
            <a href="{{ route('show.home') }}#about_body" id="about_menu" class="nav-link">About Us</a>
            <a href="{{ route('show.home') }}#product_body" id="product_menu" class="nav-link">Product & Service</a>
            <a href="{{ route('show.home') }}#project_body" id="project_menu" class="nav-link">Project</a>
            <a href="{{ route('show.home') }}#faq_body" id="faq_menu" class="nav-link">FAQ</a>
            <a href="{{ route('show.home') }}#contact_body" id="contact_menu" class="nav-link">Contact Us</a>
        </div>
    </div>
</nav>

<script>
    document.getElementById('navToggle').addEventListener('click', function () {
        this.classList.toggle('open');
        var links = document.getElementById('navLinks');
        if (links) links.classList.toggle('open');
    });

    document.querySelectorAll('.nav-link').forEach(function (link) {
        link.addEventListener('click', function () {
            document.getElementById('navToggle').classList.remove('open');
            var links = document.getElementById('navLinks');
            if (links) links.classList.remove('open');
            document.querySelectorAll('.nav-link').forEach(function (l) { l.classList.remove('active'); });
            this.classList.add('active');
        });
    });
</script>