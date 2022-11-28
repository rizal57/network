<header class="bg-white border-b h-16 flex items-center">
    <nav class="container mx-auto flex items-center justify-between">
        <div class="flex items-center gap-2">
            <div class="nav-brand mr-4 group">
                <a
                    href="{{ route('home') }}"
                    class="text-blue-500 hover:text-blue-600 group-hover:-rotate-6 transition ease-out duration-300 block font-bold"
                >
                    NETWORK
                </a>
            </div>
            {{-- navigation --}}
            <div>
                <a
                    href="{{ route('timeline') }}"
                    class="{{ Request::is('timeline') ? 'before:block before:absolute before:-inset-1 before:-skew-y-3 before:bg-blue-500 text-white hover:text-white' : '' }}  relative inline-block transition ease-out duration-300 text-slate-600 hover:text-blue-500"
                >
                    <span class="relative">
                        Timeline
                    </span>
                </a>
            </div>
        </div>
        <div>
            @auth
            <div x-data="{open: false}" class="relative">
                <div
                    @click="open = ! open"
                    class="border border-slate-300 py-2 px-3 rounded-md flex items-center gap-2 overflow-hidden cursor-pointer"
                >
                <div>
                    <img src="http://www.gravatar.com/avatar/?d=mp" class="w-6 h-6 rounded-full" alt="">
                </div>
                <div>
                    <h1 class="text-slate-500 text-base">{{ Str::limit(auth()->user()->name, 10, '...') }}</h1>
                </div>
                <div class="text-slate-500">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </div>
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
                    class="absolute bg-white w-52 mt-2 shadow-md rounded-md top-full right-0 border">
                    <ul>
                        <li>
                            <a href="{{ route('profile.index') }}" class="block text-slate-500 hover:text-blue-500 hover:bg-slate-100 py-2 px-4 transition duration-300 ease-out">Profile</a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard') }}" class="block text-slate-500 hover:text-blue-500 hover:bg-slate-100 py-2 px-4 transition duration-300 ease-out">Dashboard</a>
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
