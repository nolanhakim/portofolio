<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-900 pt-20">

<!-- Navbar -->
<nav class="fixed top-0 left-0 w-full bg-white shadow-md z-50 flex justify-between items-center px-6 md:px-12 py-4">
    <h1 class="text-lg font-bold text-teal-500 md:ml-8">Catraliya Nolan Hakim</h1>

    <!-- Menu untuk layar besar -->
    <ul class="hidden md:flex space-x-6">
        <li><a href="#beranda" class="hover:text-teal-500">Beranda</a></li>
        <li><a href="#tentang" class="hover:text-teal-500">Tentang Saya</a></li>
        <li><a href="#skill" class="hover:text-teal-500">Skill</a></li>
        <li><a href="#porto" class="hover:text-teal-500">Portfolio</a></li>
    </ul>

    <!-- Tombol Menu untuk layar kecil -->
    <button id="menu-btn" class="md:hidden focus:outline-none">
        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828859.png" alt="Menu" class="w-6 h-6">
    </button>

    <!-- Dropdown Menu (Layar Kecil) -->
    <div id="menu" class="hidden absolute top-16 right-0 w-48 bg-white shadow-md flex flex-col items-start py-4 px-6">
        <a href="#beranda" class="py-2 hover:text-teal-500">Beranda</a>
        <a href="#tentang" class="py-2 hover:text-teal-500">Tentang Saya</a>
        <a href="#skill" class="py-2 hover:text-teal-500">Skill</a>
        <a href="#porto" class="py-2 hover:text-teal-500">Portfolio</a>
    </div>
</nav>

<!-- Hero Section -->
<section id="beranda" class="flex flex-col-reverse md:flex-row items-center justify-center px-4 md:px-12 py-14 space-y-10 md:space-y-0">
    <!-- Bagian Teks -->
    <div class="text-center md:text-left md:w-1/2 md:ml-8">
        <p class="text-teal-500 text-lg">Halo Semua 👋, saya</p>
        <h1 class="text-3xl md:text-4xl font-bold">Catraliya Nolan Hakim</h1>
        <h2 class="text-lg md:text-xl text-gray-500">UI & Front End Developer</h2>
        <p class="mt-3 text-gray-700 text-sm md:text-base">
            Belajar desain dan pemrograman itu menyenangkan bukan? <strong>BUKAN!</strong>
        </p>
        <div class="mt-6 space-x-4">
        <a href="{{ asset('cv.pdf') }}" download class="bg-gray-800 text-white px-5 py-2 rounded-lg shadow-md hover:bg-gray-900">
            Download CV
        </a>
            <a href="#tentang" class="bg-teal-500 text-white px-5 py-2 rounded-lg shadow-md hover:bg-teal-600">
                Hubungi Saya
            </a>
        </div>
    </div>

    <!-- Bagian Gambar -->
    <div class="relative md:w-1/2 flex justify-center">
        <div class="absolute w-44 h-44 md:w-64 md:h-64 bg-teal-400 rounded-full -z-10 translate-y-12 md:translate-y-20"></div>
        <img src="{{ asset('img/profil2.png') }}" alt="Profil" class="relative z-10 max-w-[180px] md:max-w-[250px] mb-20 md:mb-0">
    </div>
</section>



<!-- Tentang Saya & Hubungi Saya -->
<section id="tentang" class="grid grid-cols-1 md:grid-cols-2 gap-10 px-6 md:px-12 py-20">
    <!-- Tentang Saya -->
    <div class="bg-white p-6 shadow-lg rounded-lg">
        <h3 class="text-teal-500 font-semibold">TENTANG SAYA</h3>
        <h2 class="text-3xl font-bold mt-2">Catraliya Nolan Hakim</h2>
        <p class="mt-4 text-gray-700">
            Saya adalah seorang mahasiswa aktif di Universitas Brawijaya, Fakultas Vokasi Program Studi Teknologi Informasi.
            Saya fokus pada pengembangan diri di bidang teknologi, khususnya dalam User Interface (UI) dan User Experience (UX),
            serta pengembangan web.
        </p>
    </div>

    <!-- Hubungi Saya -->
    <div class="bg-white p-6 shadow-lg rounded-lg">
        <h2 class="text-2xl font-bold">Mari Berteman</h2>
        <p class="mt-4 text-gray-700">Saya terbuka untuk diskusi, kolaborasi, atau sekadar berbagi wawasan tentang teknologi dan desain.</p>

        <!-- Ikon Sosial Media dalam Lingkaran -->
        <div class="flex justify-start md:justify-start space-x-4 mt-4">
    <a href="https://www.linkedin.com/in/catraliya-nolan-hakim-782aaa33b/" target="_blank"
        class="w-10 h-10 flex items-center justify-center bg-gray-200 rounded-full hover:bg-teal-500 transition">
        <img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" alt="LinkedIn" class="w-5 h-5">
    </a>
    <a href="https://github.com/nolanhakim" target="_blank"
        class="w-10 h-10 flex items-center justify-center bg-gray-200 rounded-full hover:bg-teal-500 transition">
        <img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" alt="GitHub" class="w-5 h-5">
    </a>
    <a href="https://www.instagram.com/tra_hakim?igsh=NTMzZjVteWp2dWdm" target="_blank"
        class="w-10 h-10 flex items-center justify-center bg-gray-200 rounded-full hover:bg-teal-500 transition">
        <img src="https://cdn-icons-png.flaticon.com/512/1384/1384063.png" alt="Instagram" class="w-5 h-5">
    </a>
    <a href="mailto:nolanhakimm10@gmail.com"
        class="w-10 h-10 flex items-center justify-center bg-gray-200 rounded-full hover:bg-teal-500 transition">
        <img src="https://cdn-icons-png.flaticon.com/512/732/732200.png" alt="Email" class="w-5 h-5">
    </a>
    </div>
    </section>

