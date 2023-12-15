@extends('layouts.master')
@section('content')
<div class="container mx-auto px-8 lg:px-28 py-8 mb-36">
    <h1 class="text-2xl font-bold">Pilih Kursi</h1>
    <p class="text-xl">Silahkan Pilih Posisi Kursi Anda</p>
    <form action="{{ route('pilihkursipost')}}" method="POST">
     @csrf
    <select name="nomor_kursi" id="" class="w-full border-[1.5px] border-slate-300 p-4 mt-2 rounded-md">
        <option value="1a">
            1a
        </option>
        <option value="1b">
            1b
        </option>
        <option value="2a">
            2a
        </option>
        <option value="2b">
            2b
        </option>
        <option value="3a">
            3a
        </option>
        <option value="3b">
            3b
        </option>
        <option value="4a">
            4a
        </option>
        <option value="4b">
            4b
        </option>
        <option value="5a">
            5a
        </option>
        <option value="5b">
            5b
        </option>
        <option value="6a">
            6a
        </option>
        <option value="6b">
            6b
        </option>
    </select>
   
    <div class="next mt-8 flex justify-end">
        <button type="submit" class="bg-[#2e6b9f] text-white font-semibold py-2 px-4 w-fit flex items-center gap-6 rounded-md">
            Lanjut
           <span class="material-symbols-outlined">
               arrow_forward
           </span>
        </button>
    </div>
</form>
</div>


@endsection