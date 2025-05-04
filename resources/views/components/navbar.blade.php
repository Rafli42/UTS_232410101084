<header class=" flex justify-between px-16 shadow">
    <div class=" flex items-center gap-5">
        <div>
            <img src="{{ asset('images/rapli.png') }}" alt="img" class=" h-10 ">
        </div>
        <div>
            <nav class=" flex">
                <x-nav-link href="/dashboard" :active="request()->is('dashboard')">Dashboard</x-nav-link>
                <x-nav-link href="/pengelolaan" :active="request()->is('pengelolaan')">Pengelolaan</x-nav-link>
                <x-nav-link href="/profile" :active="request()->is('profile')">Profile</x-nav-link>
            </nav>
        </div>
    </div>
    <div class="flex items-center">
        <div>
            <a href="" class=" py-3 px-5 bg-red-500 rounded-xl text-white hover:bg-red-600">Log out</a>
        </div>
        <div class="hidden">

        </div>
    </div>
</header>
