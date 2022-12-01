@extends('layouts.base')

@section('body')
    <div class="container mx-auto py-4">
        <x-back />
        <div>
            <h1 class="text-slate-700 font-bold text-2xl mb-3">Perbarui Informasi Profile</h1>
        </div>
            <livewire:form-profile />
    </div>
@endsection
