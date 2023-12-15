@extends('layouts.master')
@section('content') 
  <div class="hero px-8 lg:px-28 flex lg:flex-row flex-col justify-between items-center mt-16">
     <div class="hero-desc w-full lg:w-96 lg:order-1 order-2 lg:mt-0 mt-8">
        <h1 class="font-bold text-2xl lg:text-4xl">Cari Tiket Untuk Perjalananmu!</h1>
        <p class="mt-4">
            JalanYuk Memudahkanmu Untuk Mencari Tiket Secara Mudah Hanya Dalam Genggaman
        </p>
        <a href="{{ route('pesantiket') }}" class="bg-[#2E6B9F] w-fit text-white py-2 px-4 mt-3 flex items-center justify-between gap-6 rounded-xl">
            Pesan Tiket
            <span class="material-symbols-outlined">
                arrow_forward
            </span>
        </a>
     </div>
     <div class="hero-img h-80 lg:order-2 order-1 overflow-hidden rounded-2xl">
        <img src="https://images.pexels.com/photos/1008155/pexels-photo-1008155.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" class="w-full h-full">
     </div>
  </div>
  <div class="section-reason bg-[#2e6b9f] w-full px-8 lg:px-28 py-24 mt-28">
       <div class="reason-title">
         <h1 class="text-2xl font-bold text-white">Mengapa Pilih Kami?</h1>
       </div>
       <div class="whyes grid grid-cols-1 lg:grid-cols-3 gap-8 pt-8">
        <div class="why-1 rounded-xl p-16 bg-white flex justify-center flex-col items-center gap-8">
            <span class="material-symbols-outlined text-6xl text-[#2e6b9f]">
                thumb_up
                </span>
            <p>Terpercaya</p>
        </div>
        <div class="why-2 rounded-xl p-16 bg-white flex justify-center flex-col items-center gap-8">
            <span class="material-symbols-outlined text-6xl text-[#2e6b9f]">
                group
                </span>
            <p>Dukungan 24/7</p> 
        </div>
        <div class="why-3 rounded-xl p-16 bg-white flex justify-center flex-col items-center gap-8">
            <span class="material-symbols-outlined text-6xl text-[#2e6b9f]">
                location_on
                </span>
            <p>Banyak Tujuan Perjalanan</p>
        </div>
       </div>
  </div>
  <div class="section-findindo w-full px-8 lg:px-28 py-16 mt-20 flex justify-center">
     <div class="wrapper text-center">
        <div class="title text-3xl font-bold">
            <h1>
               Temukan Tiket Untuk Semua Tujuan Di Indonesia
            </h1>
         </div>
         <div class="indo-map mt-16">
           <img src="{{ asset('assets/images/indo.webp') }}" alt="">
         </div>
     </div>
  </div>
@endsection