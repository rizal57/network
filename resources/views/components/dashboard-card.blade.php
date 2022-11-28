<div class="p-4 flex justify-between rounded-md bg-white shadow-lg shadow-blue-500/20">
    <div>
        <h1 class="text-2xl font-semibold text-slate-600">
            {{ $count }}
        </h1>
        <p class="text-sm text-slate-500">
            {{ $slot }}
        </p>
    </div>
    <div class="text-slate-600">
        {{ $icon }}
    </div>
</div>
