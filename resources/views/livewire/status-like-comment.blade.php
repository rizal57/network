<div>
    <div class="py-3 mt-2 flex items-center gap-8">
        <a href="#"
            class="flex gap-2 items-center hover:underline transition ease-out duration-300 p-2 rounded-full"
        >
            <p class="text-slate-700 font-semibold">{{ count($status->comments) }} <span class="font-normal text-slate-500">Comments</span></p>
        </a>
        <a href="#"
            class="flex gap-2 items-center hover:underline transition ease-out duration-300 p-2 rounded-full"
        >
            <p class="text-slate-700 font-semibold">{{ $status->totalLike() }} <span class="font-normal text-slate-500">Likes</span></p>
        </a>
    </div>
</div>
