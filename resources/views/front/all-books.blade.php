

       
@extends('front.base')

@section('content')

<br>
<br>
<br>
<br>
<br>
<br>
        <!-- Kategori Section -->
        <div class=" flex justify-center">
            <!-- Container diperlebar -->
            <div class="w-full max-w-7xl px-3 md:px-6 py-6">

                <!-- Bottom -->
                <section class="mt-6">
                    <div
                        class="flex md:flex gap-4 overflow-x-auto md:overflow-visible whitespace-nowrap font-Robotomono">

                        <button
                            class="px-6 py-3 border  border-gray-400 rounded-xl bg-white shrink-0 md:flex-1 text-center hover:bg-[#1f1f1f] transition hover:scale-100 hover:text-white">
                            NOVEL
                        </button>
                        <button
                            class="px-6 py-3 border  border-gray-400 rounded-xl bg-white shrink-0 md:flex-1 text-center hover:bg-[#1f1f1f] transition hover:scale-100 hover:text-white">
                            NON-FIKSI
                        </button>
                        <button
                            class="px-6 py-3 border  border-gray-400 rounded-xl bg-white shrink-0 md:flex-1 text-center hover:bg-[#1f1f1f] transition hover:scale-100 hover:text-white">
                            SEJARAH
                        </button>
                        <button
                            class="px-6 py-3 border  border-gray-400 rounded-xl bg-white shrink-0 md:flex-1 text-center hover:bg-[#1f1f1f] transition hover:scale-100 hover:text-white">
                            MOTIVASI
                        </button>
                        <button
                            class="px-6 py-3 border  border-gray-400 rounded-xl bg-white shrink-0 md:flex-1 text-center hover:bg-[#1f1f1f] transition hover:scale-100 hover:text-white">
                            PENDIDIKAN
                        </button>
                        <button
                            class="px-6 py-3 border border-gray-400 rounded-xl bg-white shrink-0 md:flex-1 text-center hover:bg-[#1f1f1f] transition hover:scale-100 hover:text-white">
                            KOMIK
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
                <a href="#"
                    class="text-sm md:text-base text-gray-500 hover:underline hover:text-lime-500">
                    Jelajahi Semua Buku
                </a>
            </div>

            <!-- Wrapper -->
            <div
                class="flex gap-4 overflow-x-auto md:grid md:grid-cols-4 md:gap-6 md:overflow-visible">

                <!-- Card -->
                <a href="detail.html">
                    <div
                        class="group min-w-[220px] md:min-w-0 bg-white rounded-2xl border border-gray-300 p-4
                    transition-all duration-300 ease-out
                    hover:-translate-y-2 hover:shadow-xl hover:border-gray-400">

                        <div class="overflow-hidden rounded-lg mb-3">
                            <img src="./assets/Cover 1.png"
                                class="w-full h-auto transition duration-300 group-hover:scale-105" />
                        </div>

                        <p
                            class="text-xs text-gray-400 mb-1 transition duration-300 group-hover:text-gray-600">
                            Uketsu
                        </p>

                        <h3
                            class="font-Outfit text-sm font-medium text-gray-800 leading-snug
                       transition duration-300 group-hover:text-black">
                            Teki-Teki Gambar Aneh
                        </h3>

                        <span
                            class="font-Robotomono inline-block mt-2 text-xs bg-gray-200 px-2 py-1 rounded-full
                         transition duration-300 group-hover:bg-gray-300">
                            Misteri
                        </span>
                    </div>
                </a>

                <!-- Duplicate cards (SAMA SEMUA) -->
                <div
                    class="group min-w-[220px] md:min-w-0 bg-white rounded-2xl border border-gray-300 p-4
                    transition-all duration-300 ease-out
                    hover:-translate-y-2 hover:shadow-xl hover:border-gray-400">

                    <div class="overflow-hidden rounded-lg mb-3">
                        <img src="./assets/Cover 1.png"
                            class="w-full h-auto transition duration-300 group-hover:scale-105" />
                    </div>

                    <p
                        class="text-xs text-gray-400 mb-1 transition duration-300 group-hover:text-gray-600">
                        Uketsu
                    </p>

                    <h3
                        class="font-Outfit text-sm font-medium text-gray-800 leading-snug
                       transition duration-300 group-hover:text-black">
                        Teki-Teki Gambar Aneh
                    </h3>

                    <span
                        class="font-Robotomono inline-block mt-2 text-xs bg-gray-200 px-2 py-1 rounded-full
                         transition duration-300 group-hover:bg-gray-300">
                        Misteri
                    </span>
                </div>

                <div
                    class="group min-w-[220px] md:min-w-0 bg-white rounded-2xl border border-gray-300 p-4
                    transition-all duration-300 ease-out
                    hover:-translate-y-2 hover:shadow-xl hover:border-gray-400">

                    <div class="overflow-hidden rounded-lg mb-3">
                        <img src="./assets/Cover 1.png"
                            class="w-full h-auto transition duration-300 group-hover:scale-105" />
                    </div>

                    <p
                        class="text-xs text-gray-400 mb-1 transition duration-300 group-hover:text-gray-600">
                        Uketsu
                    </p>

                    <h3
                        class="font-Outfit text-sm font-medium text-gray-800 leading-snug
                       transition duration-300 group-hover:text-black">
                        Teki-Teki Gambar Aneh
                    </h3>

                    <span
                        class="font-Robotomono inline-block mt-2 text-xs bg-gray-200 px-2 py-1 rounded-full
                         transition duration-300 group-hover:bg-gray-300">
                        Misteri
                    </span>
                </div>

                <div
                    class="group min-w-[220px] md:min-w-0 bg-white rounded-2xl border border-gray-300 p-4
                    transition-all duration-300 ease-out
                    hover:-translate-y-2 hover:shadow-xl hover:border-gray-400">

                    <div class="overflow-hidden rounded-lg mb-3">
                        <img src="./assets/Cover 1.png"
                            class="w-full h-auto transition duration-300 group-hover:scale-105" />
                    </div>

                    <p
                        class="text-xs text-gray-400 mb-1 transition duration-300 group-hover:text-gray-600">
                        Uketsu
                    </p>

                    <h3
                        class="font-Outfit text-sm font-medium text-gray-800 leading-snug
                       transition duration-300 group-hover:text-black">
                        Teki-Teki Gambar Aneh
                    </h3>

                    <span
                        class="font-Robotomono inline-block mt-2 text-xs bg-gray-200 px-2 py-1 rounded-full
                         transition duration-300 group-hover:bg-gray-300">
                        Misteri
                    </span>
                </div>

            </div>
        </section>

        <!-- BUKU -->
        <section class="max-w-7xl mx-auto px-4 py-8">

            <!-- Header -->
            <div class="flex justify-between items-center mb-6 font-Outfit">
                <h2 class="text-lg md:text-xl font-semibold text-gray-800">
                    Fiksi
                </h2>
                <a href="#"
                    class="text-sm md:text-base text-gray-500 hover:underline hover:text-lime-500">
                    Jelajahi Semua Buku
                </a>
            </div>

            <!-- Wrapper -->
            <div
                class="flex gap-4 overflow-x-auto md:grid md:grid-cols-4 md:gap-6 md:overflow-visible">

                <!-- Card -->
                <div
                    class="group min-w-[220px] md:min-w-0 bg-white rounded-2xl border border-gray-300 p-4
                    transition-all duration-300 ease-out
                    hover:-translate-y-2 hover:shadow-xl hover:border-gray-400">

                    <div class="overflow-hidden rounded-lg mb-3">
                        <img src="./assets/Cover 1.png"
                            class="w-full h-auto transition duration-300 group-hover:scale-105" />
                    </div>

                    <p
                        class="text-xs text-gray-400 mb-1 transition duration-300 group-hover:text-gray-600">
                        Uketsu
                    </p>

                    <h3
                        class="font-Outfit text-sm font-medium text-gray-800 leading-snug
                       transition duration-300 group-hover:text-black">
                        Teki-Teki Gambar Aneh
                    </h3>

                    <span
                        class="font-Robotomono inline-block mt-2 text-xs bg-gray-200 px-2 py-1 rounded-full
                         transition duration-300 group-hover:bg-gray-300">
                        Misteri
                    </span>
                </div>

                <!-- Duplicate cards (SAMA SEMUA) -->
                <div
                    class="group min-w-[220px] md:min-w-0 bg-white rounded-2xl border border-gray-300 p-4
                    transition-all duration-300 ease-out
                    hover:-translate-y-2 hover:shadow-xl hover:border-gray-400">

                    <div class="overflow-hidden rounded-lg mb-3">
                        <img src="./assets/Cover 1.png"
                            class="w-full h-auto transition duration-300 group-hover:scale-105" />
                    </div>

                    <p
                        class="text-xs text-gray-400 mb-1 transition duration-300 group-hover:text-gray-600">
                        Uketsu
                    </p>

                    <h3
                        class="font-Outfit text-sm font-medium text-gray-800 leading-snug
                       transition duration-300 group-hover:text-black">
                        Teki-Teki Gambar Aneh
                    </h3>

                    <span
                        class="font-Robotomono inline-block mt-2 text-xs bg-gray-200 px-2 py-1 rounded-full
                         transition duration-300 group-hover:bg-gray-300">
                        Misteri
                    </span>
                </div>

                <div
                    class="group min-w-[220px] md:min-w-0 bg-white rounded-2xl border border-gray-300 p-4
                    transition-all duration-300 ease-out
                    hover:-translate-y-2 hover:shadow-xl hover:border-gray-400">

                    <div class="overflow-hidden rounded-lg mb-3">
                        <img src="./assets/Cover 1.png"
                            class="w-full h-auto transition duration-300 group-hover:scale-105" />
                    </div>

                    <p
                        class="text-xs text-gray-400 mb-1 transition duration-300 group-hover:text-gray-600">
                        Uketsu
                    </p>

                    <h3
                        class="font-Outfit text-sm font-medium text-gray-800 leading-snug
                       transition duration-300 group-hover:text-black">
                        Teki-Teki Gambar Aneh
                    </h3>

                    <span
                        class="font-Robotomono inline-block mt-2 text-xs bg-gray-200 px-2 py-1 rounded-full
                         transition duration-300 group-hover:bg-gray-300">
                        Misteri
                    </span>
                </div>

                <div
                    class="group min-w-[220px] md:min-w-0 bg-white rounded-2xl border border-gray-300 p-4
                    transition-all duration-300 ease-out
                    hover:-translate-y-2 hover:shadow-xl hover:border-gray-400">

                    <div class="overflow-hidden rounded-lg mb-3">
                        <img src="./assets/Cover 1.png"
                            class="w-full h-auto transition duration-300 group-hover:scale-105" />
                    </div>

                    <p
                        class="text-xs text-gray-400 mb-1 transition duration-300 group-hover:text-gray-600">
                        Uketsu
                    </p>

                    <h3
                        class="font-Outfit text-sm font-medium text-gray-800 leading-snug
                       transition duration-300 group-hover:text-black">
                        Teki-Teki Gambar Aneh
                    </h3>

                    <span
                        class="font-Robotomono inline-block mt-2 text-xs bg-gray-200 px-2 py-1 rounded-full
                         transition duration-300 group-hover:bg-gray-300">
                        Misteri
                    </span>
                </div>

            </div>
        </section>

        <!-- BUKU -->
        <section class="max-w-7xl mx-auto px-4 py-8">

            <!-- Header -->
            <div class="flex justify-between items-center mb-6 font-Outfit">
                <h2 class="text-lg md:text-xl font-semibold text-gray-800">
                    Alam
                </h2>
                <a href="#"
                    class="text-sm md:text-base text-gray-500 hover:underline hover:text-lime-500">
                    Jelajahi Semua Buku
                </a>
            </div>

            <!-- Wrapper -->
            <div
                class="flex gap-4 overflow-x-auto md:grid md:grid-cols-4 md:gap-6 md:overflow-visible">

                <!-- Card -->
                <div
                    class="group min-w-[220px] md:min-w-0 bg-white rounded-2xl border border-gray-300 p-4
                    transition-all duration-300 ease-out
                    hover:-translate-y-2 hover:shadow-xl hover:border-gray-400">

                    <div class="overflow-hidden rounded-lg mb-3">
                        <img src="./assets/Cover 1.png"
                            class="w-full h-auto transition duration-300 group-hover:scale-105" />
                    </div>

                    <p
                        class="text-xs text-gray-400 mb-1 transition duration-300 group-hover:text-gray-600">
                        Uketsu
                    </p>

                    <h3
                        class="font-Outfit text-sm font-medium text-gray-800 leading-snug
                       transition duration-300 group-hover:text-black">
                        Teki-Teki Gambar Aneh
                    </h3>

                    <span
                        class="font-Robotomono inline-block mt-2 text-xs bg-gray-200 px-2 py-1 rounded-full
                         transition duration-300 group-hover:bg-gray-300">
                        Misteri
                    </span>
                </div>

                <!-- Duplicate cards (SAMA SEMUA) -->
                <div
                    class="group min-w-[220px] md:min-w-0 bg-white rounded-2xl border border-gray-300 p-4
                    transition-all duration-300 ease-out
                    hover:-translate-y-2 hover:shadow-xl hover:border-gray-400">

                    <div class="overflow-hidden rounded-lg mb-3">
                        <img src="./assets/Cover 1.png"
                            class="w-full h-auto transition duration-300 group-hover:scale-105" />
                    </div>

                    <p
                        class="text-xs text-gray-400 mb-1 transition duration-300 group-hover:text-gray-600">
                        Uketsu
                    </p>

                    <h3
                        class="font-Outfit text-sm font-medium text-gray-800 leading-snug
                       transition duration-300 group-hover:text-black">
                        Teki-Teki Gambar Aneh
                    </h3>

                    <span
                        class="font-Robotomono inline-block mt-2 text-xs bg-gray-200 px-2 py-1 rounded-full
                         transition duration-300 group-hover:bg-gray-300">
                        Misteri
                    </span>
                </div>

                <div
                    class="group min-w-[220px] md:min-w-0 bg-white rounded-2xl border border-gray-300 p-4
                    transition-all duration-300 ease-out
                    hover:-translate-y-2 hover:shadow-xl hover:border-gray-400">

                    <div class="overflow-hidden rounded-lg mb-3">
                        <img src="./assets/Cover 1.png"
                            class="w-full h-auto transition duration-300 group-hover:scale-105" />
                    </div>

                    <p
                        class="text-xs text-gray-400 mb-1 transition duration-300 group-hover:text-gray-600">
                        Uketsu
                    </p>

                    <h3
                        class="font-Outfit text-sm font-medium text-gray-800 leading-snug
                       transition duration-300 group-hover:text-black">
                        Teki-Teki Gambar Aneh
                    </h3>

                    <span
                        class="font-Robotomono inline-block mt-2 text-xs bg-gray-200 px-2 py-1 rounded-full
                         transition duration-300 group-hover:bg-gray-300">
                        Misteri
                    </span>
                </div>

                <div
                    class="group min-w-[220px] md:min-w-0 bg-white rounded-2xl border border-gray-300 p-4
                    transition-all duration-300 ease-out
                    hover:-translate-y-2 hover:shadow-xl hover:border-gray-400">

                    <div class="overflow-hidden rounded-lg mb-3">
                        <img src="./assets/Cover 1.png"
                            class="w-full h-auto transition duration-300 group-hover:scale-105" />
                    </div>

                    <p
                        class="text-xs text-gray-400 mb-1 transition duration-300 group-hover:text-gray-600">
                        Uketsu
                    </p>

                    <h3
                        class="font-Outfit text-sm font-medium text-gray-800 leading-snug
                       transition duration-300 group-hover:text-black">
                        Teki-Teki Gambar Aneh
                    </h3>

                    <span
                        class="font-Robotomono inline-block mt-2 text-xs bg-gray-200 px-2 py-1 rounded-full
                         transition duration-300 group-hover:bg-gray-300">
                        Misteri
                    </span>
                </div>

            </div>
        </section>

        <!-- Footer -->
        <section class="py-20 px-4 text-center">

            <!-- LOGO + NAMA  -->
            <div class="flex items-center justify-center gap-3 mb-6">

                <!-- ICON -->
                <img src="./assets/logo litera.png" alt>

                <!-- NAMA -->
                <h1 class="text-2xl md:text-4xl font-semibold font-Outfit">
                    Litera
                </h1>

            </div>

            <!-- TAGLINE -->
            <p
                class="text-base md:text-2xl font-medium leading-snug max-w-xl mx-auto font-Outfit">
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
            <div
                class="border-t border-gray-300 mt-16 pt-6 text-left text-xs text-gray-600 max-w-6xl mx-auto">
                © 2026 Litera. All rights reserved.
            </div>

        </section>

 @endsection

