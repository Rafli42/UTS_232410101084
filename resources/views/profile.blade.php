@extends('layouts.app')


@section('content')
<main class=" flex  justify-center w-screen py-20">
    <div class="px-7 py-10 w-md shadow rounded-xl space-y-5 bg-white">
        <h1 class="text-3xl font-bold text-center">Profil</h1>
        <div>
            <label for="nama" class="block">Nama</label>
            <input type="text" name="nama" id="nama" class=" border rounded-lg py-3 px-4 w-full">
        </div>
        <div>
            <label for="username" class="block">Username</label>
            <input type="text" name="username" id="username" class=" border rounded-lg py-3 px-4 w-full">
        </div>
        <div>
            <label for="password" class="block">Password</label>
            <input type="password" name="password" id="password" class=" border rounded-lg py-3 px-4 w-full">
        </div>
         <button type="submit"
         class="w-full bg-red-500 text-white font-semibold py-2 rounded-lg hover:bg-red-600 transition">
         Save Data
         </button>
    </div>
</main>
@endsection
