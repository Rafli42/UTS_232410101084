@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-200 py-10">
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-xl shadow space-y-6">
        <h2 class="text-2xl font-bold mb-4">Pengelolaan Barang</h2>

        <form action="{{ route('tambah.barang') }}" method="POST" class="space-y-4">
            @csrf
            <div class="mb-4">
                <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Pilih Barang</label>
                <select name="nama" id="nama" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-red-500 focus:border-red-500 text-sm">
                    <option value="" disabled selected>Pilih barang...</option>
                    @foreach ($barang as $item)
                        <option value="{{ $item['nama'] }}">
                            {{ $item['nama'] }} - Rp{{ number_format($item['harga'], 0, ',', '.') }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="jumlah" class="block text-sm font-medium text-gray-700 mb-1">Jumlah</label>
                <input
                    type="number"
                    name="jumlah"
                    id="jumlah"
                    required
                    min="1"
                    placeholder="Masukkan jumlah"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-red-500 focus:border-red-500 text-sm"
                >
            </div>

            <button type="submit" class="w-full bg-red-600 text-white py-2 rounded hover:bg-red-700">
                Tambah ke Keranjang
            </button>
        </form>

        <hr class="my-4">

        <h3 class="text-xl font-semibold">Keranjang Sementara</h3>
        @if(count($keranjang) > 0)
            @php $grandTotal = 0; @endphp

            <table class="w-full table-auto border mt-2 text-sm">
                <thead class="bg-gray-500">
                    <tr>
                        <th class="border px-2 py-1">Barang</th>
                        <th class="border px-2 py-1">Harga</th>
                        <th class="border px-2 py-1">Jumlah</th>
                        <th class="border px-2 py-1">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($keranjang as $item)
                        @php
                            $subtotal = $item['harga'] * $item['jumlah'];
                            $grandTotal += $subtotal;
                        @endphp
                        <tr>
                            <td class="border px-2 py-1">{{ $item['nama'] }}</td>
                            <td class="border px-2 py-1">Rp{{ number_format($item['harga']) }}</td>
                            <td class="border px-2 py-1">{{ $item['jumlah'] }}</td>
                            <td class="border px-2 py-1">Rp{{ number_format($subtotal) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="text-right mt-4 font-bold text-lg">
                Total: Rp{{ number_format($grandTotal) }}
            </div>
        @else
            <p class="text-center mt-4 text-gray-500">Keranjang kosong.</p>
        @endif
    </div>
</div>
@endsection
