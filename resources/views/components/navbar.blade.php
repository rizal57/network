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
            <div class="flex items-center gap-3">
                <a
                    href="{{ route('home') }}"
                    class="{{ Request::is('/') ? 'before:block before:absolute before:-inset-1 before:-skew-y-3 before:bg-blue-500 text-white hover:text-white' : 'hover:text-blue-500' }}  relative inline-block transition ease-out duration-300 text-slate-600"
                >
                    <span class="relative">
                        Beranda
                    </span>
                </a>
                <a
                    href="{{ route('status.index') }}"
                    class="{{ Request::is('status*') ? 'before:block before:absolute before:-inset-1 before:-skew-y-3 before:bg-blue-500 text-white hover:text-white' : 'hover:text-blue-500' }}  relative inline-block transition ease-out duration-300 text-slate-600"
                >
                    <span class="relative">
                        Status
                    </span>
                </a>
                <a
                    href="{{ route('explore.users') }}"
                    class="{{ Request::is('explore-users*') ? 'before:block before:absolute before:-inset-1 before:-skew-y-3 before:bg-blue-500 text-white hover:text-white' : 'hover:text-blue-500' }}  relative inline-block transition ease-out duration-300 text-slate-600"
                >
                    <span class="relative">
                        Explore Users
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
                    class="absolute bg-white w-52 mt-2 shadow-md rounded-md top-full right-0 border z-50">
                    <ul>
                        <li>
                            <a href="{{ route('profile.index') }}" class="block text-slate-500 hover:text-blue-500 hover:bg-slate-100 py-2 px-4 transition duration-300 ease-out"
                            >
                                <span class="flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                    </svg>
                                    <p>Profile</p>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard') }}" class="block text-slate-500 hover:text-blue-500 hover:bg-slate-100 py-2 px-4 transition duration-300 ease-out"
                            >
                            <span class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
                                    <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                                    <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
                                </svg>
                                <p>Dashboard</p>
                            </span>
                            </a>
                        </li>
                        <li>
                            <a
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="block text-slate-500 hover:text-blue-500 hover:bg-slate-100 py-2 px-4 transition duration-300 ease-out"
                            >
                                <span class="flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                                    </svg>
                                    <p>Log out</p>
                                </span>
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
