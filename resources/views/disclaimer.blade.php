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
    .general-list { 
        margin: 2% 5% 15% 5%;
    }
    .general-list p{
        color: #4B4B4B !important;
        font-family: 'Manrope', sans-serif;
        font-size: 15px;
        text-align: justify;
    }
    .general-list h2{
        color: black;
        font-family: 'Inter', sans-serif;
        font-weight: bold;
        font-size: 20px !important;
    }

    @media screen and (max-width: 600px) {
        .project-top{height:auto; padding-left:50px; padding-right:50px; justify-content:center; flex-wrap:wrap; text-align:center; padding-top: 20%; padding-bottom: 80px;}
        .project-top h1{font-size:24px; width:100%; justify-content:center;}
        .project-top-copy { width:100%; text-align:center; margin-top: 18px; }
        .general-list { margin-bottom: 40%; margin-top: 5%; }
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
            <h1>Disclaimer</h1>
        </div>

        <!-- DISCLAIMER BODY -->
        <div class="general-list">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <p>Informasi yang tersedia di website ini disediakan untuk tujuan informasi umum. Kami berupaya untuk memastikan seluruh informasi, spesifikasi produk, dan konten yang ditampilkan akurat serta terkini. Namun, kami tidak memberikan jaminan atas kelengkapan, keakuratan, atau kesesuaian informasi tersebut untuk kebutuhan tertentu.</p>
                    <p>Spesifikasi produk, ukuran, warna, ketersediaan, dan informasi teknis dapat berubah sewaktu-waktu tanpa pemberitahuan sebelumnya sebagai bagian dari pengembangan dan peningkatan kualitas produk kami. Tampilan gambar atau ilustrasi pada website ini dapat berbeda dengan produk sebenarnya.</p>
                    <p>Setiap informasi teknis, rekomendasi, atau panduan yang disajikan di website ini sebaiknya digunakan sebagai referensi dan diverifikasi kembali oleh pihak yang berwenang, seperti arsitek, kontraktor, konsultan, atau profesional terkait sebelum diterapkan pada suatu proyek.</p>
                    <p>Perusahaan tidak bertanggung jawab atas segala kerugian, kerusakan, atau konsekuensi yang timbul akibat penggunaan informasi yang terdapat pada website ini.</p> <p>Website ini juga dapat memuat tautan ke situs pihak ketiga. Kami tidak memiliki kendali atas isi maupun kebijakan situs tersebut dan tidak bertanggung jawab atas informasi yang disediakan oleh pihak ketiga.</p>
                    <p>Dengan mengakses dan menggunakan website ini, Anda dianggap telah memahami dan menyetujui isi disclaimer ini.</p>
                    <p>Untuk informasi lebih lanjut mengenai produk dan layanan kami, silakan menghubungi tim kami.</p>
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