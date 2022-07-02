<nav x-data="{ open: false }">
    <div>
        <div class="hidden sm:flex justify-center flex-wrap">
            <x-jet-nav-link href="{{ route('person.index') }}" :active="request()->routeIs('person.*')">
                Perfil profesional
            </x-nav-link>
            <x-jet-nav-link href="{{ route('curriculum.index') }}" :active="request()->routeIs('curriculum.*')">
                Hojas de vida
            </x-nav-link>
            <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                Postulaciones laborales
            </x-nav-link>
            <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                Subscripciones y servicios
            </x-nav-link>
        </div>

        <div class="-mr-2 flex items-center sm:hidden">
            <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>
    <div :class="{'block': open, 'hidden': !open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="{{ route('person.index') }}" :active="request()->routeIs('person.*')">
                Perfil profesional
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="{{ route('curriculum.index') }}" :active="request()->routeIs('curriculum.*')">
                Hojas de vida
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                Postulaciones laborales
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                Subscripciones y servicios
            </x-jet-responsive-nav-link>
        </div>
    </div>
</nav>