<!-- Section Skill -->
<section id="skill" class="bg-gray-100 py-16">
    <div class="max-w-5xl mx-auto px-6 md:px-12">
        <h2 class="text-3xl font-bold text-center text-teal-500">Skill</h2>
        <p class="text-center text-gray-700 mt-2">Kemampuan yang saya miliki dalam desain dan pengembangan.</p>

        <!-- Grid Skill 3 Kolom -->
        <div class="grid grid-cols-3 gap-x gap-y-4 mt-8 justify-items-center">
            <!-- HTML -->
            <div class="flex flex-col items-center bg-white shadow-md rounded-lg p-3 w-24 md:w-28">
                <img src="https://cdn-icons-png.flaticon.com/512/919/919827.png" alt="HTML" class="w-10 h-10">
                <p class="text-sm mt-2">HTML</p>
            </div>
            <!-- CSS -->
            <div class="flex flex-col items-center bg-white shadow-md rounded-lg p-3 w-24 md:w-28">
                <img src="https://cdn-icons-png.flaticon.com/512/919/919826.png" alt="CSS" class="w-10 h-10">
                <p class="text-sm mt-2">CSS</p>
            </div>
            <!-- PHP -->
            <div class="flex flex-col items-center bg-white shadow-md rounded-lg p-3 w-24 md:w-28">
                <img src="https://cdn-icons-png.flaticon.com/512/919/919830.png" alt="PHP" class="w-10 h-10">
                <p class="text-sm mt-2">PHP</p>
            </div>
            <!-- Laravel -->
            <div class="flex flex-col items-center bg-white shadow-md rounded-lg p-3 w-24 md:w-28">
                <img src="https://static-00.iconduck.com/assets.00/laravel-icon-1990x2048-xawylrh0.png" alt="Laravel" class="w-10 h-10">
                <p class="text-sm mt-2">Laravel</p>
            </div>
            <!-- Bootstrap -->
            <div class="flex flex-col items-center bg-white shadow-md rounded-lg p-3 w-24 md:w-28">
                <img src="https://cdn-icons-png.flaticon.com/512/5968/5968672.png" alt="Bootstrap" class="w-10 h-10">
                <p class="text-sm mt-2">Bootstrap</p>
            </div>
            <!-- Tailwind CSS -->
            <div class="flex flex-col items-center bg-white shadow-md rounded-lg p-3 w-24 md:w-28">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/Tailwind_CSS_Logo.svg/1024px-Tailwind_CSS_Logo.svg.png" alt="Tailwind CSS" class="w-10 h-10">
                <p class="text-sm mt-2">Tailwind</p>
            </div>
            <!-- CapCut -->
            <div class="flex flex-col items-center bg-white shadow-md rounded-lg p-3 w-24 md:w-28">
                <img src="https://uxwing.com/wp-content/themes/uxwing/download/brands-and-social-media/capcut-icon.png" alt="CapCut" class="w-10 h-10">
                <p class="text-sm mt-2">CapCut</p>
            </div>
            <!-- Canva -->
            <div class="flex flex-col items-center bg-white shadow-md rounded-lg p-3 w-24 md:w-28">
                <img src="https://beruangharmonisukses.com/wp-content/uploads/2024/08/canva.png" alt="Canva" class="w-10 h-10">
                <p class="text-sm mt-2">Canva</p>
            </div>
            <!-- Figma -->
            <div class="flex flex-col items-center bg-white shadow-md rounded-lg p-3 w-24 md:w-28">
                <img src="https://cdn-icons-png.flaticon.com/512/5968/5968705.png" alt="Figma" class="w-10 h-10">
                <p class="text-sm mt-2">Figma</p>
            </div>
        </div>
    </div>
