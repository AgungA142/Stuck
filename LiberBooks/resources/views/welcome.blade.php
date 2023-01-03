@extends('layouts.main')
@include('partials.navbar')
@section('container')
<div class="mx-auto">
  <div class="relative shadow-xl sm:overflow-hidden p-10">
    <div class="absolute inset-0">
      <img class="h-full w-full object-cover"
        src="http://localhost:8000/assets/img/5.jpg"
        alt="library background">
      <div class="absolute inset-0 bg-gradient-to-r from-gray-800 to-orange-700 mix-blend-multiply"></div>
    </div>
    <div class="relative px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8">
      <h1 class="mt-6 max-w-lg text-5xl font-semibold text-indigo-200 sm:max-w-3xl">Welcome to Open O-Library</h1>
      <p class="mt-6 max-w-lg text-xl text-indigo-200 sm:max-w-3xl">Merupakan sebuah perpustakaan berbasis online yang menyediakan berbagai macam buku yang dapat diunduh secara gratis.</p>
      <a href="#buku"><button class="flex content-center w-100 bg-[#dad7cd] hover:bg-[#ced4da] text-black hover:text-black-300 font-bold py-2 px-4 border-b-4 border-gray-700 hover:border-gray-500 rounded">
        See Now
      </button></a>
    </div>
  </div>
</div>
{{-- 
<div class="pt-10 bg-orange-100 sm:pt-16 lg:pt-8 lg:pb-14 lg:overflow-hidden">
  <div class="mx-auto max-w-7xl lg:px-8">
    <div class="lg:grid lg:grid-cols-2 lg:gap-8">
      <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 sm:text-center lg:px-0 lg:text-left lg:flex lg:items-center">
        <div class="lg:py-24">
          <a href="#" class="inline-flex items-center text-white bg-black rounded-full p-1 pr-2 sm:text-base lg:text-sm xl:text-base hover:text-gray-200">
            <span class="px-3 py-0.5 text-white text-xs font-semibold leading-5 uppercase tracking-wide bg-gradient-to-r from-teal-500 to-cyan-600 rounded-full">LiberBooks</span>
            <span class="ml-4 text-sm">Visit our careers page</span>
            <!-- Heroicon name: solid/chevron-right -->
            <svg class="ml-2 w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
            </svg>
          </a>
          <h1 class="mt-4 text-4xl tracking-tight font-extrabold text-white sm:mt-5 sm:text-6xl lg:mt-6 xl:text-6xl">
            <span class="block">Welcome to Open</span>
            <span class="pb-3 block bg-clip-text text-transparent bg-gradient-to-r from-teal-200 to-cyan-400 sm:pb-5">LiberBooks</span>
          </h1>
          <p class="text-base text-gray-300 sm:text-xl lg:text-lg xl:text-xl">Merupakan sebuah perpustakaan berbasis online yang menyediakan berbagai macam buku yang dapat diunduh secara gratis.</p>
          <div class="mt-10 sm:mt-12">
          </div>
        </div>
      </div>
      <div class="mt-12 -mb-16 sm:-mb-48 lg:m-0 lg:relative">
        <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:max-w-none lg:px-0">
          <!-- Illustration taken from Lucid Illustrations: https://lucid.pixsellz.io/ -->
          <img class="w-full rounded-lg lg:absolute lg:inset-y-0 lg:left-0 lg:h-full lg:w-auto lg:max-w-none"  src="http://localhost:8000/assets/img/4.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
</div> --}}
<div class="bg-[url('/assets/2.jpg)]">
  <img class="bg-gradient-to-r" src="" alt="">
</div>

