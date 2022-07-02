<div class="flex items-start mb-4 last:mb-0">
    <img class="rounded-full mr-4" src="../images/user-40-12.jpg" width="40" height="40" alt="User 02" />
    <div>
        <div class="text-sm bg-indigo-500 text-white p-3 rounded-lg rounded-tl-none border border-transparent shadow-md mb-1">
            {{$slot}}
        </div>
        <div class="flex items-center justify-between">
            <div class="text-xs text-slate-500 font-medium">{{$time}}</div>
            <svg class="w-5 h-3 shrink-0 fill-current text-emerald-500"  viewBox="0 0 20 12">
                <path d="M10.402 6.988l1.586 1.586L18.28 2.28a1 1 0 011.414 1.414l-7 7a1 1 0 01-1.414 0L8.988 8.402l-2.293 2.293a1 1 0 01-1.414 0l-3-3A1 1 0 013.695 6.28l2.293 2.293L12.28 2.28a1 1 0 011.414 1.414l-3.293 3.293z" />
            </svg>
        </div>
    </div>
</div>