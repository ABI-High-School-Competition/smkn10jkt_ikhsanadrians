@extends('layouts.master')
@section('content')
 <div class="container mx-auto px-8 lg:px-28 py-8 mb-28">
     <form action="{{ route('pemesanpost')}}" method="POST">
     @csrf
     <h1 class="text-2xl font-bold">Pemesan</h1>
     <div class="pemesan mt-4">
        <p>
            Pemesan
        </p> 
       <input required name="pemesan" type="text" placeholder="Masukan Nama Pemesan" class="w-full border-[1.5px] border-slate-300 p-4 mt-2 rounded-md">
    </div>
    
    <div class="penumpang mt-4">
        <p>
            Penumpang
        </p> 
       <input required name="penumpang" type="text" placeholder="Masukan Nama Penumpang" class="w-full border-[1.5px] border-slate-300 p-4 mt-2 rounded-md">
    </div>
    <div class="pemesan mt-4">
        <p>
           Whatsapp
        </p> 
       <input required name="no_wa" type="number" placeholder="Masukan Nomor Whatsapp" class="w-full border-[1.5px] border-slate-300 p-4 mt-2 rounded-md">
    </div>
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