<div>
    <!-- Sidebar backdrop (mobile only) -->
    <div
        class="fixed inset-0 bg-slate-900 bg-opacity-30 z-40 lg:hidden lg:z-auto transition-opacity duration-200"
        :class="sidebarOpen ? 'opacity-100' : 'opacity-0 pointer-events-none'"
        aria-hidden="true"
        x-cloak
    ></div>
    
    <!-- Sidebar -->
    <div
        id="sidebar"
        class="flex flex-col absolute z-40 left-0 top-0 lg:static lg:left-auto lg:top-auto lg:translate-x-0 transform h-screen overflow-y-scroll lg:overflow-y-auto no-scrollbar w-64 lg:w-20 lg:sidebar-expanded:!w-64 2xl:!w-64 shrink-0 bg-slate-800 p-4 transition-all duration-200 ease-in-out"
        :class="sidebarOpen ? 'translate-x-0' : '-translate-x-64'"
        @click.outside="sidebarOpen = false"
        @keydown.escape.window="sidebarOpen = false"
        x-cloak="lg" >

        <!-- Sidebar header -->
        <div class="flex justify-between mb-10 pr-3 sm:px-2">
            <!-- Close button -->
            <button class="lg:hidden text-slate-500 hover:text-slate-400" @click.stop="sidebarOpen = !sidebarOpen" aria-controls="sidebar" :aria-expanded="sidebarOpen">
                <span class="sr-only">Close sidebar</span>
                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z" />
                </svg>
            </button>
            <!-- Logo -->
            <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                    <img class="w-10 rounded-full" src="{{URL::asset('imagenes/logoChance.png')}}">
                    </a>
            </div>
        </div>

        <!-- Links -->
        <div class="space-y-8">
            <!-- Pages group -->
            <div>
                <h3 class="text-xs uppercase text-slate-500 font-semibold pl-3">
                    <span class="hidden lg:block lg:sidebar-expanded:hidden 2xl:hidden text-center w-6" aria-hidden="true">•••</span>
                    <span class="lg:hidden lg:sidebar-expanded:block 2xl:block">Pages</span>
                </h3>
                <ul class="mt-3">
                     <!-- Messages -->
                     <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 ">
                         <a href="#">
                            <div class="flex items-center justify-between">
                                <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Chats</span>
                            </div>
                         </a>
                     </li>
                     <li  id="message" class="px-3 py-2 rounded-sm mb-0.5 last:mb-0" :class="page === 'messages' && 'bg-slate-900'">
                        <a class="block text-slate-200 hover:text-white truncate transition duration-150" :class="page === 'messages' && 'hover:text-slate-200'" href="#cont-message">
                            <div class="flex items-center justify-between">
                                <div class="grow flex items-center">
                                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                        <path class="fill-current text-slate-600" :class="page === 'messages' && 'text-indigo-500'" d="M14.5 7c4.695 0 8.5 3.184 8.5 7.111 0 1.597-.638 3.067-1.7 4.253V23l-4.108-2.148a10 10 0 01-2.692.37c-4.695 0-8.5-3.184-8.5-7.11C6 10.183 9.805 7 14.5 7z" />
                                        <path class="fill-current text-slate-400" :class="page === 'messages' && 'text-indigo-300'" d="M11 1C5.477 1 1 4.582 1 9c0 1.797.75 3.45 2 4.785V19l4.833-2.416C8.829 16.85 9.892 17 11 17c5.523 0 10-3.582 10-8s-4.477-8-10-8z" />
                                    </svg>
                                    <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Chats</span>
                                </div>
                                <!-- Badge -->
                                <div class="flex flex-shrink-0 ml-2">
                                    <span class="inline-flex items-center justify-center h-5 text-xs font-medium text-white bg-indigo-500 px-2 rounded">4</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- CV -->
                    <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0" :class="{ 'bg-slate-900': page.startsWith('tasks-') }" x-data="{ open: false }" x-init="$nextTick(() => open = page.startsWith('tasks-'))">
                        <a class="block text-slate-200 hover:text-white truncate transition duration-150" :class="page.startsWith('tasks-') && 'hover:text-slate-200'" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                        <path class="fill-current text-slate-600" :class="page.startsWith('tasks-') && 'text-indigo-500'" d="M8 1v2H3v19h18V3h-5V1h7v23H1V1z" />
                                        <path class="fill-current text-slate-600" :class="page.startsWith('tasks-') && 'text-indigo-500'" d="M1 1h22v23H1z" />
                                        <path class="fill-current text-slate-400" :class="page.startsWith('tasks-') && 'text-indigo-300'" d="M15 10.586L16.414 12 11 17.414 7.586 14 9 12.586l2 2zM5 0h14v4H5z" />
                                    </svg>
                                    <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">CV</span>
                                </div>
                                <!-- Icon -->
                                <div class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                    <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400" :class="open && 'transform rotate-180'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                            <ul class="pl-9 mt-1" :class="!open && 'hidden'" x-cloak>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate" :class="page === 'tasks-kanban' && '!text-indigo-500'" href="#cvcrear">
                                        <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">crear cv</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate" :class="page === 'tasks-list' && '!text-indigo-500'" href="#cvver">
                                        <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">ver cv</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Calendar -->
                    <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0" :class="page === 'calendar' && 'bg-slate-900'">
                        <a class="block text-slate-200 hover:text-white truncate transition duration-150" :class="page === 'calendar' && 'hover:text-slate-200'" href="#">
                            <div class="flex items-center">
                                <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                    <path class="fill-current text-slate-600" :class="page === 'calendar' && 'text-indigo-500'" d="M1 3h22v20H1z" />
                                    <path class="fill-current text-slate-400" :class="page === 'calendar' && 'text-indigo-300'" d="M21 3h2v4H1V3h2V1h4v2h10V1h4v2Z" />
                                </svg>
                                <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Calendar</span>
                            </div>
                        </a>
                    </li>

                </ul>
            </div>
        </div>

        <!-- Expand / collapse button -->
        <div class="pt-3 hidden lg:inline-flex 2xl:hidden justify-end mt-auto">
            <div class="px-3 py-2">
                <button @click="sidebarExpanded = !sidebarExpanded">
                    <span class="sr-only">Expand / collapse sidebar</span>
                    <svg class="w-6 h-6 fill-current sidebar-expanded:rotate-180" viewBox="0 0 24 24">
                        <path class="text-slate-400" d="M19.586 11l-5-5L16 4.586 23.414 12 16 19.414 14.586 18l5-5H7v-2z" />
                        <path class="text-slate-600" d="M3 23H1V1h2z" />
                    </svg>
                </button>
            </div>
        </div>

    </div>
</div>
