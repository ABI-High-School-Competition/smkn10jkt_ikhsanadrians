@extends('layouts.master')
@section('content')
<div class="container mx-auto px-8 lg:px-28 py-8 mb-36">
    <h1 class="text-2xl font-bold">Pembayaran</h1>
    <div class="code">
        <p class="text-xl">Kode Pembayaran</p>
        <p class="text-2xl font-semibold">{{ $pembayaran->pay_code }}</p>
    </div>
    <div class="booking">
        <p class="text-xl">Kode Booking</p>
        <p class="text-2xl font-semibold">{{ $pembayaran->booking_code }}</p>
    </div>

    <div class="code">
        <p class="text-xl mt-2">Detail Pemesanan</p>
        <p>Dari</p>
        <p class="text-2xl font-semibold">
            {{ $perjalanan->awal_id }}
        </p>
        <p>Ke</p>
        <p class="text-2xl font-semibold">
            {{ $perjalanan->tujuan_id }}
        </p>
        <p>Nama Pemesan</p>
        <p class="text-2xl font-semibold">
            {{ $perjalanan->nama_pemesan }}
        </p>
        <p>Nama Penumpang</p>
        <p class="text-2xl font-semibold">
            {{ $perjalanan->nama_penumpang }}
        </p>
        <p>Tanggal Keberangkatan</p>
        <p class="text-2xl font-semibold">
            {{ $perjalanan->tgl_berangkat }}
        </p>
        <p>Jumlah Bayar</p>
        <p class="text-2xl font-semibold">
            Rp {{ $perjalanan->harga }}
        </p>
    </div>
    
    <div class="status">
        <p class="text-xl">Status Pemesanan</p>
        @if($pembayaran->status == "belum_bayar")   
           <p class="text-2xl font-semibold">Belum Bayar</p>
        @else
           <p class="text-2xl font-semibold">Sudah Bayar</p>
        @endif
     
    </div>
    <form action="{{ route('pembayaran.post')}}" method="POST">
        @csrf
        <div class="next mt-8 flex justify-end">
            <button type="submit" class="bg-[#2e6b9f] text-white font-semibold py-2 px-4 w-fit flex items-center gap-6 rounded-md">
                Bayar
               <span class="material-symbols-outlined">
                   arrow_forward
               </span>
            </button>
        </div>    
    </form>
    
</div>


@endsection