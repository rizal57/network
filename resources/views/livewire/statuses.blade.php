<div class="mt-8 rounded-md space-y-4">
    @foreach ($statuses as $status)
        <div class="flex p-3 gap-3 border-b border-b-slate-300 relative">
            {{-- menu --}}
            <div x-data="{open: false}" class="absolute top-4 right-1">
                <button @click="open = ! open">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                    </svg>
                </button>
                {{-- dropdown --}}
                <div x-show="open"
                    @click.away="open = false"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-90"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-90"
                    class="absolute bg-white shadow-md rounded-md top-0 right-4 border">
                    <ul>
                        <li>
                            <button class="text-slate-500 hover:text-blue-500 hover:bg-slate-100 py-1 px-3 transition duration-300 ease-out w-full text-start text-sm">Edit</button>
                        </li>
                        <li>
                            <button class="text-rose-500 hover:text-blue-500 hover:bg-slate-100 py-1 px-3 transition duration-300 ease-out w-full text-start text-sm">Delete</button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="flex-shrink-0">
                <img src="http://www.gravatar.com/avatar/?d=mp" class="w-10 h-10 rounded-full" alt="">
            </div>
            <div>
                <h1 class="text-slate-600 font-semibold text-base">{{ auth()->user()->name }}</h1>
                <p class="text-slate-500 text-base">{!! $status->body !!}</p>
                <div class="flex gap-8 items-center mt-4">
                    <button class="flex gap-1 items-center text-slate-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                            <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                        </svg>
                        <p>10000</p>
                    </button>
                    <button class="flex gap-1 items-center text-slate-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                        </svg>
                        <p>9999</p>
                    </button>
                </div>
            </div>
        </div>
    @endforeach
</div>
