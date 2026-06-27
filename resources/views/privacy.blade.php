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
            <h1>Privacy Policy</h1>
        </div>

        <!-- DISCLAIMER BODY -->
        <div class="general-list">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <p>Terakhir diperbarui: 03-Juni-2026</p>
                    <br>
                    <p>Kami menghargai privasi Anda dan berkomitmen untuk melindungi data pribadi yang Anda berikan saat mengakses dan menggunakan website kami. Kebijakan Privasi ini menjelaskan bagaimana kami mengumpulkan, menggunakan, menyimpan, dan melindungi informasi yang diperoleh melalui website ini.</p>
                    <h2>1. Informasi yang Kami Kumpulkan</h2>
                    <p>Kami dapat mengumpulkan informasi yang Anda berikan secara sukarela, termasuk namun tidak terbatas pada:</p>
                    <ul>
                        <li>Nama lengkap</li>
                        <li>Nama perusahaan</li>
                        <li>Alamat email</li>
                        <li>Nomor telepon</li>
                        <li>Alamat atau lokasi proyek</li>
                        <li>Informasi lain yang Anda kirimkan melalui formulir kontak, permintaan penawaran, atau komunikasi lainnya</li>
                    </ul>
                    <p>Selain itu, kami juga dapat mengumpulkan data teknis secara otomatis, seperti:</p>
                    <ul>
                        <li>Alamat IP</li>
                        <li>Jenis perangkat dan browser</li>
                        <li>Halaman yang dikunjungi</li>
                        <li>Waktu dan durasi kunjungan</li>
                        <li>Data analitik website lainnya</li>
                    </ul>
                    <h2>2. Penggunaan Informasi</h2>
                    <p>Kami dapat mengumpulkan informasi yang Anda berikan secara sukarela, termasuk namun tidak terbatas pada:</p>
                    <ul>
                        <li>Menanggapi pertanyaan dan permintaan Anda.</li> <li>Memberikan informasi mengenai produk dan layanan kami.</li>
                        <li>Menyusun penawaran atau konsultasi proyek.</li>
                        <li>Meningkatkan kualitas layanan dan pengalaman pengguna website.</li>
                        <li>Melakukan analisis dan pengembangan website.</li>
                        <li>Memenuhi kewajiban hukum yang berlaku.</li>
                    </ul>
                    <h2>3. Perlindungan Data</h2>
                    <p>Kami menerapkan langkah-langkah keamanan yang wajar untuk melindungi informasi pribadi Anda dari akses, penggunaan, perubahan, atau pengungkapan yang tidak sah.</p>
                    <p>Meskipun demikian, tidak ada metode transmisi data melalui internet yang sepenuhnya aman. Oleh karena itu, kami tidak dapat menjamin keamanan data secara mutlak.</p>
                    <h2>4. Pengungkapan Informasi kepada Pihak Ketiga</h2>
                    <p>Kami tidak menjual, menyewakan, atau memperdagangkan informasi pribadi pengguna kepada pihak ketiga.</p> <p>Informasi Anda hanya dapat dibagikan apabila:</p>
                    <ul>
                        <li>Diperlukan untuk memberikan layanan yang Anda minta.</li>
                        <li>Diwajibkan oleh hukum atau peraturan yang berlaku.</li>
                        <li>Diperlukan untuk melindungi hak, keamanan, dan kepentingan perusahaan.</li>
                    </ul>
                    <h2>5. Cookies</h2>
                    <p>Website ini dapat menggunakan cookies untuk meningkatkan pengalaman pengguna dan membantu kami memahami bagaimana website digunakan.</p>
                    <p>Pengguna dapat mengatur browser untuk menolak atau menghapus cookies, namun beberapa fitur website mungkin tidak berfungsi secara optimal.</p>
                    <h2>6. Tautan ke Website Lain</h2>
                    <p>Website kami dapat berisi tautan ke website pihak ketiga. Kami tidak bertanggung jawab atas praktik privasi maupun isi dari website tersebut. Kami menyarankan Anda untuk membaca kebijakan privasi masing-masing website yang dikunjungi.</p>
                    <h2>7. Hak Pengguna</h2>
                    <p>Anda berhak untuk:</p>
                    <ul>
                        <li>Meminta akses terhadap data pribadi yang kami miliki.</li>
                        <li>Memperbarui atau mengoreksi informasi yang tidak akurat.</li>
                        <li>Meminta penghapusan data pribadi sesuai ketentuan hukum yang berlaku.</li>
                        <li>Menarik persetujuan penggunaan data tertentu jika memungkinkan.</li>
                    </ul>
                    <h2>8. Perubahan Kebijakan Privasi</h2>
                    <p>Kami berhak memperbarui Kebijakan Privasi ini sewaktu-waktu. Setiap perubahan akan dipublikasikan melalui halaman ini dan berlaku sejak tanggal pembaruan.</p>
                    <h2>9. Hubungi Kami</h2>
                    <p>Jika Anda memiliki pertanyaan mengenai Kebijakan Privasi ini atau penggunaan data pribadi Anda, silakan menghubungi kami melalui:</p>
                    <p>DIANA GLASS<br>Email: retail@dianaflatglass.com<br>Telepon: 0853-9727-7930<br>Alamat: Jl. Sulawesi No.289, Butung, Kec. Wajo, Kota Makassar, Sulawesi Selatan 90164</p>
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