@extends('layouts.app')

@section('content')
<div class="mx-auto px-20">
    <div class="min-h-screen py-28 bg-white sm:px-6 lg:px-8">
        <h1 class="text-6xl font-bold text-slate-600">Perluas <span class="before:block before:absolute before:-inset-1 before:-skew-y-3 before:bg-blue-500 relative inline-block"><span class="relative text-white font-bold">NETWORK</span></span> Anda</h1>

        <p class="text-xl max-w-lg text-slate-500 mt-8 mb-12">Perluas pertemanan Anda dan temukan berbagai teman dengan network</p>
        <a
            href="{{ route('status.index') }}"
            class="group inline-block bg-blue-500 shadow-lg shadow-blue-500/30 active:bg-blue-700 text-white font-semibold py-2 px-4 rounded-full text-sm hover:bg-blue-600 transition ease-out duration-300"
        >
        <span class="flex gap-1 items-center">
            <p>Let's Go</p>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short group-hover:translate-x-1 transition-all ease-in-out duration-300" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
            </svg>
        </span>
        </a>
    </div>
</div>
@endsection