{{-- feature section --}}
      
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-amber-50 mt-6">
  <div class="text-center sm:max-w-3xl sm:px-6 lg:max-w-7xl lg:px-8">
    <p class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Category</p>
    <span class="inline-flex h-1 w-40 rounded bg-indigo-500 mt-2"></span>
    <p class="mx-auto mt-5 max-w-prose text-xl text-gray-500">Berikut merupakan daftar category yang ada di O-Library</p>
    <div class="mt-12">
      <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
        <div class="pt-6">
          <div class="flow-root rounded-lg bg-[#C7BCA1] px-6 pb-8 hover:bg-[#9F8772] group">
            <div class="-mt-6">
              <img width="100" class="rounded-lg mx-auto shadow-lg bg-[#C7BCA1] hover:scale-150" src="http://localhost:8000/assets/img/novel.png" alt="">
              <h3 class="mt-2 text-lg font-medium tracking-tight text-gray-900 group-hover:text-white">Novel</h3>
              <p class="text-base text-gray-500 group-hover:text-white selection:bg-[#FFF8EA] selection:text-slate-900">Novel adalah karya sastra yang berbentuk prosa. Cerita dalam novel adalah sebuah karya imajinasi, membahas kehidupan seseorang atau berbagai karakter.</p>
            </div>
          </div>
        </div>


        <div class="pt-6">
          <div class="flow-root rounded-lg bg-[#C7BCA1] px-6 pb-8 hover:bg-[#9F8772] group">
            <div class="-mt-6">
              <img width="100" class="rounded-lg mx-auto shadow-lg bg-[#C7BCA1] hover:scale-150" src="http://localhost:8000/assets/img/majalah.png" alt="">
              <h3 class="mt-2 text-lg font-medium tracking-tight text-gray-900 group-hover:text-white">Magazine</h3>
              <p class="text-base text-gray-500 group-hover:text-white selection:bg-[#FFF8EA] selection:text-slate-900">Majalah adalah memuat berbagai artikel dengan berbagai topik yang ditujukan untuk masyarakat umum dan ditulis dalam bahasa yang mudah dipahami banyak orang</p>
            </div>
          </div>
        </div>

        <div class="pt-6">
          <div class="flow-root rounded-lg bg-[#C7BCA1] px-6 pb-8 hover:bg-[#9F8772] group">
            <div class="-mt-6">
              <img width="100" class="rounded-lg mx-auto shadow-lg bg-[#C7BCA1] hover:scale-150" src="http://localhost:8000/assets/img/kamus.png" alt="">
              <h3 class="mt-2 text-lg font-medium tracking-tight text-gray-900 group-hover:text-white">Dictionary</h3>
              <p class="text-base text-gray-500 group-hover:text-white selection:bg-[#FFF8EA] selection:text-slate-900">Kamus adalah buku referensi untuk menjelaskan arti kata. Kamus juga dapat memiliki pedoman khusus, sumber kata (etimologi), dan contoh penggunaan kata.</p>
            </div>
          </div>
        </div>

        <div class="pt-6">
          <div class="flow-root rounded-lg bg-[#C7BCA1] px-6 pb-8 hover:bg-[#9F8772] group">
            <div class="-mt-6">
              <img width="100" class="rounded-lg mx-auto shadow-lg bg-[#C7BCA1] hover:scale-150" src="http://localhost:8000/assets/img/komik.png" alt="">
              <h3 class="mt-2 text-lg font-medium tracking-tight text-gray-900 group-hover:text-white">Comic</h3>
              <p class="text-base text-gray-500 group-hover:text-white selection:bg-[#FFF8EA] selection:text-slate-900">Komik adalah media untuk mengekspresikan ide melalui gambar, biasanya digabungkan dengan teks atau informasi visual lainnya.</p>
            </div>
          </div>
        </div>

        <div class="pt-6">
          <div class="flow-root rounded-lg bg-[#C7BCA1] px-6 pb-8 hover:bg-[#9F8772] group">
            <div class="-mt-6">
              <img width="100" class="rounded-lg mx-auto shadow-lg bg-[#C7BCA1] hover:scale-150" src="http://localhost:8000/assets/img/dongeng.png" alt="">
              <h3 class="mt-2 text-lg font-medium tracking-tight text-gray-900 group-hover:text-white">Fairytale</h3>
              <p class="text-base text-gray-500 group-hover:text-white selection:bg-[#FFF8EA] selection:text-slate-900">Dongeng merupakan jenis karya sastra kuno yang mengandung cerita imajiner yang dianggap masyarakat umum sebagai cerita fiksi.</p>
            </div>
          </div>
        </div>

        <div class="pt-6">
          <div class="flow-root rounded-lg shadow-md bg-[#C7BCA1] px-6 pb-8 hover:bg-[#9F8772] group">
            <div class="-mt-6">
              <img width="100" class="rounded-lg mx-auto shadow-lg bg-[#C7BCA1] hover:scale-150" src="http://localhost:8000/assets/img/panduan.png" alt="">
              <h3 class="mt-2 text-lg font-medium tracking-tight text-gray-900 group-hover:text-white">Guide</h3>
              <p class="text-base text-gray-500 group-hover:text-white selection:bg-[#FFF8EA] selection:text-slate-900">Buku panduan (how to) merupakan jenis buku yang menjelaskan tentang sebuah cara atau tutorial.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


 <!-- Testimonial section -->
 <section>
  <div class="container mx-auto p-10">
    <div class="text-center">
      <h1 class="text-3xl font-extrabold">Testimonial</h1>
      <span class="inline-flex h-1 w-40 rounded bg-indigo-500 mt-2"></span>

    </div>
    <div class="flex p-5">
      <div class="h-full text-center ml-5 p-5 bg-gray-300 hover:bg-gray-200 rounded-2xl">
        <img class="h-24 w-24 object-cover rounded-full inline-block border-2 border-gray-700 bg-opacity-10 items-center justify-center" src="http://localhost:8000/assets/img/Charactor1.png" alt="">
        <svg class="absolute top-0 left-0 transform-translate-x-3 -translate-y-2 h-8 w-8 text-gray-600 hover:scale-150" fill="currentColor" class="block text-yellow-500 w-5 h-5" viewBox="0 0 32 32" aria-hidden="true">
          <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
        </svg>

        <p class="leading-relaxed">Sangat membantu dalam mengakses informasi buku bacaan berkualitas secara fleksibel tanpa terbatas oleh ruang dan waktu.</p>
        <span class="inline-flex h-1 w-14 rounded bg-indigo-500 mt-4 mb-2"></span>
        <h2 class="title-font font-medium text-sm tracking-wider">Putra</h2>
        <p class="text-gray-500">Mahasiswa</p>
        <ul class="flex justify-center mb-0">
          <li>
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500"
              role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor"
                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
              </path>
            </svg>
          </li>
          <li>
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500"
              role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor"
                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
              </path>
            </svg>
          </li>
          <li>
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500"
              role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor"
                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
              </path>
            </svg>
          </li>
          <li>
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500"
              role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor"
                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
              </path>
            </svg>
          </li>
          <li>
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star-half-alt"
              class="w-4 text-yellow-500" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 536 512">
              <path fill="currentColor"
                d="M508.55 171.51L362.18 150.2 296.77 17.81C290.89 5.98 279.42 0 267.95 0c-11.4 0-22.79 5.9-28.69 17.81l-65.43 132.38-146.38 21.29c-26.25 3.8-36.77 36.09-17.74 54.59l105.89 103-25.06 145.48C86.98 495.33 103.57 512 122.15 512c4.93 0 10-1.17 14.87-3.75l130.95-68.68 130.94 68.7c4.86 2.55 9.92 3.71 14.83 3.71 18.6 0 35.22-16.61 31.66-37.4l-25.03-145.49 105.91-102.98c19.04-18.5 8.52-50.8-17.73-54.6zm-121.74 123.2l-18.12 17.62 4.28 24.88 19.52 113.45-102.13-53.59-22.38-11.74.03-317.19 51.03 103.29 11.18 22.63 25.01 3.64 114.23 16.63-82.65 80.38z">
              </path>
            </svg>
          </li>
        </ul>
      </div>
      <div class="h-full text-center ml-5 p-5 bg-gray-300 hover:bg-gray-200 rounded-2xl">
        <img class="h-24 w-24 object-cover rounded-full inline-block border-2 border-gray-700 bg-opacity-10 items-center justify-center" src="http://localhost:8000/assets/img/Charactor2.png" alt="">
        <svg class="absolute top-0 left-0 transform-translate-x-3 -translate-y-2 h-8 w-8 text-gray-600 hover:scale-150" fill="currentColor" class="block text-yellow-500 w-5 h-5" viewBox="0 0 32 32" aria-hidden="true">
          <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
        </svg>

        <p class="leading-relaxed">Dengan adanya perpustakaan digital ini lebih memudahkan dan juga lebih praktis.</p>
        <span class="inline-flex h-1 w-14 rounded bg-indigo-500 mt-4 mb-2"></span>
        <h2 class="title-font font-medium text-sm tracking-wider">Putra</h2>
        <p class="text-gray-500">Mahasiswa</p>
        <ul class="flex justify-center mb-0">
          <li>
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500"
              role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor"
                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
              </path>
            </svg>
          </li>
          <li>
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500"
              role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor"
                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
              </path>
            </svg>
          </li>
          <li>
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500"
              role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor"
                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
              </path>
            </svg>
          </li>
          <li>
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500"
              role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor"
                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
              </path>
            </svg>
          </li>
          <li>
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star-half-alt"
              class="w-4 text-yellow-500" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 536 512">
              <path fill="currentColor"
                d="M508.55 171.51L362.18 150.2 296.77 17.81C290.89 5.98 279.42 0 267.95 0c-11.4 0-22.79 5.9-28.69 17.81l-65.43 132.38-146.38 21.29c-26.25 3.8-36.77 36.09-17.74 54.59l105.89 103-25.06 145.48C86.98 495.33 103.57 512 122.15 512c4.93 0 10-1.17 14.87-3.75l130.95-68.68 130.94 68.7c4.86 2.55 9.92 3.71 14.83 3.71 18.6 0 35.22-16.61 31.66-37.4l-25.03-145.49 105.91-102.98c19.04-18.5 8.52-50.8-17.73-54.6zm-121.74 123.2l-18.12 17.62 4.28 24.88 19.52 113.45-102.13-53.59-22.38-11.74.03-317.19 51.03 103.29 11.18 22.63 25.01 3.64 114.23 16.63-82.65 80.38z">
              </path>
            </svg>
          </li>
        </ul>
      </div>
      <div class="h-full text-center ml-5 p-5 bg-gray-300 hover:bg-gray-200 rounded-2xl">
        <img class="h-24 w-24 object-cover rounded-full inline-block border-2 border-gray-700 bg-opacity-10 items-center justify-center" src="http://localhost:8000/assets/img/Charactor3.png" alt="">
         <svg class="absolute top-0 left-0 transform-translate-x-3 -translate-y-2 h-8 w-8 text-gray-600 hover:scale-150" fill="currentColor" class="block text-yellow-500 w-5 h-5" viewBox="0 0 32 32" aria-hidden="true">
          <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
        </svg>

        <p class="leading-relaxed">Wesbite perpustakaannya keren, buku yang tersedia cukup lengkap dan cukup banyak genre yang tersedia.</p>
        <span class="inline-flex h-1 w-14 rounded bg-indigo-500 mt-4 mb-2"></span>
        <h2 class="title-font font-medium text-sm tracking-wider">Dio</h2>
        <p class="text-gray-500">Mahasiswa</p>
        <ul class="flex justify-center mb-0">
          <li>
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500"
              role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor"
                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
              </path>
            </svg>
          </li>
          <li>
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500"
              role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor"
                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
              </path>
            </svg>
          </li>
          <li>
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500"
              role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor"
                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
              </path>
            </svg>
          </li>
          <li>
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star-half-alt"
            class="w-4 text-yellow-500" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 536 512">
            <path fill="currentColor"
              d="M508.55 171.51L362.18 150.2 296.77 17.81C290.89 5.98 279.42 0 267.95 0c-11.4 0-22.79 5.9-28.69 17.81l-65.43 132.38-146.38 21.29c-26.25 3.8-36.77 36.09-17.74 54.59l105.89 103-25.06 145.48C86.98 495.33 103.57 512 122.15 512c4.93 0 10-1.17 14.87-3.75l130.95-68.68 130.94 68.7c4.86 2.55 9.92 3.71 14.83 3.71 18.6 0 35.22-16.61 31.66-37.4l-25.03-145.49 105.91-102.98c19.04-18.5 8.52-50.8-17.73-54.6zm-121.74 123.2l-18.12 17.62 4.28 24.88 19.52 113.45-102.13-53.59-22.38-11.74.03-317.19 51.03 103.29 11.18 22.63 25.01 3.64 114.23 16.63-82.65 80.38z">
            </path>
          </svg>
          </li>
          <li>
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star-half-alt"
              class="w-4 text-yellow-500" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 536 512">
              <path fill="currentColor"
                d="M508.55 171.51L362.18 150.2 296.77 17.81C290.89 5.98 279.42 0 267.95 0c-11.4 0-22.79 5.9-28.69 17.81l-65.43 132.38-146.38 21.29c-26.25 3.8-36.77 36.09-17.74 54.59l105.89 103-25.06 145.48C86.98 495.33 103.57 512 122.15 512c4.93 0 10-1.17 14.87-3.75l130.95-68.68 130.94 68.7c4.86 2.55 9.92 3.71 14.83 3.71 18.6 0 35.22-16.61 31.66-37.4l-25.03-145.49 105.91-102.98c19.04-18.5 8.52-50.8-17.73-54.6zm-121.74 123.2l-18.12 17.62 4.28 24.88 19.52 113.45-102.13-53.59-22.38-11.74.03-317.19 51.03 103.29 11.18 22.63 25.01 3.64 114.23 16.63-82.65 80.38z">
              </path>
            </svg>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>


