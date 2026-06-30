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
        margin-bottom: -8%;
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

    /* Tab Navigation */
    .project-tabs {
        display: flex;
        justify-content: center;
        background: rgba(60, 55, 53, 0.2);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        gap: 0;
        border-radius: 32px 32px 0 0;
        margin: 0 auto;
        position: relative;
        z-index: 5;
        width: min(67%, 1100px);
        padding: 8px 0;
        transform: translate(-35px);
    }
    .project-tab {
        flex: 1;
        padding: 16px 40px;
        color: #FFF;
        font-family: 'Inter', sans-serif;
        font-size: 1.25rem;
        font-weight: 600;
        cursor: pointer;
        border-bottom: none;
        transition: all 0.2s ease;
        letter-spacing: -0.56px;
        background: none;
        border: none;
        position: relative;
    }
    .project-tab:hover {
        color: #FFBCBC;
        outline: none;
    }
    .project-tab.active {
        color: #FFBCBC;
        outline:none;
    }
    .project-tab.active::after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 50%;
        transform: translateX(-50%);
        width: 72px;
        height: 4px;
        background: #FFBCBC;
        border-radius: 4px 4px 0 0; 
        outline:none;
    }

    /* Tab Panels */
    .tab-panel { display: none; }
    .tab-panel.active { display: block; }

    .project-badge-coming-soon {
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.45);
        color: #ffffff;
        font-size: 1.1rem;
        font-weight: 700;
        font-family: 'Asenpro', sans-serif;
        font-style: italic;
        letter-spacing: 0.04em;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 3;
        pointer-events: none;
    }

    /* Project-sanno */
    .project-sanno {
        position: relative;
        overflow: hidden;
        cursor: pointer;
    }

    .project-sanno img {
        width: 100%;
        display: block;
        transition: transform .5s ease;
    }

    /* Gradient */
    .project-sanno::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(
            to top,
            rgba(0,0,0,.24),
            transparent
        );
        opacity: 0;
        transition: .4s ease;
        z-index: 1;
    }

    /* Text awalnya hilang */
    .project-sanno p {
        position: absolute;
        left: 40px;
        bottom: 30px;
        color: #fff;
        margin: 0;
        z-index: 2;
        opacity: 0;
        transform: translateY(20px);
        transition: all .4s ease;
    }

    /* Hover */
    .project-sanno:hover::before {
        opacity: 1;
    }

    .project-sanno:hover p {
        opacity: 1;
        transform: translateY(0);
    }

    .project-sanno:hover img {
        transform: scale(1.08);
    }

    /* Project card */
    .project-card {
        position: relative;
        overflow: hidden;
        cursor: pointer;
    }
    .project-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.3s ease;
    }
    .project-card:hover img {
        transform: scale(1.04);
    }

    /* Exterior: 2 per row */
    .grid-exterior {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 0;
    }
    .grid-exterior .project-card img {
        height: 380px;
    }

    /* Aluminium: alternating 2-3-2-3 */
    .grid-aluminium {
        display: grid;
        gap: 0;
    }
    .aluminium-row-2 {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 0;
    }
    .aluminium-row-3 {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 0;
    }
    .aluminium-row-2 .project-card img { height: 420px; }
    .aluminium-row-3 .project-card img { height: 320px; }

    /* Interior: 3 per row */
    .grid-interior {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 0;
    }
    .grid-interior .project-card img {
        height: 320px;
    }

    .project-list { 
        margin-bottom: 15%;
        margin-top: -35px; 
    }

    @media screen and (max-width: 600px) {
        .project-top{height:auto; padding-left:50px; padding-right:50px; justify-content:center; flex-wrap:wrap; text-align:center; padding-top: 20%; padding-bottom: 100px;}
        .project-top h1{font-size:24px; width:100%; justify-content:center;}
        .project-top-copy { width:100%; text-align:center; margin-top: 18px; }
        .project-list { margin-bottom: 40%; margin-top: -11%; }
        .project-tab { padding: 12px 20px; font-size: 0.85rem; }
        .grid-exterior,
        .aluminium-row-2,
        .aluminium-row-3,
        .grid-interior { grid-template-columns: repeat(1, 1fr); }
        .grid-exterior .project-card img,
        .aluminium-row-2 .project-card img,
        .aluminium-row-3 .project-card img,
        .grid-interior .project-card img { height: 180px; }
        .project-tabs {
            width: 92%;
            bottom: 15px;
            left: 35px;
        }
        .project-tab {
            padding: 12px 16px;
            font-size: 0.85rem;
        }
        .project-tab.active::after {
            width: 36px;
        }
    }
    @media screen and (min-width: 1900px) {
        .project-top { height: 300px; }
        .project-top h1 { margin-left: 0; }
    }
    </style>
    <body>
        @include('navbar')

        <!-- HERO -->
        <div class="row project-top text-start">
            <h1>Our Project</h1>
            <div class="project-top-copy">
                <p>Every project is completed with high standards,<br>quality materials, and expert craftmanship for<br>precise results.</p>
            </div>
        </div>

        <!-- TABS -->
        <div class="project-tabs">
            <button class="project-tab active" data-tab="exterior">Exterior Glass</button>
            <button class="project-tab" data-tab="interior">Interior Glass</button>
            <button class="project-tab" data-tab="aluminium">Aluminium</button>
        </div>

        <!-- PROJECT BODY -->
        <div class="project-list">

            {{-- EXTERIOR TAB --}}
            <div class="tab-panel active" id="tab-exterior">
                <div class="grid-exterior">
                    @php 
                        $exteriorProjects = $projects->where('category', 'exterior')->take(15);
                        $smallestIdExterior = $exteriorProjects->min('id'); 
                    @endphp
                    @forelse($exteriorProjects as $project)
                    <div class="project-sanno">
                        <img src="{{ asset('images/projects/' . $project->projectpic) }}" alt="{{ $project->projectname }}" loading="lazy">
                        
                        {{-- Coming Soon badge on the latest project --}}
                        @if($project->id === $smallestIdExterior)
                            <div class="project-badge-coming-soon">Many more Exterior Glass Projects</div>
                        @endif

                        <div class="card-overlay">
                            <p class="card-label">{{ $project->projectname }}</p>
                        </div>
                    </div>
                    @empty
                    <div class="col-12"><p style="color:#aaa; padding:40px;">No exterior projects yet.</p></div>
                    @endforelse
                </div>
            </div>

            {{-- INTERIOR TAB --}}
            <div class="tab-panel" id="tab-interior">
                <div class="grid-interior">
                    @php 
                        $interiorProjects = $projects->where('category', 'interior')->take(15);
                        $smallestIdInterior = $interiorProjects->min('id');  
                    @endphp
                    @forelse($interiorProjects as $project)
                    <div class="project-sanno">
                        <img src="{{ asset('images/projects/' . $project->projectpic) }}" alt="{{ $project->projectname }}" loading="lazy">
                        
                        {{-- Coming Soon badge on the latest project --}}
                        @if($project->id === $smallestIdInterior)
                            <div class="project-badge-coming-soon">Many more Interior Glass Projects</div>
                        @endif

                        <div class="card-overlay">
                            <p class="card-label">{{ $project->projectname }}</p>
                        </div>
                    </div>
                    @empty
                    <div class="col-12"><p style="color:#aaa; padding:40px;">No interior projects yet.</p></div>
                    @endforelse
                </div>
            </div>

            {{-- ALUMINIUM TAB --}}
            <div class="tab-panel" id="tab-aluminium">
                @forelse($aluminiumChunks as $chunk)
                <div class="{{ $chunk['size'] === 2 ? 'aluminium-row-2' : 'aluminium-row-3' }}">
                    @foreach($chunk['items'] as $project)
                    <div class="project-sanno">
                        <img src="{{ asset('images/projects/' . $project->projectpic) }}" alt="{{ $project->projectname }}" loading="lazy">
                        
                        {{-- Coming Soon badge on the latest project --}}
                        @if($project->id === $smallestIdAluminium)
                            <div class="project-badge-coming-soon">Many more Aluminium Projects</div>
                        @endif

                        <div class="card-overlay">
                            <p class="card-label">{{ $project->projectname }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                @empty
                <div class="col-12"><p style="color:#aaa; padding:40px;">No aluminium projects yet.</p></div>
                @endforelse
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
    // Tab switching
    document.querySelectorAll('.project-tab').forEach(function(tab) {
        tab.addEventListener('click', function() {
            document.querySelectorAll('.project-tab').forEach(t => t.classList.remove('active'));
            document.querySelectorAll('.tab-panel').forEach(p => p.classList.remove('active'));
            this.classList.add('active');
            document.getElementById('tab-' + this.dataset.tab).classList.add('active');

            // Update the URL hash without triggering scroll
            history.replaceState(null, null, '#' + this.dataset.tab);
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('project_menu').classList.add('active');

        // Check URL hash and activate corresponding tab
        var hash = window.location.hash.replace('#', '');
        var validTabs = ['exterior', 'interior', 'aluminium'];

        if (hash && validTabs.includes(hash)) {
            document.querySelectorAll('.project-tab').forEach(t => t.classList.remove('active'));
            document.querySelectorAll('.tab-panel').forEach(p => p.classList.remove('active'));

            var targetTab = document.querySelector('.project-tab[data-tab="' + hash + '"]');
            var targetPanel = document.getElementById('tab-' + hash);

            if (targetTab && targetPanel) {
                targetTab.classList.add('active');
                targetPanel.classList.add('active');
            }
        }
    });
    </script>
</html>