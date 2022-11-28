@extends('layouts.base')

@section('body')
<div class="container mx-auto px-16 py-4">
    <div class="flex gap-4 max-w-3xl border-b border-b-slate-300">
        <div class="flex-shrink-0">
            <img src="http://www.gravatar.com/avatar/?d=mp" class="w-14 h-14 rounded-full" alt="{{ $status->slug }}">
        </div>
        <div>
            <div class="flex items-center">
                <h1 class="text-slate-600 font-bold text-2xl">{{ auth()->user()->name }}</h1>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                </svg>
                <span class="text-slate-500 text-base">{{ $status->created_at->diffForHumans() }}</span>
            </div>
            <p class="text-slate-500 text-base mt-2">{{ $status->body }}</p>
            <div class="py-3 mt-2 flex items-center gap-8">
                <button
                    class="flex gap-2 items-center text-slate-500 hover:bg-blue-400 hover:text-white transition ease-out duration-300 p-2 rounded-full"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                        <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                    </svg>
                    <p>{{ count($status->comments) }}</p>
                </button>
                <button
                    class="flex gap-2 items-center text-slate-500 hover:bg-rose-400 hover:text-white transition ease-out duration-300 p-2 rounded-full"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                    </svg>
                    <p>9999</p>
                </button>
            </div>
        </div>
    </div>
    <div class="mt-4">
        <livewire:comment-form :status="$status"/>
    </div>
    {{-- comment --}}
    <div class="mt-4 max-w-3xl border-t border-t-slate-300 pt-4">
        <livewire:comments :status="$status"/>
    </div>
</div>
@endsection
