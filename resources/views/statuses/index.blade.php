@extends('layouts.base')

@section('body')
    <div>
        <div class="container mx-auto py-4 px-16">
            <div class="grid grid-cols-12 gap-8">
                <div class="col-span-8">
                    <livewire:post-form />

                    <livewire:statuses />
                </div>
                <div class="col-span-4">
                    <div class="border border-slate-300 py-2 px-4 rounded-md">
                        <h1 class="text-slate-500 font-semibold text-base mb-3">Recently Join</h1>
                        <livewire:users />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
