<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SudutPustaka</title>

    <!-- REMIX ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/1.3.1/remixicon.css"
        integrity="sha512-BAz2I6Wsat2KnchQTkbO4bQ40iMaXyLqjJT07kHQ5SoQPzI0UHz/zGdh29SMpLsxlooP0kHGrgBdE2LOgN8kUg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- TAILWIND CSS -->
    <link rel="stylesheet" href="./src/output.css">

    <!-- Styles / Scripts -->
           @vite(['resources/css/app.css', 'resources/css/landing.css', 'resources/js/app.js'])
</head>





<body>
    
    <!-- Cursor -->
    <div id="cursor-dot" class="pointer-events-none fixed w-2 h-2 bg-black rounded-full z-50">
    </div>

    <div id="cursor-ring" class="pointer-events-none fixed w-8 h-8 border border-black rounded-full z-50">
    </div>
    <!-- NAVBAR -->
    <nav class="fixed top-0 left-0 w-full py-6 px-4 md:px-10 lg:px-20 bg-white/90 backdrop-blur z-50 ">
        <div class="relative flex items-center justify-between">

            <!-- LEFT: Logo -->
            <div class="flex items-center gap-2 z-10">
                <img src="{{ asset("assets/logo-litera.png") }}" class="h-8 md:h-10 w-auto" />

                <span class="font-Outfit hidden md:block text-3xl font-semibold">
                    Litera
                </span>
            </div>

            <!-- CENTER: Menu Desktop -->
            <div
                class="font-Outfit hidden md:flex absolute left-1/2 -translate-x-1/2 items-center bg-white rounded-full p-2 shadow gap-5">

                <a href="#kategori"
                    class="px-5 py-2 rounded-full text-gray-700 hover:bg-[#1f1f1f] hover:text-white transition">
                    Kategori Buku
                </a>

                <a href="#cara-pinjam"
                    class="px-5 py-2 text-gray-600 hover:text-black  rounded-full text-gray-700 hover:bg-[#1f1f1f] hover:text-white transition">
                    Cara Pinjam
                </a>

                <a href="#tentang"
                    class="px-5 py-2 text-gray-600 hover:text-black rounded-full text-gray-700 hover:bg-[#1f1f1f] hover:text-white transition">
                    Tentang
                </a>

                <a href="#lokasi"
                    class="px-5 py-2 text-gray-600 hover:text-black rounded-full text-gray-700 hover:bg-[#1f1f1f] hover:text-white transition">
                    Lokasi
                </a>

            </div>

            <!-- RIGHT: Desktop -->
            <div class="hidden md:block z-10">
                <button
                    class="font-Robotomono border px-4 py-1 rounded-md text-sm hover:bg-[#1f1f1f] hover:text-white transition">
                    Masuk
                </button>
            </div>

            <!-- ================= MOBILE ================= -->

            <!-- CENTER: Mobile Pill -->
            <div
                class="font-Outfit md:hidden absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 flex bg-white rounded-full p-1 shadow gap-1 text-sm">

                <a href="#"
                    class="px-3 py-1.5 rounded-full text-gray-600 hover:text-black  rounded-full text-gray-600 hover:bg-black hover:text-white transition ">
                    Kategori
                </a>

                <a href="#"
                    class="px-3 py-1.5  text-gray-600 hover:text-black  rounded-full text-gray-700 hover:bg-black hover:text-white transition">
                    Pinjam
                </a>

                <a href="#"
                    class="px-3 py-1.5  text-gray-600 hover:text-black  rounded-full text-gray-700 hover:bg-black hover:text-white transition">
                    Tentang
                </a>

            </div>

            <div class="md:hidden relative">

                <button id="hamburger-btn"
                    class="absolute right-4 top-1/2 -translate-y-1/2 bg-black text-white p-2 rounded-md">
                    ☰
                </button>

                <div id="mobile-menu"
                    class="absolute right-4 top-full mt-2 w-40 bg-white border rounded-lg shadow-lg hidden z-50">

                    <ul class="flex flex-col p-2">
                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer rounded">
                            <a href="">Masuk</a>
                        </li>
                        <!-- <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer rounded">
                            <a href="">Lokasi</a>
                        </li> -->
                    </ul>

                </div>
            </div>



        </div>
    </nav>

    @yield('content')

<script>
            // HUMBERGER MENU
const btn = document.getElementById('hamburger-btn');
const menu = document.getElementById('mobile-menu');
btn.addEventListener('click', () => {
  menu.classList.toggle('hidden');
});

// Testimonial slider mobile
let index = 0;
const slides = document.getElementById("slides");

function updateSlide() {
  slides.style.transform = `translateX(-${index * 100}%)`;
}

function nextSlide() {
  if (index < 2) {
    index++;
    updateSlide();
  }
}

function prevSlide() {
  if (index > 0) {
    index--;
    updateSlide();
  }
}

// Accordion

function toggleFAQ(index) {
  const content = document.getElementById(`content-${index}`);
  const icon = document.getElementById(`icon-${index}`);

  content.classList.toggle("hidden");
  icon.textContent = content.classList.contains("hidden") ? "+" : "−";
}

// animation
const text = "galeri koleksi digital";
const el = document.getElementById("typing");

let i = 0;

function typing() {
  if (i < text.length) {
    el.innerHTML += text.charAt(i);
    i++;
    setTimeout(typing, 50);
  }
}

typing();

// animation cursor
const dot = document.getElementById("cursor-dot");
const ring = document.getElementById("cursor-ring");

let x = 0, y = 0;
let rx = 0, ry = 0;

document.addEventListener("mousemove", (e) => {
  x = e.clientX;
  y = e.clientY;

  dot.style.transform = `translate(${x}px, ${y}px)`;
});

function animate() {
  rx += (x - rx) * 0.1;
  ry += (y - ry) * 0.1;

  ring.style.transform = `translate(${rx}px, ${ry}px)`;

  requestAnimationFrame(animate);
}

animate();

// yayayaya


const cards = document.querySelectorAll(".book-card");

const observer = new IntersectionObserver((entries) => {

  entries.forEach((entry) => {

    if (entry.isIntersecting) {

      cards.forEach((card, index) => {

        setTimeout(() => {
          card.classList.remove("opacity-0", "translate-y-10");
        }, index * 200);

      });

    } else {

      cards.forEach((card) => {
        card.classList.add("opacity-0", "translate-y-10");
      });

    }

  });

}, {
  threshold: 0.2
});

cards.forEach((card) => {
  observer.observe(card);
});


</script>

</body>

</html>