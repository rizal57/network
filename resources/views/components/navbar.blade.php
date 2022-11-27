<header class="bg-white border-b py-4">
    <nav class="container mx-auto flex items-center justify-between">
        <div class="flex items-center gap-2">
            <div class="nav-brand mr-4 group">
                <a
                    href=""
                    class="text-blue-500 hover:text-blue-600 group-hover:-rotate-6 transition ease-out duration-300 block font-bold"
                >
                    NETWORK
                </a>
            </div>
            {{-- navigation --}}
            <div>
                <a
                    href=""
                    class="text-slate-500 text-base hover:text-blue-500 transition duration-300 hover:border-b-2 border-blue-500 pb-4"
                >
                    Timeline
                </a>
            </div>
        </div>
        <div>
            @auth
            <div x-data="{open: false}" class="relative">
                <div
                    @click="open = ! open"
                    class="bg-gray-500 w-10 h-10 rounded-full overflow-hidden cursor-pointer"
                >
                    <img src="http://www.gravatar.com/avatar/?d=mp" class="w-full" alt="">
                </div>
                {{-- dropdown --}}
                <div x-show="open"
                    @click.away="open = false"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-90"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-90"
                    class="absolute bg-white shadow-md rounded-md top-full right-0 border">
                    <ul>
                        <li>
                            <a href="" class="block text-slate-500 hover:text-blue-500 hover:bg-slate-100 py-2 px-4 transition duration-300 ease-out">Profile</a>
                        </li>
                        <li>
                            <a href="" class="block text-slate-500 hover:text-blue-500 hover:bg-slate-100 py-2 px-4 transition duration-300 ease-out">Dashboard</a>
                        </li>
                        <li>
                            <a
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="block text-slate-500 hover:text-blue-500 hover:bg-slate-100 py-2 px-4 transition duration-300 ease-out"
                            >
                                Log out
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            @else
            <div class="flex items-center gap-4">
                <a href="{{ route('login') }}" class="block text-slate-500 hover:text-blue-500 transition duration-300 ease-out">Log in</a>
                <a href="{{ route('register') }}" class="block text-slate-500 hover:text-blue-500 transition duration-300 ease-out">Register</a>
            </div>
            @endauth
            </div>
    </nav>
</header>
