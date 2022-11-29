@extends('layouts.base')

@section('body')
    <div class="container mx-auto py-28 ">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-4">
                <div class="w-20 h-20 rounded-full overflow-hidden bg-cover object-cover">
                    <img src="http://www.gravatar.com/avatar/?d=mp" class="w-full object-cover" alt="">
                </div>
                <div>
                    <h1 class="text-slate-800 font-bold text-2xl">{{ auth()->user()->name }}</h1>
                    <p class="text-sm text-slate-500">Bergabung pada {{ auth()->user()->created_at->diffForhumans() }}</p>
                    <div class="mt-4">
                        <a href="{{ route('profile.edit') }}" class="bg-blue-500 shadow-lg shadow-blue-500/30 active:bg-blue-700 text-white font-semibold py-2 px-4 rounded-full text-sm hover:bg-blue-600 transition ease-out duration-300">Edit Profile</a>
                    </div>
                </div>
            </div>

            <div">
                <div class="text-center px-4 py-8 lg:w-40 rounded-md shadow-lg shadow-blue-500/40 bg-blue-500/90 text-white flex flex-col items-center">
                    <div class="mb-10 p-4 rounded-full bg-white text-blue-500 flex items-center justify-center scale-90 drop-shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chat-left-dots" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                        </svg>
                    </div>

                    <div>
                        <span class="text-4xl font-bold text-blue-50 drop-shadow-md">{{ auth()->user()->comments()->count() }}</span>
                        <p class="text-base text-slate-100">Komentar</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

