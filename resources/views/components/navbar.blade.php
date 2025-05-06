@props(['id'])

<header class=" flex justify-between px-16 shadow bg-gray-600">
    <div class=" flex items-center gap-5">
        <div>
            <img src="{{ asset('images/rapli.png') }}" alt="img" class=" h-10 ">
        </div>
        <div>
            <nav class=" flex text-white">
                <x-nav-link href="{{ route('dashboard', ['id' => $id]) }}" :active="request()->is('dashboard/' . $id)">Dashboard</x-nav-link>
                <x-nav-link href="{{ route('pengelolaan', ['id' => $id]) }}" :active="request()->is('pengelolaan/' . $id)">Pengelolaan</x-nav-link>
                <x-nav-link href="{{ route('profile', ['id' => $id]) }}" :active="request()->is('profile/' . $id)">Profile</x-nav-link>
            </nav>
        </div>
    </div>
    <div class="flex items-center">
        <div>
            <a href="{{ route('showlogin') }}" class=" py-3 px-5 bg-red-500 rounded-xl text-white hover:bg-red-600">Log out</a>
        </div>

        <div class="hidden">

        </div>
    </div>
</header>
