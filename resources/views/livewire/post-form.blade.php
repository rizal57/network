<div>
    <div class="flex gap-3 border-b pb-8 border-b-slate-300">
        <div class="flex-shrink-0">
            <img src="http://www.gravatar.com/avatar/?d=mp" class="w-10 h-10 rounded-full" alt="">
        </div>
        <div class="w-full">
            <div class="mb-2">
                <h1 class="text-slate-500 font-semibold text-base">{{ auth()->user()->name }}</h1>
            </div>
            <div>
                <form action="" wire:submit.prevent="store">
                    <div>
                        <textarea
                            class="w-full rounded-md border-slate-400 resize-none focus:border-slate-200 focus:ring-blue-500 focus:shadow-lg focus:shadow-blue-500/10 transition ease-out duration-300 placeholder:text-slate-400 text-base text-slate-500"
                            wire:model.lazy="body"
                            placeholder="What is your mind..."
                        ></textarea>
                        <div class="text-end">
                            <x-button-primary>Post</x-button-primary>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
