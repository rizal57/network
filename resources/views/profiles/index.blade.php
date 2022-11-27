@extends('layouts.base')

@section('body')
    <div class="container mx-auto py-28 ">
        <div>
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
        </div>
    </div>
@endsection

