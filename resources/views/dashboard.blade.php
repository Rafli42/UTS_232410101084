@extends('layouts.app')

@section('content')
<div class="min-h-screen flex flex-col bg-gray-200 items-center justify-center p-6">
    <div class="bg-white shadow rounded-lg p-8 w-full max-w-3xl space-y-3">
        <h2 class="text-2xl font-bold mb-6 text-center">Daftar Barang</h2>
        <div>
            <h3 class="text-xl font-medium">Username : Haudan</h3>
            <h3 class="text-xl font-medium">Nama : Haudan</h3>
            <p class="text-xl font-medium">Jumlah produk yang tersedia: <strong>{{ $barang }}</strong></p>
        </div>
    </div>
@endsection
