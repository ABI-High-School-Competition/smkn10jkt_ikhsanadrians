@extends('layouts.master')
@section('content')
<div class="container mx-auto px-8 lg:px-28 py-8 mb-36">
    <h1 class="text-4xl font-bold text-center">Pembayaran Anda Berhasil!</h1>
    <a href="{{ route('dashboard') }}">Ke Dashboard</a>
</div>
@endsection