<div>
    <div class="border-b border-b-slate-300 py-8">
        <div class="container max-w-4xl mx-auto py-4">
            <div class="grid grid-cols-3 gap-4">
                <a href="">
                    <x-dashboard-card>
                        @slot('count')
                            {{ auth()->user()->statuses->count() }}
                        @endslot
                        Statuses
                        @slot('icon')
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-card-heading" viewBox="0 0 16 16">
                            <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                            <path d="M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1z"/>
                        </svg>
                        @endslot
                    </x-dashboard-card>
                </a>

                <a href="{{ route('dashboard.follower') }}">
                    <x-dashboard-card>
                        @slot('count')
                            {{ auth()->user()->follower->count() }}
                        @endslot
                        Followers
                        @slot('icon')
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                            <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
                        </svg>
                        @endslot
                    </x-dashboard-card>
                </a>

                <a href="{{ route('dashboard.following') }}">
                    <x-dashboard-card>
                        @slot('count')
                            {{ auth()->user()->following->count() }}
                        @endslot
                        Followings
                        @slot('icon')
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                            <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                        </svg>
                        @endslot
                    </x-dashboard-card>
                </a>
            </div>
        </div>
    </div>

    <div class="container mx-auto py-4">
        @foreach ($statuses as $status)
        <div class="flex p-3 gap-3 border-b border-b-slate-300 justify-between">
            <div class="flex gap-3 w-full">
                <div class="flex-shrink-0">
                    <img src="http://www.gravatar.com/avatar/?d=mp" class="w-10 h-10 rounded-full" alt="{{ $status->slug }}">
                </div>
                <div class="w-full">
                    <div class="flex gap-1 items-center">
                        <h1 class="text-slate-600 font-semibold text-base">{{ $status->user->name }}</h1>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                        </svg>
                        <span class="text-slate-500 text-sm">{{ $status->created_at->diffForHumans() }}</span>
                    </div>
                    <div>
                        @if ($status_id === $status->id)
                            <form action="" wire:submit.prevent="updateStatus({{ $status->id }})">
                                <textarea
                                    class="w-full rounded-md border-slate-400 resize-none focus:border-slate-200 focus:ring-blue-500 focus:shadow-lg focus:shadow-blue-500/10 transition ease-out duration-300 placeholder:text-slate-400 text-base text-slate-500"
                                    wire:model.lazy="body"
                                    placeholder="What's in your mind..."
                                ></textarea>
                                <div class="text-end">
                                    <x-button-primary>Save</x-button-primary>
                                </div>
                            </form>
                        @else
                            <p class="text-slate-500 text-base">{!! $status->body !!} <a href="{{ route('status.show', $status->slug) }}" class="text-sm text-blue-500 hover:text-blue-600 transition ease-out duration-300">Show detail</a></p>
                        @endif
                    </div>
                    <div class="flex gap-8 items-center mt-4">
                        <a
                            href="{{ route('status.show', $status->slug) }}"
                            class="flex gap-1 items-center text-slate-500 hover:bg-blue-400 hover:text-white transition ease-out duration-300 p-2 rounded-full"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                            </svg>
                            <p>{{ count($status->comments) }}</p>
                        </a>
                        <button
                            wire:click="like({{ $status->id }})"
                            class="flex gap-1 items-center text-slate-500 hover:bg-rose-400 hover:text-white transition ease-out duration-300 p-2 rounded-full">
                            @if ($status->like)
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart-fill text-rose-500" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                </svg>
                                <p class="text-rose-500">{{ $status->totalLike() }}</p>
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                </svg>
                                <p>{{ $status->totalLike() }}</p>
                            @endif
                        </button>
                    </div>
                </div>
            </div>
            {{-- menu --}}
            @if ($status->user_id === auth()->user()->id)
                <div x-data="{open: false}" class="relative">
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
                                <button wire:click="editStatus({{ $status->id }})" @click="open = false" class="text-slate-500 hover:text-blue-500 hover:bg-slate-100 py-1 px-3 transition duration-300 ease-out w-full text-start text-sm">Edit</button>
                            </li>
                            <li>
                                <button wire:click="deleteStatus({{ $status->id }})" @click="open = false" class="text-rose-500 hover:text-blue-500 hover:bg-slate-100 py-1 px-3 transition duration-300 ease-out w-full text-start text-sm">Delete</button>
                            </li>
                        </ul>
                    </div>
                </div>
            @endif
        </div>
    @endforeach
    @if ($limit === count($statuses))
        <div class="text-center">
            <button wire:click="loadMore" class="text-blue-500 hover:text-blue-600 transition-all ease-out duration-300">Load more...</button>
        </div>
    @endif
    <div wire:loading wire:target="loadMore" class="text-center">
        Pease wait...
    </div>
    </div>
</div>
