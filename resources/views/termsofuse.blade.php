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
            <h1>Terms of User</h1>
        </div>

        <!-- DISCLAIMER BODY -->
        <div class="general-list">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <p>Selamat datang di website kami. Dengan mengakses dan menggunakan website ini, Anda dianggap telah membaca, memahami, dan menyetujui seluruh syarat dan ketentuan yang berlaku. Jika Anda tidak menyetujui salah satu bagian dari syarat dan ketentuan ini, mohon untuk tidak menggunakan website ini.</p>
                    <h2>1. Penggunaan Website</h2>
                    <p>Website ini disediakan untuk memberikan informasi mengenai perusahaan, produk, layanan, dan aktivitas yang kami jalankan. Pengguna setuju untuk menggunakan website ini hanya untuk tujuan yang sah dan tidak melanggar peraturan perundang-undangan yang berlaku.</p>
                    <h2>2. Informasi Produk dan Layanan</h2>
                    <p>Kami berupaya menyediakan informasi produk dan layanan yang akurat dan terkini. Namun, spesifikasi, ukuran, warna, ketersediaan produk, serta informasi lainnya dapat berubah sewaktu-waktu tanpa pemberitahuan sebelumnya.</p>
                    <p>Informasi yang ditampilkan pada website ini tidak dapat dianggap sebagai penawaran yang mengikat dan dapat berubah sesuai kebutuhan operasional perusahaan.</p>
                    <h2>3. Hak Kekayaan Intelektual</h2>
                    <p>Seluruh konten yang terdapat pada website ini, termasuk namun tidak terbatas pada teks, gambar, logo, desain, grafik, video, dan materi lainnya merupakan milik perusahaan atau digunakan dengan izin yang sah.</p>
                    <p>Pengguna dilarang menyalin, menggandakan, mendistribusikan, memodifikasi, atau menggunakan konten website tanpa persetujuan tertulis dari perusahaan.</p>
                    <h2>4. Tanggung Jawab Pengguna</h2>
                    <p>Pengguna bertanggung jawab atas segala aktivitas yang dilakukan saat mengakses website ini dan tidak diperkenankan untuk:</p>
                    <ul>
                        <li>Menggunakan website untuk tujuan yang melanggar hukum.</li>
                        <li>Menyebarkan virus, malware, atau program berbahaya lainnya.</li>
                        <li>Mengakses atau mencoba mengakses sistem tanpa izin.</li>
                        <li>Mengganggu operasional atau keamanan website.</li>
                    </ul>
                    <h2>5. Batasan Tanggung Jawab</h2>
                    <p>Perusahaan tidak bertanggung jawab atas kerugian langsung maupun tidak langsung yang timbul akibat penggunaan atau ketidakmampuan menggunakan website ini, termasuk kesalahan informasi, gangguan layanan, atau masalah teknis lainnya.</p>
                    <h2>6. Tautan ke Situs Pihak Ketiga</h2>
                    <p>Website ini dapat berisi tautan ke situs pihak ketiga untuk tujuan informasi atau referensi. Kami tidak memiliki kendali atas isi maupun kebijakan situs tersebut dan tidak bertanggung jawab atas informasi yang disediakan oleh pihak ketiga.</p>
                    <h2>7. Perubahan Syarat dan Ketentuan</h2>
                    <p>Perusahaan berhak mengubah, memperbarui, atau menyesuaikan syarat dan ketentuan ini sewaktu-waktu tanpa pemberitahuan sebelumnya. Perubahan akan berlaku sejak dipublikasikan pada website ini.</p>
                    <h2>8. Hukum yang Berlaku</h2>
                    <p>Syarat dan ketentuan ini diatur dan ditafsirkan berdasarkan hukum yang berlaku di Republik Indonesia.</p>
                    <h2>9. Kontak</h2>
                    <p>Apabila Anda memiliki pertanyaan terkait syarat dan ketentuan ini, silakan menghubungi kami melalui informasi kontak yang tersedia pada website.</p>
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