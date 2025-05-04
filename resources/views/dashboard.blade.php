@extends('layouts.app')

@section('content')
<div class="py-8">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            <h3 class="text-lg font-medium ">NOTIMETOHELL,</h3>
            <p class="mt-2 text-gray-600">
                Kamu berhasil login. Ini adalah halaman dashboard.
            </p>

            <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-blue-100 p-4 rounded shadow">
                    <h4 class="font-bold text-blue-800">Jumlah Produk</h4>
                    <p class="text-gray-700 mt-2">23 Produk tersedia</p>
                </div>

                <div class="bg-green-100 p-4 rounded shadow">
                    <h4 class="font-bold text-green-800">Transaksi</h4>
                    <p class="text-gray-700 mt-2">12 Transaksi hari ini</p>
                </div>

                <div class="bg-yellow-100 p-4 rounded shadow">
                    <h4 class="font-bold text-yellow-800">Notifikasi</h4>
                    <p class="text-gray-700 mt-2">3 Notifikasi baru</p>
                </div>
            </div>

            <div class="mt-6">
                <a href="" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                    Lihat Daftar Produk
                </a>
            </div>
        </div>

    </div>
</div>
@endsection
