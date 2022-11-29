<div>
    @foreach ($users as $user)
        <div class="bg-white shadow-md shadow-blue-500/10 py-2 px-3 rounded-md mb-3 overflow-hidden">
            <div class="flex gap-2 items-start">
                <div class="flex-shrink-0">
                    <img src="http://www.gravatar.com/avatar/?d=mp" class="w-9 h-9 rounded-full" alt="">
                </div>
                <div>
                    <div class="flex items-center gap-2 mb-1">
                        <a href="#" class="text-slate-600 font-semibold">{{ Str::limit($user->name, 15, '...') }}</a>
                        <span class="text-slate-600 text-sm">|</span>
                        <p class="text-slate-500">{{ $user->created_at->diffForHumans() }}</p>
                    </div>
                    <div>
                        <button wire:click="follow({{ $user }})" class="py-1 px-3 rounded-full @if (auth()->user()->following()->where('following_user_id', $user->id)->first()) bg-white text-blue-500 border border-blue-400 hover:bg-gray-100 @else bg-blue-500 text-white hover:bg-blue-600 @endif ease-out duration-300 shadow-lg shadow-blue-500/20">
                            @if (auth()->user()->following()->where('following_user_id', $user->id)->first())
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
                                <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm.256 7a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708Z"/>
                            </svg>
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
                                    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                                    <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                                </svg>
                            @endif
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
