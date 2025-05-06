@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-200 py-10">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-xl shadow space-y-6">
        <h2 class="text-2xl font-bold mb-4">Daftar Barang</h2>

        <table class="min-w-full bg-white border border-gray-300 rounded-lg">
            <thead class="bg-gray-100">
                <tr>
                    <th class="text-left py-2 px-4 border-b">Nama Barang</th>
                    <th class="text-left py-2 px-4 border-b">Harga</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($barang as $item)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $item['nama'] }}</td>
                        <td class="py-2 px-4 border-b">Rp{{ number_format($item['harga'], 0, ',', '.') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2" class="py-2 px-4 text-center text-gray-500">Tidak ada barang tersedia.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
