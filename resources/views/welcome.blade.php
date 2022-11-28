@extends('layouts.app')

@section('content')
<div class="mx-auto px-20">
    <div class="min-h-screen py-28 bg-white sm:px-6 lg:px-8">
        <h1 class="text-6xl font-bold text-slate-600">Perluas <span class="before:block before:absolute before:-inset-1 before:-skew-y-3 before:bg-blue-500 relative inline-block"><span class="relative text-white font-bold">NETWORK</span></span> Anda</h1>

        <p class="text-xl max-w-lg text-slate-500 mt-8 mb-12">Perluas pertemanan Anda dan temukan berbagai teman dengan network</p>
        <a
            href="{{ route('timeline') }}"
            class="bg-blue-500 shadow-lg shadow-blue-500/30 active:bg-blue-700 text-white font-semibold py-2 px-4 rounded-full text-sm hover:bg-blue-600 transition ease-out duration-300"
        >
            Let's Go
        </a>
    </div>
</div>
@endsection
