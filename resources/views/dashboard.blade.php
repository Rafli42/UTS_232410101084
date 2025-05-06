@extends('layouts.app')

@section('content')
<div class="min-h-screen flex flex-col bg-gray-200 items-center justify-center p-6">
    <div class="bg-white shadow rounded-lg p-8 w-full max-w-3xl space-y-3">
        <h2 class="text-2xl font-bold mb-6 text-center">Daftar Barang</h2>
        <div>
            <h3 class="text-xl font-medium">Username : Haudan</h3>
            <h3 class="text-xl font-medium">Nama : Haudan</h3>
        </div>
        <table class="table-auto w-full border border-gray-300">
            <thead class="bg-gray-500">
                <tr>
                    <th class="border px-4 py-2 text-left">Nama Barang</th>
                    <th class="border px-4 py-2 text-left">Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barang as $item)
                    <tr>
                        <td class="border px-4 py-2">{{ $item['nama'] }}</td>
                        <td class="border px-4 py-2">Rp{{ number_format($item['harga'], 0, ',', '.') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
