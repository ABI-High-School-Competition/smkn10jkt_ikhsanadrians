@extends('layouts.master')
@section('content')
<div class="container mx-auto px-8 lg:px-28 py-8 mb-36">
    <h1 class="text-2xl font-bold">Tiket Anda</h1>
    <div class="riwayat mt-4 flex lg:flex-row flex-col justify-between shadow-2xl border-[1.5px] border-slate-200">
        <ul class="mt-4  p-4 rounded-lg">
            <li>Booking Id : {{ $pembayaran->booking_code }}</li>
            <li>Nama Pemesan : {{ $perjalanan->nama_pemesan }}</li>
            <li>Nama Penumpang : {{ $perjalanan->nama_penumpang }}</li>
            <li class="mt-2">
                Detail Perjalanan
                <ul> 
                    <li>Po Bus : {{ $perjalananTersedia->nama_po }} </li>
                    <li>Tujuan : {{ $perjalananTersedia->awal }} - {{ $perjalananTersedia->tujuan }}</li>
                    <li>Nomor Kursi : {{ $perjalanan->nomor_kursi }}</li>
                    <li>Tanggal Keberangkatan : {{ $perjalananTersedia->awal }} - {{ $perjalananTersedia->tujuan }}</li>
                    <li>Total Harga : Rp. {{ $perjalanan->harga }}</li>
                </ul>
            </li>
        </ul>
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/65/QR_code_for_QRpedia.png" alt="">
    </div>
</div>
@endsection