</section>

<!-- Section Portfolio -->
<section id="porto" class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-6 md:px-12">
        <h2 class="text-3xl font-bold text-center text-teal-500">Portofolio</h2>
        <p class="text-center text-gray-700 mt-2 mx-auto max-w-2xl">
    Dokumentasi ini merupakan kumpulan dari semua dokumen yang pernah dibuat, 
    yang dirancang untuk memberikan gambaran menyeluruh tentang berbagai proyek, 
    proses, atau kegiatan yang telah dilakukan.
</p>


        <!-- Grid Portfolio -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-8">
            
            <!-- Project 1 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{ asset('img/project1.png') }}" alt="Project 1" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Desain Aplikasi Mobile</h3>
                    <p class="text-gray-600 text-sm mt-2">UI/UX desain aplikasi mobile menggunakan Figma.</p>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{ asset('img/project2.png') }}" alt="Project 2" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Redesain Web & Aplikasi</h3>
                    <p class="text-gray-600 text-sm mt-2">Redesign Web BCA Dan Aplikasi Ilufa168.</p>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{ asset('img/project4.png') }}" alt="Project 3" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Banner Top Up</h3>
                    <p class="text-gray-600 text-sm mt-2">Desain Banner Top Up Game menggunakan figma</p>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{ asset('img/project8.png') }}" alt="Project 4" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Dashboard Admin</h3>
                    <p class="text-gray-600 text-sm mt-2">Membuat dashboard admin dengan fitur statistik.</p>
                </div>
            </div>

            <!-- Project 5 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{ asset('img/project9.png') }}" alt="Project 5" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Login Dan Daftar</h3>
                    <p class="text-gray-600 text-sm mt-2">Login dan Daftar web Framework Laravel.</p>
                </div>
            </div>

            <!-- Project 6 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{ asset('img/project6.png') }}" alt="Project 6" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Landing Page</h3>
                    <p class="text-gray-600 text-sm mt-2">Landing page untuk produk dan layanan.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-900 text-white py-8 mt-16">
    <div class="max-w-6xl mx-auto px-6 md:px-12 text-left">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Alamat -->
            <div>
                <h3 class="text-lg font-semibold">Alamat</h3>
                <p class="text-gray-400 mt-2">Kota Malang, Jawa Timur, Indonesia</p>
            </div>
            
            <!-- Navbar -->
            <div>
                <h3 class="text-lg font-semibold">Navigasi</h3>
                <ul class="mt-2 space-y-2">
                    <li><a href="#beranda" class="text-gray-400 hover:text-teal-400">Beranda</a></li>
                    <li><a href="#tentang" class="text-gray-400 hover:text-teal-400">Tentang Saya</a></li>
                    <li><a href="#skill" class="text-gray-400 hover:text-teal-400">Skill</a></li>
                    <li><a href="#porto" class="text-gray-400 hover:text-teal-400">Portfolio</a></li>
                </ul>
            </div>
            
            <!-- Media Sosial -->
            <div>
                <h3 class="text-lg font-semibold">Ikuti Saya</h3>
                <div class="flex justify-start space-x-4 mt-2">
                    <a href="https://www.instagram.com/tra_hakim?igsh=NTMzZjVteWp2dWdm" target="_blank" class="w-10 h-10 flex items-center justify-center bg-gray-700 rounded-full hover:bg-teal-500 transition">
                        <img src="https://cdn-icons-png.flaticon.com/512/1384/1384063.png" alt="Instagram" class="w-5 h-5">
                    </a>
                    <a href="https://www.linkedin.com/in/catraliya-nolan-hakim-782aaa33b/" target="_blank" class="w-10 h-10 flex items-center justify-center bg-gray-700 rounded-full hover:bg-teal-500 transition">
                        <img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" alt="LinkedIn" class="w-5 h-5">
                    </a>
                    <a href="https://github.com/nolanhakim" target="_blank" class="w-10 h-10 flex items-center justify-center bg-gray-700 rounded-full hover:bg-teal-500 transition">
                        <img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" alt="GitHub" class="w-5 h-5">
                    </a>
                </div>
            </div>
        </div>
        <p class="text-left text-gray-500 mt-6 text-sm">&copy; 2025 Catraliya Nolan Hakim. Percaya Proses.</p>
    </div>
</footer>


<!-- Script untuk Toggle Menu (Layar Kecil) -->
<script>
    const menuBtn = document.getElementById('menu-btn');
    const menu = document.getElementById('menu');

    menuBtn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });

    // Menutup menu jika diklik di luar
    document.addEventListener("click", (event) => {
    if (!menu.contains(event.target) && !menuBtn.contains(event.target)) {
        menu.classList.add("hidden");
    }
});

</script>


</body>
</html>
