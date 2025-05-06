@extends('layouts.guest')

@section('content')
<div class=" flex justify-center items-center bg-gray-700 h-screen w-screen">
    <form action="" method="POST">
        <div class="px-8 py-8 w-md space-y-5 bg-white shadow-xl rounded-xl">
            <h2 class="text-4xl font-semibold text-center">Login</h2>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="w-full">
                    <label for="username" class="block">Username</label>
                    <input type="text" name="username" id="username" class="w-full border rounded-xl py-3 px-3">
                </div>
                <div class="w-full">
                    <label for="username" class="block">Password</label>
                    <input type="password" name="password" id="password" class="w-full border rounded-xl py-3 px-3">
                </div>
                <button class="py-3 text-lg w-full rounded-xl bg-red-500 text-white mt-5">
                    Masuk
                </button>
            </form>
        </div>
   </form>
</div>
@endsection
