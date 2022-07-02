<header  class="sticky top-0 bg-white border-b border-slate-200 z-30">
    <nav x-data="{ open: false }" class="px-4 sm:px-6 lg:px-8">
        <!-- Primary Navigation Menu -->
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div>
        </div>
                <div class="flex">
                    <!-- Hamburger button -->
                    <button
                        class="text-slate-500 hover:text-slate-600 lg:hidden"
                        @click.stop="sidebarOpen = !sidebarOpen"
                        aria-controls="sidebar"
                        :aria-expanded="sidebarOpen">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <rect x="4" y="5" width="16" height="2" />
                            <rect x="4" y="11" width="16" height="2" />
                            <rect x="4" y="17" width="16" height="2" />
                        </svg>
                    </button>
                </div>
                </div>
                <div class="flex items-center ml-6">
                    <!-- Settings Dropdown -->
                    <div class="lex items-center space-x-3x flex">
                          <!-- Search button -->
                    <div x-data="{ searchOpen: false }">
                        <!-- Button -->
                        <button
                            class="w-8 h-8 flex items-center justify-center bg-slate-100 hover:bg-slate-200 transition duration-150 rounded-full"
                            :class="{ 'bg-slate-200': searchOpen }"
                            @click.prevent="searchOpen = true;if (searchOpen) $nextTick(()=>{$refs.searchInput.focus()});"
                            aria-controls="search-modal"
                        >
                            <span class="sr-only">Search</span>
                            <svg class="w-4 h-4" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path class="fill-current text-slate-500" d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z" />
                                <path class="fill-current text-slate-400" d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z" />
                            </svg>
                        </button>
                        <!-- Modal backdrop -->
                        <div
                            class="fixed inset-0 bg-slate-900 bg-opacity-30 z-50 transition-opacity"
                            x-show="searchOpen"
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0"
                            x-transition:enter-end="opacity-100"
                            x-transition:leave="transition ease-out duration-100"
                            x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0"
                            aria-hidden="true"
                            x-cloak
                            ></div>
                        <!-- Modal dialog -->
                        <div
                            id="search-modal"
                            class="fixed inset-0 z-50 overflow-hidden flex items-start top-20 mb-4 justify-center transform px-4 sm:px-6"
                            role="dialog"
                            aria-modal="true"
                            x-show="searchOpen"
                            x-transition:enter="transition ease-in-out duration-200"
                            x-transition:enter-start="opacity-0 translate-y-4"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in-out duration-200"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-4"
                            x-cloak
                        >
                            <div
                                class="bg-white overflow-auto max-w-2xl w-full max-h-full rounded shadow-lg"
                                @click.outside="searchOpen = false"
                                @keydown.escape.window="searchOpen = false"
                            >
                                <!-- Search form -->
                                <form class="border-b border-slate-200">
                                    <div class="relative">
                                        <label for="modal-search" class="sr-only">Search</label>
                                        <input id="modal-search" class="w-full border-0 focus:ring-transparent placeholder-slate-400 appearance-none py-3 pl-10 pr-4" type="search" placeholder="Search Anything…" x-ref="searchInput" />
                                        <button class="absolute inset-0 right-auto group" type="submit" aria-label="Search">
                                            <svg class="w-4 h-4 shrink-0 fill-current text-slate-400 group-hover:text-slate-500 ml-4 mr-2" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z" />
                                                <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z" />
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                                <div class="py-4 px-2">
                                    <!-- Recent searches -->
                                    <div class="mb-3 last:mb-0">
                                        <div class="text-xs font-semibold text-slate-400 uppercase px-2 mb-2">Recent searches</div>
                                        <ul class="text-sm">
                                            <li>
                                                <a class="flex items-center p-2 text-slate-800 hover:text-white hover:bg-indigo-500 rounded group" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                    <svg class="w-4 h-4 fill-current text-slate-400 group-hover:text-white group-hover:text-opacity-50 shrink-0 mr-3" viewBox="0 0 16 16">
                                                        <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z" />
                                                    </svg>
                                                    <span>Form Builder - 23 hours on-demand video</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex items-center p-2 text-slate-800 hover:text-white hover:bg-indigo-500 rounded group" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                    <svg class="w-4 h-4 fill-current text-slate-400 group-hover:text-white group-hover:text-opacity-50 shrink-0 mr-3" viewBox="0 0 16 16">
                                                        <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z" />
                                                    </svg>
                                                    <span>Access Mosaic on mobile and TV</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex items-center p-2 text-slate-800 hover:text-white hover:bg-indigo-500 rounded group" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                    <svg class="w-4 h-4 fill-current text-slate-400 group-hover:text-white group-hover:text-opacity-50 shrink-0 mr-3" viewBox="0 0 16 16">
                                                        <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z" />
                                                    </svg>
                                                    <span>Product Update - Q4 2021</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex items-center p-2 text-slate-800 hover:text-white hover:bg-indigo-500 rounded group" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                    <svg class="w-4 h-4 fill-current text-slate-400 group-hover:text-white group-hover:text-opacity-50 shrink-0 mr-3" viewBox="0 0 16 16">
                                                        <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z" />
                                                    </svg>
                                                    <span>Master Digital Marketing Strategy course</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex items-center p-2 text-slate-800 hover:text-white hover:bg-indigo-500 rounded group" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                    <svg class="w-4 h-4 fill-current text-slate-400 group-hover:text-white group-hover:text-opacity-50 shrink-0 mr-3" viewBox="0 0 16 16">
                                                        <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z" />
                                                    </svg>
                                                    <span>Dedicated forms for products</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex items-center p-2 text-slate-800 hover:text-white hover:bg-indigo-500 rounded group" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                    <svg class="w-4 h-4 fill-current text-slate-400 group-hover:text-white group-hover:text-opacity-50 shrink-0 mr-3" viewBox="0 0 16 16">
                                                        <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z" />
                                                    </svg>
                                                    <span>Product Update - Q4 2021</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Recent pages -->
                                    <div class="mb-3 last:mb-0">
                                        <div class="text-xs font-semibold text-slate-400 uppercase px-2 mb-2">Recent pages</div>
                                        <ul class="text-sm">
                                            <li>
                                                <a class="flex items-center p-2 text-slate-800 hover:text-white hover:bg-indigo-500 rounded group" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                    <svg class="w-4 h-4 fill-current text-slate-400 group-hover:text-white group-hover:text-opacity-50 shrink-0 mr-3" viewBox="0 0 16 16">
                                                        <path d="M14 0H2c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h8l5-5V1c0-.6-.4-1-1-1zM3 2h10v8H9v4H3V2z" />
                                                    </svg>
                                                    <span><span class="font-medium text-slate-800 group-hover:text-white">Messages</span> - Conversation / … / Mike Mills</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex items-center p-2 text-slate-800 hover:text-white hover:bg-indigo-500 rounded group" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                    <svg class="w-4 h-4 fill-current text-slate-400 group-hover:text-white group-hover:text-opacity-50 shrink-0 mr-3" viewBox="0 0 16 16">
                                                        <path d="M14 0H2c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h8l5-5V1c0-.6-.4-1-1-1zM3 2h10v8H9v4H3V2z" />
                                                    </svg>
                                                    <span><span class="font-medium text-slate-800 group-hover:text-white">Messages</span> - Conversation / … / Eva Patrick</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- Notifications button -->
                     <div class="relative inline-flex" x-data="{ open: false }">
                        <button
                            class="w-8 h-8 flex items-center justify-center bg-slate-100 hover:bg-slate-200 transition duration-150 rounded-full"
                            :class="{ 'bg-slate-200': open }"
                            aria-haspopup="true"
                            @click.prevent="open = !open"
                            :aria-expanded="open"
                        >
                            <span class="sr-only">Notifications</span>
                            <svg class="w-4 h-4" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path class="fill-current text-slate-500" d="M6.5 0C2.91 0 0 2.462 0 5.5c0 1.075.37 2.074 1 2.922V12l2.699-1.542A7.454 7.454 0 006.5 11c3.59 0 6.5-2.462 6.5-5.5S10.09 0 6.5 0z" />
                                <path class="fill-current text-slate-400" d="M16 9.5c0-.987-.429-1.897-1.147-2.639C14.124 10.348 10.66 13 6.5 13c-.103 0-.202-.018-.305-.021C7.231 13.617 8.556 14 10 14c.449 0 .886-.04 1.307-.11L15 16v-4h-.012C15.627 11.285 16 10.425 16 9.5z" />
                            </svg>
                            <div class="absolute top-0 right-0 w-2.5 h-2.5 bg-rose-500 border-2 border-white rounded-full"></div>
                        </button>
                        <div
                            class="origin-top-right z-10 absolute top-full right-0 -mr-48 sm:mr-0 min-w-80 bg-white border border-slate-200 py-1.5 rounded shadow-lg overflow-hidden mt-1"
                            @click.outside="open = false"
                            @keydown.escape.window="open = false"
                            x-show="open"
                            x-transition:enter="transition ease-out duration-200 transform"
                            x-transition:enter-start="opacity-0 -translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-out duration-200"
                            x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0"
                            x-cloak
                        >
                            <div class="text-xs font-semibold text-slate-400 uppercase pt-1.5 pb-2 px-4">Notifications</div>
                            <ul>
                                <li class="border-b border-slate-200 last:border-0">
                                    <a class="block py-2 px-4 hover:bg-slate-50" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                        <span class="block text-sm mb-2">📣 <span class="font-medium text-slate-800">Edit your information in a swipe</span> Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</span>
                                        <span class="block text-xs font-medium text-slate-400">Feb 12, 2021</span>
                                    </a>
                                </li>
                                <li class="border-b border-slate-200 last:border-0">
                                    <a class="block py-2 px-4 hover:bg-slate-50" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                        <span class="block text-sm mb-2">📣 <span class="font-medium text-slate-800">Edit your information in a swipe</span> Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</span>
                                        <span class="block text-xs font-medium text-slate-400">Feb 9, 2021</span>
                                    </a>
                                </li>
                                <li class="border-b border-slate-200 last:border-0">
                                    <a class="block py-2 px-4 hover:bg-slate-50" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                        <span class="block text-sm mb-2">🚀<span class="font-medium text-slate-800">Say goodbye to paper receipts!</span> Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</span>
                                        <span class="block text-xs font-medium text-slate-400">Jan 24, 2020</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                                         <hr class="w-px h-6 bg-slate-200" />
                        <x-jet-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                        <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                    </button>
                                @else
                                    <span class="inline-flex rounded-md">
                                        <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                            {{ Auth::user()->name }}
                                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </span>
                                @endif
                            </x-slot>
                            <x-slot name="content">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Manage Account') }}
                                </div>
                                <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                    {{ __('Profile') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('person.index') }}">
                                    Perfil profesional
                                </x-jet-dropdown-link>
                                {{-- <x-jet-dropdown-link href="{{ route('company.index') }}">
                                    Perfil Empresa
                                </x-jet-dropdown-link> --}}
                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                        {{ __('API Tokens') }}
                                    </x-jet-dropdown-link>
                                @endif
                                <div class="border-t border-gray-100"></div>
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf
                                    <x-jet-dropdown-link href="{{ route('logout') }}"
                                             @click.prevent="$root.submit();">
                                        {{ __('Log Out') }}
                                    </x-jet-dropdown-link>
                                </form>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                </div>
            </div>
        </div>
        <!-- Responsive Navigation Menu -->
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-jet-responsive-nav-link>
            </div>
            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="flex items-center px-4">
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <div class="shrink-0 mr-3">
                            <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        </div>
                    @endif
                    <div>
                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    </div>
                </div>
                <div class="mt-3 space-y-1">
                    <!-- Account Management -->
                    <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                        {{ __('Profile') }}
                    </x-jet-responsive-nav-link>
                    <x-jet-responsive-nav-link href="{{ route('person.index') }}" :active="request()->routeIs('profile.show')">
                        Perfil profesional
                    </x-jet-responsive-nav-link>
                    {{-- <x-jet-responsive-nav-link href="{{ route('company.index') }}" :active="request()->routeIs('profile.show')">
                        Perfil empresa
                    </x-jet-responsive-nav-link> --}}
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf
                        <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                       @click.prevent="$root.submit();">
                            {{ __('Log Out') }}
                        </x-jet-responsive-nav-link>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</header>
