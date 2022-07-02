<div class="p-6 flex flex-col justify-center h-full">
    <div class="w-full max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
        <header class="px-5 py-4 border-b border-gray-100">
            <h2 class="font-semibold text-gray-800">{{ $title }}</h2>
        </header>
        <div class="p-3">
            {{ $slot }}
        </div>
    </div>
</div>
