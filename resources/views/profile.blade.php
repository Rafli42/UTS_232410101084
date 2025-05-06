@extends('layouts.app')


@section('content')
<main class="flex  justify-center w-screen bg-gray-200 py-20">
    <div class="px-7 py-10 w-md shadow rounded-xl space-y-5 bg-white">
        <h1 class="text-3xl font-bold text-center">Profil</h1>
        <div>
            <label for="nama" class="block">Nama</label>
            <input readonly value="{{ $nama }}" type="text" name="nama" id="nama" class=" border rounded-lg py-3 px-4 w-full">
        </div>
        <div>
            <label for="username" class="block">Username</label>
            <input readonly value="{{ $username }}" type="text" name="username" id="username" class=" border rounded-lg py-3 px-4 w-full">
        </div>
        <div>
            <label for="alamat" class="block">Alamat</label>
            <input readonly value="{{ $alamat }}" type="text" name="alamat" id="alamat" class=" border rounded-lg py-3 px-4 w-full">
        </div>
        <div>
            <label for="no_hp" class="block">Nomor HP</label>
            <input readonly value="{{ $no_hp }}" type="text" name="no_hp" id="no_hp" class=" border rounded-lg py-3 px-4 w-full">
        </div>
    </div>
</main>
@endsection