<!-- Blog section -->
<div class="relative bg-amber-50 py-16 sm:py-24 lg:py-32">
  <div class="relative">
    <div class="text-center mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
      <p id="buku" class="mt-2 text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">Trending Books</p>
      <p class="mt-5 mx-auto max-w-prose text-xl text-gray-500">Berikut merupakan beberapa buku yang sering dibaca atau di download oleh user</p>
    </div>
    
    
    <div class="mt-12 mx-auto max-w-md px-4 grid gap-8 sm:max-w-lg sm:px-6 lg:px-8 lg:grid-cols-3 lg:max-w-7xl">
      @foreach($buku as $b)
      <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
        <div class="flex-shrink-0">
          <img class="h-48 w-full object-cover" src="{{ asset('storage/' . $b->image) }}" alt="">
        </div>
        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
          <div class="flex-1">
            <p class="text-sm font-medium text-cyan-600">
              <a href="/allbooks?category={{ $b->category->name }}" class="hover:underline hover:text-amber-900">{{ $b->category->name }}</a>
            </p>
              <p class="text-xl font-semibold text-gray-900">{{ $b->judul }}</p>
              <p class="mt-3 text-base text-gray-500">{!! $b->deskripsi !!}</p>
           <a href="/allbooks" class="text-gray-700 hover:text-amber-900">Read More....</a>
          </div>
          <div class="mt-6 flex items-center">
            <div class="ml-3">
              <p class="text-sm font-medium text-gray-900">
                <p class=""> {{ $b->penulis }} </p>
              </p>
              <div class="flex space-x-1 text-sm text-gray-500">
                <time datetime="2020-03-16"> {{ $b->tahun_terbit }} </time>
                <span aria-hidden="true"> &middot; </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>

  </div>
  <div class="flex justify-center mt-10">
    <a href="/allbooks"><button type="button" class=" inline-flex rounded-md border border-transparent shadow-sm px-4 py-2 bg-gray-900 text-base font-medium text-white hover:bg-amber-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm">See More</button></a>
  </div>
</div>
@include('layouts.footer')


@endsection

  

