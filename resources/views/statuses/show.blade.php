@extends('layouts.base')

@section('body')
<div class="container mx-auto px-16 py-4">
    <div class="flex gap-4 max-w-3xl border-b border-b-slate-300">
        <div class="flex-shrink-0">
            <img src="http://www.gravatar.com/avatar/?d=mp" class="w-14 h-14 rounded-full" alt="{{ $status->slug }}">
        </div>
        <div>
            <div class="flex items-center">
                <h1 class="text-slate-600 font-bold text-2xl">{{ $status->user->name }}</h1>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                </svg>
                <span class="text-slate-500 text-base">{{ $status->created_at->diffForHumans() }}</span>
            </div>
            <p class="text-slate-500 text-base mt-2">{{ $status->body }}</p>
            <livewire:status-like-comment :status="$status" />
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
