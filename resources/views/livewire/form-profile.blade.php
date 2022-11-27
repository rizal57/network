<div>
    <div class="border rounded-md overflow-hidden">
        @if (session()->has('success'))
            <div class="alert p-4 bg-emerald-400 shadow-lg shadow-emerald-400/40 text-slate-50 mx-auto max-w-[50%] my-3 font-semibold rounded-md flex justify-between">
                {{ session('success') }}
            </div>
        @endif
        <form action="" wire:submit.prevent="updateProfile({{ auth()->user()->id }})">
            <div class="grid grid-cols-2 gap-4 p-4">
                <div class="mb-3">
                    <label for="nama" class="block text-slate-600 capitalize font-semibold">nama</label>
                    <input type="text" class="w-full border-slate-300 transition duration-300 ease-out text-slate-600 placeholder:text-slate-400 focus:border-slate-300 focus:ring-blue-400 focus:shadow-blue-500/20 focus:shadow-lg rounded-md" placeholder="Your Name..." id="nama" wire:model.lazy="name" >
                    @error('name')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="block text-slate-600 capitalize font-semibold">email</label>
                    <input type="email" class="w-full border-slate-300 transition duration-300 ease-out text-slate-600 placeholder:text-slate-400 focus:border-slate-300 focus:ring-blue-400 focus:shadow-blue-500/20 focus:shadow-lg rounded-md" placeholder="Your Email..." id="email" wire:model.lazy="email" >
                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="bg-slate-100 p-4">
                <button class="py-2 px-4 text-sm rounded-full bg-slate-700 shadow-lg shadow-slate-700/20 hover:bg-slate-800 transition duration-300 active:bg-slate-900 text-slate-50 font-semibold">Update</button>
            </div>
        </form>
    </div>
</div>
