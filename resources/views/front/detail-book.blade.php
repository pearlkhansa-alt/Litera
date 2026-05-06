@extends('front.base')

@section('content')

<br>
<br>
<br>

<section class="py-6 md:py-12 px-4">
  <div class="max-w-6xl mx-auto">

    <!-- CARD -->
    <div class="bg-white rounded-2xl shadow-sm p-5 md:p-10 md:flex md:gap-12">

      <!-- LEFT IMAGE -->
      <div class="md:w-[320px] w-full">
        <img src="{{ asset('storage/' . $book->cover) }}" class="rounded-xl w-full h-[420px] object-cover md:h-[520px]">
      </div>

      <!-- RIGHT CONTENT -->
      <div class="flex-1 mt-6 md:mt-0">

        <!-- TITLE -->
        <p class="text-gray-600 text-sm mb-1 font-Outfit">{{ $book->author }}</p>
        <h1 class="text-2xl md:text-3xl font-medium text-gray-800 font-Outfit">
          {{ $book->title }}
        </h1>

        <!-- INFO -->
        <div class="mt-4 text-gray-800 space-y-1 text-sm md:text-base font-Outfit">
          <p>Periode Pinjam Maksimum: 7 Hari</p>
          <p>Denda Keterlambatan: Rp.5.000/Hari</p>
        </div>

        <br>

        @if ($book->stock > 0)
          <div class="inline-flex items-center gap-2 px-4 py-2 rounded-xl text-sm font-semibold font-sora bg-green-500/10 border border-green-500/25 text-green-400">
            <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse-dot"></span>
            Tersedia: {{ $book->stock }} stok
          </div>
        @else
          <div class="inline-flex items-center gap-2 px-4 py-2 rounded-xl text-sm font-semibold font-sora bg-red-500/10 border border-red-500/25 text-red-400">
            <span class="w-2 h-2 rounded-full bg-red-400 animate-pulse-dot"></span>
            Stok Habis
          </div>
        @endif

        <!-- KATEGORI -->
        <div class="mt-4">
          <p class="text-sm text-[#1f1f1f] font-semibold mb-1 font-Outfit">Kategori</p>
          <span class="bg-[#E5E5E5] border px-4 py-1 rounded-full text-sm font-Outfit font-Robotomono">
            {{ $book->category->name }}
          </span>
        </div>

        <!-- LOKASI -->
        <div class="mt-4">
          <p class="text-sm text-[#1f1f1f] font-semibold mb-1 font-Outfit">Lokasi Litera</p>
          <div class="border rounded-lg px-4 py-3 text-sm font-Outfit">
            📍 Lokasi Perpustakaan Litera: Jl. Pustaka Raya 27, Lt. 2, Bandung (Lokasi Ambil)
          </div>
        </div>

        <!-- FORM CARD PEMINJAMAN -->
        <div class="mt-6 bg-[#BAFF5D] rounded-md p-5 md:p-6">

          <!-- TITLE -->
          <h3 class="font-Outfit text-[#1f1f1f] font-semibold text-lg leading-tight">
            Isi form ini untuk meminjam buku kesukaanmu
            <br class="hidden md:block">
            mulai membaca dengan mudah dan cepat
          </h3>

          <p class="text-[10px] text-[#4E6B2D] mt-1 font-Outfit">
            Temukan dan baca buku dengan lebih mudah
          </p>

          {{-- Percabangan Peminjaman --}}
          @if ($book->stock > 0)

          <form action="{{ route('borrow-book', $book->id) }}" method="POST" id="borrowForm">
            @csrf

            <!-- INPUT -->
            <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">

              <!-- INPUT 1 Name -->
              <div>
                <input name="name" type="text" placeholder="Nama Kamu" value="{{ old('name') }}"
                  class="w-full bg-transparent border-b border-black/50 placeholder:text-black/60 text-sm py-2 outline-none font-Robotomono">

                @error('name')
                  <p class="text-red-500 text-xs">{{ $message }}</p>
                @enderror
              </div>

              <!-- INPUT 2 -->
              <div>
                <input name="phone" type="text" placeholder="Nomor Whatsapp" value="{{ old('phone') }}"
                  class="w-full bg-transparent border-b border-black/50 placeholder:text-black/60 text-sm py-2 outline-none font-Robotomono">

                @error('phone')
                  <p class="text-red-500 text-xs">{{ $message }}</p>
                @enderror
              </div>

              <!-- INPUT 3 -->
              <div>
                <select name="duration"
                  class="w-full bg-transparent border-b border-black/50 text-sm py-2 outline-none font-Robotomono">

                  <option value="" disabled selected>Waktu Peminjaman</option>
                  <option value="2">2 Hari</option>
                  <option value="3">3 Hari</option>
                  <option value="7">7 Hari</option>

                </select>

                @error('duration')
                  <p class="text-red-500 text-xs">{{ $message }}</p>
                @enderror
              </div>

              <!-- BUTTON -->
              <div class="flex items-end">
                <button type="submit"
                  class="w-full bg-[#1f1f1f] text-white py-3 rounded-md transition font-Robotomono text-sm hover:bg-white hover:text-black border hover:border-black">
                  Ajukan Peminjaman
                </button>
              </div>

            </div>

          </form>

          @else

          <div class="mt-6 text-center">
            <h1 class="bold">Stock Habis Yaa</h1>
          </div>

          @endif

        </div>

        <!-- SYARAT -->
        <div class="mt-6">
          <h3 class="font-semibold mb-2 font-Outfit">Syarat Peminjaman nya ini yaa</h3>
          <ul class="list-disc ml-5 text-sm text-gray-700 space-y-1 font-Outfit">
            <li>Pastikan kamu sudah punya akun ya 😉</li>
            <li>Pilih dan pinjam buku langsung lewat website</li>
            <li>Tunjukkan ID akun kamu saat ambil buku di lokasi</li>
            <li>Ambil buku sesuai data yang kamu pinjam</li>
            <li>Jangan lupa balikin tepat waktu</li>
          </ul>
        </div>

        <!-- DESKRIPSI -->
        <div class="mt-6">
          <h3 class="font-semibold mb-2 font-Outfit">Deskripsi</h3>
          <p class="text-sm text-gray-600 leading-relaxed font-Outfit">
            {{ $book->description }}
          </p>
        </div>

        <!-- DETAIL -->
        <div class="mt-6 font-Outfit">
          <h3 class="font-semibold mb-3">Detail Buku</h3>

          <div class="grid grid-cols-2 gap-6 text-sm">
            <div>
              <p class="text-gray-400">Penerbit</p>
              <p>Gramedia</p>
            </div>

            <div>
              <p class="text-gray-400">Tahun Terbit</p>
              <p>{{ $book->year }}</p>
            </div>

            <div>
              <p class="text-gray-400">Kategori Buku</p>
              <p>{{ $book->category->name }}</p>
            </div>

            <div>
              <p class="text-gray-400">Penulis</p>
              <p>{{ $book->author }}</p>
            </div>
          </div>

        </div>

      </div>
    </div>

  </div>
</section>

@endsection