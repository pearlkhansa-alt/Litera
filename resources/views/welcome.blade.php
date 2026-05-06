
@extends('front.base')

@section('content')
        
    
    <!-- Hero Section -->
    <section id="kategori" class="px-6 md:px-16 lg:px-24 py-16 md:py-24 ">
        <div class="mt-10 md:mt-20 text-center md:text-left max-w-5xl mx-auto md:mx-0">

            <!-- Title -->
            <h1 class=" font-Outfit text-[#1F1F1F] text-2xl md:text-5xl lg:text-6xl font-normal leading-tight">
                Temukan dan pinjam buku
            </h1>

            <span class="block text-[#1F1F1F] text-2xl md:text-5xl lg:text-6xl leading-tight">
                dengan
                <span id="typing" class="font-Robotomono font-light"></span>
                <span class="animate-pulse">|</span>
            </span>

            <!-- Description (hanya muncul di desktop biar sama kayak desain) -->
            <p class="font-Outfit hidden md:block mt-6 text-base text-gray-500 max-w-xl">
                Ribuan buku siap kamu jelajahi dan pinjam kapan saja.
                Nikmati beragam koleksi bacaan, dari cerita ringan hingga
                penuh makna, yang bisa kamu akses dengan mudah melalui satu
                platform digital yang praktis dan menyenangkan.
            </p>

            <!-- Button -->
            <button
                class="font-Robotomono mt-8 text-sm px-4 py-2 md:px-5 md:py-2.5 bg-[#1F1F1F] text-white rounded-md hover:bg-white hover:border hover:text-[#1F1F1F] transition">
                Mulai Jelajah
            </button>

        </div>
    </section>


    <!-- Kategori Section -->
    <div class=" flex justify-center">
        <!-- Container diperlebar -->
        <div class="w-full max-w-7xl px-3 md:px-6 py-6">

            <!-- SECTION -->
            <section class="bg-[#F2F2F2] rounded-2xl p-5 md:p-6">
                <h1 class="text-2xl font-semibold font-Outfit">Jelajahi Kategori Buku</h1>
                <p class="text-gray-600 text-sm mt-1 font-Outfit">
                    Pilih kategori buku untuk menemukan dan meminjam dengan
                    mudah
                </p>

                <!-- Mobile: scroll | Desktop: full -->
                <div class="font-Outfit flex md:flex gap-4 mt-6 overflow-x-auto md:overflow-visible">

                    <!-- Card -->
                    <div
                        class="bg-[#1f1f1f] text-white rounded-xl p-5 w-56 md:w-auto md:flex-1 shrink-0 hover:bg-lime-400 hover:text-black transition ">
                        <p class="text-sm hover:text-black">Fiksi</p>
                        <p class="font-semibold text-lg">Cerita
                            Imajinatif</p>
                    </div>

                    <!-- Active -->
                    <div
                        class="bg-[#1f1f1f] text-white rounded-xl p-5 w-56 md:w-auto md:flex-1 shrink-0 hover:bg-lime-400 hover:text-black transition">
                        <p class="text-sm">NonFiksi</p>
                        <p class="font-semibold text-lg">Pengetahuan Nyata</p>
                    </div>

                    <div class="bg-[#1f1f1f] text-white rounded-xl p-5 w-56 md:w-auto md:flex-1 shrink-0 hover:bg-lime-400 hover:text-black transition"
                        <p class="text-sm text-gray-400">Sejarah</p>
                        <p class="font-semibold text-lg">Kisah Masa Lalu</p>
                    </div>

                    <div class="bg-[#1f1f1f] text-white rounded-xl p-5 w-56 md:w-auto md:flex-1 shrink-0 hover:bg-lime-400 hover:text-black transition"
                        <p class="text-sm text-gray-400">Motivasi</p>
                        <p class="font-semibold text-lg">Inspirasi hidup</p>
                    </div>

                    <div class="bg-[#1f1f1f] text-white rounded-xl p-5 w-56 md:w-auto md:flex-1 shrink-0 hover:bg-lime-400 hover:text-black transition"
                        <p class="text-sm text-gray-400">Pendidikan</p>
                        <p class="font-semibold text-lg">Sumber Pembelajaran</p>
                    </div>

                </div>
            </section>

            <!-- Bottom -->
            <section class="mt-6">
                <div class="flex md:flex gap-4 overflow-x-auto md:overflow-visible whitespace-nowrap font-Robotomono">

                    <button
                        class="px-6 py-3 border  border-gray-400 rounded-xl bg-white shrink-0 md:flex-1 text-center hover:shadow-lg transition hover:shadow-xl transition hover:scale-100">
                        Novel
                    </button>
                    <button
                        class="px-6 py-3 border  border-gray-400 rounded-xl bg-white shrink-0 md:flex-1 text-center hover:shadow-xl transition hover:scale-100">
                        Non-Fiksi
                    </button>
                    <button
                        class="px-6 py-3 border  border-gray-400 rounded-xl bg-white shrink-0 md:flex-1 text-center hover:shadow-xl transition hover:scale-100">
                        Sejarah
                    </button>
                    <button
                        class="px-6 py-3 border  border-gray-400 rounded-xl bg-white shrink-0 md:flex-1 text-center hover:shadow-xl transition hover:scale-100">
                        Motivasi
                    </button>
                    <button
                        class="px-6 py-3 border  border-gray-400 rounded-xl bg-white shrink-0 md:flex-1 text-center hover:shadow-xl transition hover:scale-100">
                        Pendidikan
                    </button>
                    <button
                        class="px-6 py-3 border border-gray-400 rounded-xl bg-white shrink-0 md:flex-1 text-center hover:shadow-xl transition hover:scale-100">
                        Komik
                    </button>

                </div>
            </section>

        </div>
    </div>

    <!-- BUKU -->
    <section class="max-w-7xl mx-auto px-4 py-8">

        <!-- Header -->
        <div class="flex justify-between items-center mb-6 font-Outfit">
            <h2 class="text-lg md:text-xl font-semibold text-gray-800">
                Favorit Pembaca
            </h2>
            <a href="{{ route('all-books') }}" class="text-sm md:text-base text-gray-500 hover:underline hover:text-lime-500">
            Jelajahi Semua Buku
            </a>
        </div>

        <!-- Wrapper -->
        <div class="flex gap-4 overflow-x-auto md:grid md:grid-cols-4 md:gap-6 md:overflow-visible">

             @forelse ($books as $book)
                 <!-- Card -->
                <a href="{{ route('detail-book', $book->id) }}">
                <div class="book-card group min-w-[220px] md:min-w-0 bg-white rounded-2xl border border-gray-300 p-4 transition-all duration-700 ease-out opacity-0 translate-y-10 hover:-translate-y-2 hover:shadow-xl hover:border-gray-400">

                    <div class="overflow-hidden rounded-lg mb-3">
                        <img src="{{ asset('storage/' . $book->cover) }}" 
                            class="w-full h-auto transition duration-300 group-hover:scale-105" />
                    </div>

                    <p class="text-xs text-gray-400 mb-1 transition duration-300 group-hover:text-gray-600">
                        {{ $book->title }}
                    </p>

                    <h3 class="font-Outfit text-sm font-medium text-gray-800 leading-snug
                       transition duration-300 group-hover:text-black">
                        {{ $book->title }}
                    </h3>

                    <span class="font-Robotomono inline-block mt-2 text-xs bg-gray-200 px-2 py-1 rounded-full
                         transition duration-300 group-hover:bg-gray-300">
                        {{ $book->category->name }}
                    </span>
                </div>
            </a>
                 
             @empty
                 
             @endforelse

        </div>
    </section>


    <!-- Tentang Litera -->
    <section id="tentang" class="max-w-7xl mx-auto px-4 py-10">

        <div class="flex flex-col md:flex-row md:items-center md:gap-6 mb-8 text-center md:text-left">

            <!-- Judul -->
            <h2 class="bg-lime-300 px-4 py-2 rounded-md font-medium text-lg inline-block mx-auto md:mx-0 font-Outfit">
                Kenali Litera Digital
            </h2>

            <!-- Deskripsi -->
            <p class="text-gray-600 mt-3 md:mt-0 text-sm md:text-base max-w-xl mx-auto md:mx-0 font-Outfit">
                Kenali pengalaman baru dalam membaca melalui Litera Digital yang menghadirkan akses buku lebih mudah,
                cepat, dan nyaman kapan saja.
            </p>

        </div>

        <!-- MOBILE (card stack) -->
        <div class="flex flex-col gap-4 md:hidden">

            <div class="bg-[#1f1f1f] text-white p-6 rounded-xl font-Outfit">
                <p class="text-sm ">
                    Platform perpustakaan digital yang dirancang untuk memudahkan pengguna dalam menemukan dan meminjam
                    berbagai koleksi buku secara online dengan cepat dan praktis.
                </p>
                <a href="#" class="text-lime-300 mt-4 inline-block text-sm hover:underline">Tentang Kami ↗</a>
            </div>

            <div class="bg-[#1f1f1f] text-white p-6 rounded-xl ">
                <p class="text-sm">
                    Kami menyediakan akses ke berbagai kategori buku yang dapat dijelajahi dan dipinjam kapan saja
                    melalui sistem digital yang sederhana dan mudah digunakan.
                </p>
                <a href="#" class="text-lime-300 mt-4 inline-block text-sm hover:underline">Layanan Kami ↗</a>
            </div>

            <div class="bg-[#1f1f1f] text-white p-6 rounded-xl ">
                <p class="text-sm">
                    Meningkatkan minat baca dengan menghadirkan pengalaman membaca yang lebih mudah, modern, dan dapat
                    diakses oleh siapa saja.
                </p>
                <a href="#" class="text-lime-300 mt-4 inline-block text-sm hover:underline">Tujuan Kami ↗</a>
            </div>

        </div>

        <!-- DESKTOP (1 card, 3 bagian) -->
        <div class="hidden md:block">
            <div class="bg-[#1f1f1f] text-white rounded-xl p-8">

                <div class="grid grid-cols-3 divide-x divide-gray-700 font-Robotomono">

                    <!-- Kolom 1 -->
                    <div class="pr-6 ">
                        <p class="text-sm leading-relaxed">
                            Platform perpustakaan digital yang dirancang untuk memudahkan pengguna dalam menemukan dan
                            meminjam berbagai koleksi buku secara online dengan cepat dan praktis.
                        </p>
                        <a href="#" class="text-lime-300 mt-6 inline-block text-sm hover:underline">
                            Tentang Kami ↗
                        </a>
                    </div>

                    <!-- Kolom 2 -->
                    <div class="px-6">
                        <p class="text-sm leading-relaxed">
                            Kami menyediakan akses ke berbagai kategori buku yang dapat dijelajahi dan dipinjam kapan
                            saja melalui sistem digital yang sederhana dan mudah digunakan.
                        </p>
                        <a href="#" class="text-lime-300 mt-6 inline-block text-sm hover:underline">
                            Layanan Kami ↗
                        </a>
                    </div>
                    <!-- Kolom 2 -->
                    <div class="px-6">
                        <p class="text-sm leading-relaxed">
                            Kami menyediakan akses ke berbagai kategori buku yang dapat dijelajahi dan dipinjam kapan
                            saja melalui sistem digital yang sederhana dan mudah digunakan.
                        </p>
                        <a href="#" class="text-lime-300 mt-6 inline-block text-sm hover:underline">
                            Tujuan Kami ↗
                        </a>
                    </div>



                </div>

            </div>
        </div>

    </section>

    <!-- Accordion -->
    <section class="max-w-4xl mx-auto px-4 py-10 md:py-16">
        <h1 class="text-2xl md:text-4xl font-semibold text-center mb-8 md:mb-12 font-Outfit">
            Yang Sering Ditanyakan
        </h1>

        <div class="space-y-4">

            <!-- Item 1 -->
            <div class="bg-[#F2F2F2] rounded-xl p-4 md:p-6">
                <button onclick="toggleFAQ(0)" class="w-full flex justify-between items-center text-left">
                    <span class="font-medium md:text-lg font-Outfit">
                        Bisa pinjam banyak buku sekaligus?
                    </span>
                    <span id="icon-0" class="text-xl">+</span>
                </button>
                <div id="content-0" class="mt-3 text-sm md:text-base text-gray-600 hidden font-Robotomono">
                    Untuk menjaga antrian, setiap member bisa meminjam maksimal 3 buku dalam satu waktu. Kalau mau
                    pinjam yang baru, balikin dulu buku yang sudah selesai ya!
                </div>
            </div>

            <!-- Item 2 -->
            <div class="bg-[#F2F2F2] rounded-xl p-4 md:p-6">
                <button onclick="toggleFAQ(1)" class="w-full flex justify-between items-center text-left">
                    <span class="font-medium md:text-lg font-Outfit">
                        Berapa lama batas waktu pinjam?
                    </span>
                    <span id="icon-1" class="text-xl">+</span>
                </button>
                <div id="content-1" class="mt-3 text-sm md:text-base text-gray-600 hidden font-Robotomono">
                    Batas waktu peminjaman adalah 7 hari dan dapat diperpanjang jika tidak ada antrian.
                </div>
            </div>

            <!-- Item 3 -->
            <div class="bg-[#F2F2F2]  rounded-xl p-4 md:p-6">
                <button onclick="toggleFAQ(2)" class="w-full flex justify-between items-center text-left">
                    <span class="font-medium md:text-lg font-Outfit">
                        Kalau telat balikin ada dendanya?
                    </span>
                    <span id="icon-2" class="text-xl">+</span>
                </button>
                <div id="content-2" class="mt-3 text-sm md:text-base text-gray-600 hidden font-Robotomono">
                    Ya, akan dikenakan denda sesuai jumlah hari keterlambatan.
                </div>
            </div>

            <!-- Item 4 -->
            <div class="bg-[#F2F2F2]  rounded-xl p-4 md:p-6">
                <button onclick="toggleFAQ(3)" class="w-full flex justify-between items-center text-left">
                    <span class="font-medium md:text-lg font-Outfit">
                        Berapa lama batas waktu pinjam?
                    </span>
                    <span id="icon-3" class="text-xl">+</span>
                </button>
                <div id="content-3" class="mt-3 text-sm md:text-base text-gray-600 hidden font-Robotomono">
                    Sama seperti sebelumnya, maksimal 7 hari.
                </div>
            </div>

        </div>
    </section>


    <!-- Cara meminjam -->
    <section id="cara-pinjam" class="py-10 px-4">
        <div class="max-w-7xl mx-auto font-Outfit">

            <!-- TITLE (desktop only) -->
            <div class="hidden md:block text-center mb-10">
                <h2 class="text-3xl font-semibold text-[#1f1f1f] leading-snug">
                    Cara meminjam buku dengan mudah <br />
                    Temukan buku dan pinjam secara praktis
                </h2>
            </div>

            <div class="grid md:grid-cols-2 gap-6 md:gap-8 md:items-stretch">

                <!-- LEFT CARD -->
                <div class="bg-[#F2F2F2] rounded-2xl p-6 md:p-10 
            flex justify-between items-center 
            md:flex-col md:items-start md:justify-between md:h-full md:min-h-[260px]">

                    <!-- TOP RIGHT (optional kecil kayak "clari...")
                    <div class="hidden md:block w-full text-right text-purple-300 text-sm">
                        ✦ clari...
                    </div> -->

                    <!-- BOTTOM AREA -->
                    <div class="w-full flex justify-between items-end mt-4 md:mt-auto">

                        <!-- TEXT -->
                        <p class="text-gray-800 text-sm md:text-xl font-medium max-w-xs md:max-w-lg leading-snug">
                            Pinjam buku favoritmu di Litera, gampang & anti ribet. <strong>Mulai sekarang!</strong>
                        </p>

                        <a href="#" class="ml-4 inline-flex items-center hover:translate-x-1 transition">
                            <span class="text-xl md:text-3xl">
                                →
                            </span>
                        </a>

                    </div>

                </div>

                <!-- RIGHT GRID -->
                <div class="grid grid-cols-2 gap-4 md:gap-6">

                    <!-- Card 1 -->
                    <div class="bg-[#1f1f1f] text-white rounded-xl md:rounded-2xl p-4 md:p-6 h-32 md:h-40 flex flex-col justify-between transition-all duration-300 ease-out 
                    origin-left hover:-rotate-2 hover:-translate-y-2 hover:shadow-xl hover:z-10">
                        <span
                            class="bg-white text-black text-xs md:text-sm w-6 h-6 md:w-7 md:h-7 flex items-center justify-center rounded">
                            1
                        </span>
                        <p class="text-sm md:text-base font-medium">
                            Pilih buku yang kamu banget
                        </p>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-[#1f1f1f] text-white rounded-xl md:rounded-2xl p-4 md:p-6 h-32 md:h-40 flex flex-col justify-between transition-all duration-300 ease-out 
                        origin-left hover:rotate-2 hover:-translate-y-2 hover:shadow-xl hover:z-10">
                        <span
                            class="bg-white text-black text-xs md:text-sm w-6 h-6 md:w-7 md:h-7 flex items-center justify-center rounded">
                            2
                        </span>
                        <p class="text-sm md:text-base font-medium">
                            Isi data diri, gampang no ribet
                        </p>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-[#1f1f1f] text-white rounded-xl md:rounded-2xl p-4 md:p-6 h-32 md:h-40 flex flex-col justify-between transition-all duration-300 ease-out 
                        origin-left hover:-rotate-2 hover:-translate-y-2 hover:shadow-xl hover:z-10">
                        <span
                            class="bg-white text-black text-xs md:text-sm w-6 h-6 md:w-7 md:h-7 flex items-center justify-center rounded">
                            3
                        </span>
                        <p class="text-sm md:text-base font-medium">
                            Ambil bukunya & siap dibaca santai
                        </p>
                    </div>

                    <!-- Card 4 -->
                    <div class="bg-[#1f1f1f] text-white rounded-xl md:rounded-2xl p-4 md:p-6 h-32 md:h-40 flex flex-col justify-between transition-all duration-300 ease-out 
                        origin-left hover:rotate-2 hover:-translate-y-2 hover:shadow-xl hover:z-10">
                        <span
                            class="bg-white text-black text-xs md:text-sm w-6 h-6 md:w-7 md:h-7 flex items-center justify-center rounded">
                            4
                        </span>
                        <p class="text-sm md:text-base font-medium">
                            Balikin tepat waktu, biar yang lain kebagian juga
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>



    <!-- Testimonial -->
    <section class="py-12 px-4">
        <div class="max-w-6xl mx-auto">

            <!-- TITLE -->
            <div class="mb-8 text-center md:text-left">
                <h2 class="inline-block bg-lime-300 font-Outfit text-[#1f1f1f] font-medium px-6 py-2 rounded-xl">
                    Testimonial Pengguna
                </h2>
            </div>

            <!-- MOBILE SLIDER -->
            <div class="relative md:hidden font-Robotomono">

                <button onclick="prevSlide()" class="absolute left-0 top-1/2 -translate-y-1/2 text-2xl z-10">
                    ‹
                </button>

                <button onclick="nextSlide()" class="absolute right-0 top-1/2 -translate-y-1/2 text-2xl z-10">
                    ›
                </button>

                <div id="slider" class="overflow-hidden">
                    <div id="slides" class="flex transition-transform duration-500 ease-out">

                        <!-- CARD -->
                        <div class="min-w-full px-6">
                            <div class="group bg-[#1f1f1f] text-white rounded-2xl p-6 h-[380px] flex flex-col justify-between
                                    transition-all duration-300 ease-out
                                    hover:-translate-y-2 hover:shadow-2xl hover:shadow-black/20">

                                <div class="transition duration-300 group-hover:-translate-y-1">
                                    <div class="bg-gray-200 text-black w-10 h-10 flex items-center justify-center rounded mb-4 text-xl
                                            transition duration-300 group-hover:scale-110">
                                        “
                                    </div>
                                    <p class="text-sm leading-relaxed">
                                        E-library ini sangat membantu saya dalam meminjam buku tanpa harus datang ke
                                        perpustakaan.
                                        Sangat praktis dan cepat.
                                    </p>
                                </div>

                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded overflow-hidden">
                                        <img src="./assets/Cover 1.png"
                                            class="w-full h-full object-cover transition duration-300 group-hover:scale-105" />
                                    </div>
                                    <div>
                                        <p class="text-sm">Alya</p>
                                        <p class="text-green-400 text-xs">Pelajar SMK</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- DUPLICATE -->
                        <div class="min-w-full px-6">
                            <div class="group bg-[#1f1f1f] text-white rounded-2xl p-6 h-[380px] flex flex-col justify-between
                                    transition-all duration-300 ease-out
                                    hover:-translate-y-2 hover:shadow-2xl hover:shadow-black/20">

                                <div class="transition duration-300 group-hover:-translate-y-1">
                                    <div class="bg-gray-200 text-black w-10 h-10 flex items-center justify-center rounded mb-4 text-xl
                                            transition duration-300 group-hover:scale-110">
                                        “
                                    </div>
                                    <p class="text-sm leading-relaxed">
                                        Aku biasanya males ke perpustakaan, tapi sejak ada web ini jadi lebih praktis.
                                        Semua bisa diakses dari rumah.
                                    </p>
                                </div>

                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded overflow-hidden">
                                        <img src="./assets/Cover 1.png"
                                            class="w-full h-full object-cover transition duration-300 group-hover:scale-105" />
                                    </div>
                                    <div>
                                        <p class="text-sm">Naqiyya</p>
                                        <p class="text-green-400 text-xs">Siswa</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- DESKTOP GRID -->
            <div class="hidden md:grid grid-cols-3 gap-6">

                <!-- CARD -->
                <div class="group bg-[#1f1f1f] text-white rounded-2xl p-6 h-[320px] flex flex-col justify-between
                        transition-all duration-300 ease-out
                        hover:-translate-y-2 hover:shadow-2xl hover:shadow-black/20">

                    <div class="transition duration-300 group-hover:-translate-y-1">
                        <div class="bg-gray-200 text-black w-8 h-8 flex items-center justify-center rounded mb-4 text-lg
                                transition duration-300 group-hover:scale-110">
                            “
                        </div>
                        <p class="text-sm font-Robotomono">
                            E-library ini sangat membantu saya dalam meminjam buku tanpa harus datang ke perpustakaan.
                            Sangat praktis dan cepat.
                        </p>
                    </div>

                    <div class="flex items-center gap-3">
                        <img src="./assets/Cover 1.png"
                            class="w-10 h-10 rounded object-cover transition duration-300 group-hover:scale-105" />
                        <div>
                            <p class="text-sm">Alya</p>
                            <p class="text-lime-400 text-xs">Pelajar SMK</p>
                        </div>
                    </div>

                </div>
                <!-- CARD -->
                <div class="group bg-[#1f1f1f] text-white rounded-2xl p-6 h-[320px] flex flex-col justify-between
                        transition-all duration-300 ease-out
                        hover:-translate-y-2 hover:shadow-2xl hover:shadow-black/20">

                    <div class="transition duration-300 group-hover:-translate-y-1">
                        <div class="bg-gray-200 text-black w-8 h-8 flex items-center justify-center rounded mb-4 text-lg
                                transition duration-300 group-hover:scale-110">
                            “
                        </div>
                        <p class="text-sm font-Robotomono">
                            Menurutku ini solusi terbaik buat yang suka baca tapi ga mau ribet.
                            Pinjam buku jadi lebih modern.
                        </p>
                    </div>

                    <div class="flex items-center gap-3">
                        <img src="./assets/Cover 1.png"
                            class="w-10 h-10 rounded object-cover transition duration-300 group-hover:scale-105" />
                        <div>
                            <p class="text-sm">Rizki</p>
                            <p class="text-lime-400 text-xs">Mahasiswa</p>
                        </div>
                    </div>

                </div>
                <!-- CARD -->
                <div class="group bg-[#1f1f1f] text-white rounded-2xl p-6 h-[320px] flex flex-col justify-between
                        transition-all duration-300 ease-out
                        hover:-translate-y-2 hover:shadow-2xl hover:shadow-black/20">

                    <div class="transition duration-300 group-hover:-translate-y-1">
                        <div class="bg-gray-200 text-black w-8 h-8 flex items-center justify-center rounded mb-4 text-lg
                                transition duration-300 group-hover:scale-110">
                            “
                        </div>
                        <p class="text-sm font-Robotomono">
                           Buku yang tersedia cukup banyak dan mudah dicari.
                           Sistemnya juga simpel, jadi ga bikin bingung.
                        </p>
                    </div>

                    <div class="flex items-center gap-3">
                        <img src="./assets/Cover 1.png"
                            class="w-10 h-10 rounded object-cover transition duration-300 group-hover:scale-105" />
                        <div>
                            <p class="text-sm">Fajar Nugraha</p>
                            <p class="text-lime-400 text-xs">Mahasiswa</p>
                        </div>
                    </div>

                </div>



            </div>

        </div>
    </section>


    <!-- Contact Us -->
    <section id="lokasi" class="py-16 px-4">
        <div class="max-w-6xl mx-auto text-center">

            <!-- BUTTON -->
            <button class="border border-black px-6 py-2 rounded-full text-sm mb-6 font-Robotomono">
                Hubungi Kami
            </button>

            <!-- TITLE -->
            <h2 class="text-2xl md:text-4xl font-semibold mb-10 leading-snug font-Outfit">
                Ada pertanyaan? Kami siap membantu
            </h2>

            <!-- CONTACT LIST -->
            <div class="grid gap-6 md:grid-cols-3 font-Outfit">

                <!-- EMAIL -->
                <div class="bg-lime-300 rounded-2xl p-6 flex items-center gap-4 text-left shadow-md 
            transition duration-300 
            hover:-translate-y-2 hover:shadow-xl">
                    <div class="bg-black w-12 h-12 flex items-center justify-center rounded-full">
                        <!-- SVG EMAIL -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l9 6 9-6M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-800">Email</p>
                        <p class="font-medium">hello@bookinaja.id</p>
                    </div>
                </div>

                <!-- PHONE -->
                <div class="bg-lime-300 rounded-2xl p-6 flex items-center gap-4 text-left shadow-md 
            transition duration-300 
            hover:-translate-y-2 hover:shadow-xl font-Outfit">
                    <div class="bg-black w-12 h-12 flex items-center justify-center rounded-full">
                        <!-- SVG PHONE -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h2l2 5-2 2a11 11 0 005 5l2-2 5 2v2a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-800">Nomor Telepon</p>
                        <p class="font-medium">+62 812 3456 7890</p>
                    </div>
                </div>

                <!-- ADDRESS -->
                <div class="bg-lime-300 rounded-2xl p-6 flex items-center gap-4 text-left shadow-md 
            transition duration-300 
            hover:-translate-y-2 hover:shadow-xl font-Outfit">
                    <div class="bg-black w-12 h-12 flex items-center justify-center rounded-full">
                        <!-- SVG BUILDING -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 21h18M9 21V3h6v18M4 21V7h5M15 21V11h5" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-800">Kantor Kita!</p>
                        <p class="font-medium">
                            Jl. Pustaka Raya 27, Lt. 2, Bandung
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Footer -->
    <section class="py-20 px-4 text-center">

        <!-- LOGO + NAMA (SEJAJAR) -->
        <div class="flex items-center justify-center gap-3 mb-6">

            <!-- ICON -->
            <img src="{{ asset("assets/logo-litera.png") }}" alt="">

            <!-- NAMA -->
            <h1 class="text-2xl md:text-4xl font-se≥mibold font-Outfit">
                Litera
            </h1>

        </div>

        <!-- TAGLINE -->
        <p class="text-base md:text-2xl font-medium leading-snug max-w-xl mx-auto font-Outfit">
            Temukan buku favoritmu,
            mulai pinjam sekarang
        </p>

        <!-- BUTTON -->
        <a href="#" class="mt-6 inline-block bg-[#1f1f1f] text-white 
            px-6 py-2 rounded-lg text-sm md:text-base
            font-Robotomono hover:bg-white hover:border hover:text-[#1f1f1f] transition">
            Mulai Pinjam
        </a>

        <!-- FOOTER -->
        <div class="border-t border-gray-300 mt-16 pt-6 text-left text-xs text-gray-600 max-w-6xl mx-auto">
            © 2026 Litera. All rights reserved.
        </div>

    </section>




    
  @endsection
