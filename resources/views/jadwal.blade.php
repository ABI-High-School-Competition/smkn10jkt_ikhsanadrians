@extends('layouts.master')
@section('content')
<div class="container mx-auto px-8 lg:px-28 py-8 mb-36">
    <h1 class="text-2xl font-bold">Jadwal Tiket</h1>
    <p class="text-xl mb-4">Perjalanan Tersedia Untuk Anda</p> 
    @if(count($perjalanan_tersedia) >= 1)
    @foreach ($perjalanan_tersedia as $perjalanan )
        <div class="card bg-slate-100  shadow-lg border-[1.5px] border-slate-300 rounded-lg mb-3 p-8 w-full">
            <form action="{{ route('jadwalpost') }}" method="POST" class="flex justify-between">
            @csrf
            <div class="left">
                <input type="hidden" value="{{ $perjalanan->id }}" name="perjalanan_id">
                <h1 class="font-bold">{{ $perjalanan->nama_po }}</h1>
                <p>{{ $perjalanan->awal }} - {{ $perjalanan->tujuan }}</p>
                <p>Berangkat Pada : {{ $perjalanan->tanggal_keberangkatan }}</p>
                <p>Rp {{ $perjalanan->harga }}</p>    
            </div>
            <div class="right">
                <button type="submit" class="confirm cursor-pointer">
                    <span class="material-symbols-outlined text-4xl">
                        arrow_right_alt
                    </span>
                </button>
            </div>
          </form> 
        </div>
    @endforeach
    @else 
     <div class="card bg-slate-100   shadow-lg border-[1.5px] border-slate-300 rounded-lg mb-10 p-8 w-full">
         <p>Belum Tersedia Perjalanan Untuk Rute Tersebut</p>
     </div>
     <a href="{{ route('index')}}" class="bg-[#2e6b9f] p-2 text-white rounded-md">Kembali</a>
    @endif
</div>
@endsection 