<div>
    @foreach ($comments as $comment)
        <div class="border-b border-b-slate-300 py-4">
            <div class="flex gap-3 justify-between">
                <div class="flex gap-3 w-full">
                    <div class="flex-shrink-0">
                        <img src="http://www.gravatar.com/avatar/?d=mp" class="w-10 h-10 rounded-full" alt="">
                    </div>
                    <div class="w-full">
                        <div class="flex gap-1 items-center">
                            <h1 class="text-slate-600 font-semibold text-base">{{ $comment->user->name }}</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                            </svg>
                            <span class="text-slate-500 text-sm">{{ $comment->created_at->diffForHumans() }}</span>
                        </div>
                        <div class="w-full">
                            @if ($comment_id === $comment->id)
                            <form action="" wire:submit.prevent="updateComment({{ $comment->id }})">
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
                                <p class="text-slate-500 text-base">{!! $comment->body !!}</p>
                            @endif
                        </div>
                        <div class="flex gap-8 items-center mt-4">
                            {{-- <button class="flex gap-1 items-center text-slate-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-reply" viewBox="0 0 16 16">
                                    <path d="M6.598 5.013a.144.144 0 0 1 .202.134V6.3a.5.5 0 0 0 .5.5c.667 0 2.013.005 3.3.822.984.624 1.99 1.76 2.595 3.876-1.02-.983-2.185-1.516-3.205-1.799a8.74 8.74 0 0 0-1.921-.306 7.404 7.404 0 0 0-.798.008h-.013l-.005.001h-.001L7.3 9.9l-.05-.498a.5.5 0 0 0-.45.498v1.153c0 .108-.11.176-.202.134L2.614 8.254a.503.503 0 0 0-.042-.028.147.147 0 0 1 0-.252.499.499 0 0 0 .042-.028l3.984-2.933zM7.8 10.386c.068 0 .143.003.223.006.434.02 1.034.086 1.7.271 1.326.368 2.896 1.202 3.94 3.08a.5.5 0 0 0 .933-.305c-.464-3.71-1.886-5.662-3.46-6.66-1.245-.79-2.527-.942-3.336-.971v-.66a1.144 1.144 0 0 0-1.767-.96l-3.994 2.94a1.147 1.147 0 0 0 0 1.946l3.994 2.94a1.144 1.144 0 0 0 1.767-.96v-.667z"/>
                                </svg>
                                <p>100</p>
                            </button> --}}
                            <button wire:click="likeComment({{ $comment->id }})" class="flex gap-1 items-center text-slate-500">
                                @if ($comment->like)
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart-fill text-rose-500" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                    <p class="text-rose-500">{{ $comment->totalLike() }}</p>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                    </svg>
                                    <p>{{ $comment->totalLike() }}</p>
                                @endif
                            </button>
                        </div>
                    </div>
                </div>
                {{-- menu --}}
                @if ($comment->user_id === auth()->user()->id)
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
                                    <button wire:click="editComment({{ $comment->id }})" @click="open = false" class="text-slate-500 hover:text-blue-500 hover:bg-slate-100 py-1 px-3 transition duration-300 ease-out w-full text-start text-sm">Edit</button>
                                </li>
                                <li>
                                    <button wire:click="deleteComment({{ $comment->id }})" @click="open = false" class="text-rose-500 hover:text-blue-500 hover:bg-slate-100 py-1 px-3 transition duration-300 ease-out w-full text-start text-sm">Delete</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endif
            </div>
            {{-- replay --}}
            {{-- <div class="border-t mt-3 pl-16 py-4">
                <div class="flex gap-3 w-full">
                    <div class="flex-shrink-0">
                        <img src="http://www.gravatar.com/avatar/?d=mp" class="w-10 h-10 rounded-full" alt="">
                    </div>
                    <div>
                        <div class="flex gap-1 items-center">
                            <h1 class="text-slate-600 font-semibold text-base">{{ $comment->user->name }}</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                            </svg>
                            <span class="text-slate-500 text-sm">{{ $comment->created_at->diffForHumans() }}</span>
                        </div>
                        <div>
                            <p class="text-slate-500 text-base">{!! $comment->body !!}</p>
                        </div>
                        <div class="flex gap-8 items-center mt-4">
                            <button class="flex gap-1 items-center text-slate-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                </svg>
                                <p>9999</p>
                            </button>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    @endforeach
</div>
