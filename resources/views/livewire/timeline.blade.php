<div>
    <div class="container mx-auto py-4 px-16">
        <div class="grid grid-cols-12 gap-8">
            <div class="col-span-8">
                <div class="flex gap-3">
                    <div>
                        <img src="http://www.gravatar.com/avatar/?d=mp" class="w-10 h-10 rounded-full" alt="">
                    </div>
                    <div class="w-full">
                        <div class="mb-2">
                            <h1 class="text-slate-500 font-semibold text-base">{{ auth()->user()->name }}</h1>
                        </div>
                        <form action="">
                            <div>
                                <textarea
                                    class="w-full rounded-md border-slate-300 resize-none focus:border-slate-200 focus:ring-blue-500 focus:shadow-lg focus:shadow-blue-500/10 transition ease-out duration-300" name="" id=""
                                ></textarea>
                                <div class="text-end">
                                    <x-button-primary>Post</x-button-primary>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div>
                    <div>
                        <img src="http://www.gravatar.com/avatar/?d=mp" class="w-10 h-10 rounded-full" alt="">
                    </div>
                </div>
            </div>
            <div class="col-span-4">
                <h1>recently join</h1>
            </div>
        </div>
    </div>
</div>
