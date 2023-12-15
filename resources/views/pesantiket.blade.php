@extends('layouts.master')
@section('content')
 <div class="container mx-auto px-8 lg:px-28 py-8 mb-28">
     <h1 class="text-2xl font-bold">Pesan Tiket</h1>
     <form action="{{ route('pesantiketpost')}}" method="POST">
      @csrf
      <div class="tujuan mt-4">
        <p>
            Dari
        </p> 
        <select required name="dari" id="" class="w-full border-[1.5px] border-slate-300 p-4 mt-2 rounded-md">
           @foreach ($tujuans as $tujuan)
           <option value="{{ $tujuan->name }}">
               {{ $tujuan->name }}
            </option>
            @endforeach 
       
        </select>
    </div>
     <div class="tujuan mt-4">
        <p>
            Ke
        </p> 
        <select required name="tujuan" id="" class="w-full border-[1.5px] border-slate-300 p-4 mt-2 rounded-md">
            @foreach ($tujuans as $tujuan)
            <option value="{{ $tujuan->name }}">
                {{ $tujuan->name }}
             </option>
             @endforeach 
         </select>
    </div>
    
    <div class="jumlahpenumpang mt-4">
        <p>
           Masukan Jumlah Penumpang
        </p> 
        <input required type="number" name="jumlah_penumpang" id="" class="w-full border-[1.5px] border-slate-300 p-4 mt-2 rounded-md">
    </div>

    <div class="keberangkatan mt-4">
        <p class="mb-3">
            Pilih Tanggal Keberangkatan
        </p> 
        <input required type="date" name="date" class="w-full border-[1.5px] border-slate-300 p-4 rounded-md" id="">    
    </div>
    <div class="next mt-8 flex justify-end">
        <button type="submit"  class="bg-[#2e6b9f] text-white font-semibold py-2 px-4 w-fit flex items-center gap-6 rounded-md">
            Lanjut
           <span class="material-symbols-outlined">
               arrow_forward
           </span>
        </button>
    </div>
</form>
 </div>
@endsection