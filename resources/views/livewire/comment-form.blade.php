<div>
@auth
    <form action="" wire:submit.prevent="store">
        <div class="max-w-3xl flex items-center justify-between gap-3">
            <div class="flex-shrink-0">
                <img src="http://www.gravatar.com/avatar/?d=mp" class="w-10 h-10 rounded-full" alt="">
            </div>
            <textarea
                class="w-full rounded-md border-slate-400 resize-none focus:border-slate-200 focus:ring-blue-500 focus:shadow-lg focus:shadow-blue-500/10 transition ease-out duration-300 placeholder:text-slate-400 text-base text-slate-500"
                wire:model.lazy="body"
                placeholder="What's your comment..."
            ></textarea>
            <div class="text-end">
                <x-button-primary>Post</x-button-primary>
            </div>
        </div>
    </form>
@endauth
</div>
