<div class="grow flex flex-col md:translate-x-0 transform transition-transform duration-300 ease-in-out"
    :class="msgSidebarOpen ? 'translate-x-1/3' : 'translate-x-0'">

    <!-- Header -->
    <div class="sticky top-16">
        <div class="flex items-center justify-between bg-white border-b border-slate-200 px-4 sm:px-6 md:px-5 h-16">

            <!-- People -->
            <div class="flex items-center">
                <!-- Close button -->
                <button class="md:hidden text-slate-400 hover:text-slate-500 mr-4"
                    @click.stop="msgSidebarOpen = !msgSidebarOpen" aria-controls="messages-sidebar"
                    :aria-expanded="msgSidebarOpen">
                    <span class="sr-only">Close sidebar</span>
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z" />
                    </svg>
                </button>
                <div class="flex -space-x-3 -ml-px">
                    <a class="block" href="#0">
                        <img class="rounded-full border-2 border-white box-content" src="../images/user-32-01.jpg"
                            width="32" height="32" alt="my photo" />
                    </a>
                    <a class="block" href="#0">
                        <img class="rounded-full border-2 border-white box-content" src="../images/user-32-07.jpg"
                            width="32" height="32" alt="photo friend" />
                    </a>
                </div>
            </div>
            <!-- Buttons on the right side -->
            <div class="flex">
                <button class="p-1.5 shrink-0 rounded border border-slate-200 hover:border-slate-300 shadow-sm ml-2">
                    <svg class="w-4 h-4 fill-current text-slate-400" viewBox="0 0 16 16">
                        <path
                            d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z" />
                    </svg>
                </button>
                <button class="p-1.5 shrink-0 rounded border border-slate-200 hover:border-slate-300 shadow-sm ml-2">
                    <svg class="w-4 h-4 fill-current text-indigo-500" viewBox="0 0 16 16">
                        <path
                            d="M14.3 2.3L5 11.6 1.7 8.3c-.4-.4-1-.4-1.4 0-.4.4-.4 1 0 1.4l4 4c.2.2.4.3.7.3.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4-.4-.4-1-.4-1.4 0z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div id="container-message" class="grow px-4 sm:px-6 md:px-5 py-6">
        <script>
            var message = 2;
            var user = "Daniel";
            var containerMessage =document.getElementById("container-message");
            if(message <= 0){
               document.write("Inicia una conversacion con " + user )
            }
        </script>

        <!-- Chat msg INPUT -->
        <x-input-message>
            hola
            <x-slot name="time">
                2:40pm
            </x-slot>
        </x-input-message>
        <!-- Chat msg OUTPUT-->
        <x-output-message>
            Hey Dominik Lamakani ????<br />
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est ????
            <x-slot name="time">
                4:40pm
            </x-slot>
        </x-output-message>
    </div>

    <!-- Footer -->
    <div class="sticky bottom-0">
        <div class="flex items-center justify-between bg-white border-t border-slate-200 px-4 sm:px-6 md:px-5 h-16">
            <!-- Plus button -->
            <button class="shrink-0 text-slate-400 hover:text-slate-500 mr-3">
                <span class="sr-only">Add</span>
                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                    <path
                        d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12C23.98 5.38 18.62.02 12 0zm6 13h-5v5h-2v-5H6v-2h5V6h2v5h5v2z" />
                </svg>
            </button>
            <!-- Message input -->
            <form class="grow flex">
                <div class="grow mr-3">
                    <label for="message-input" class="sr-only">Type a message</label>
                    <input id="message-input"
                        class="form-input w-full bg-slate-100 border-transparent focus:bg-white focus:border-slate-300"
                        type="text" placeholder="Aa" />
                </div>
                <button type="submit" class="btn bg-indigo-500 hover:bg-indigo-600 text-white whitespace-nowrap">Send
                    -&gt;</button>
            </form>
        </div>
    </div>
</div>
