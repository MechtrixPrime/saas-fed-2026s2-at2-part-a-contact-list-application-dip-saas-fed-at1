<nav x-data="{ open: false }" class="bg-white border-b border-zinc-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center"></div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                        ToDo
                </div>

            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6 gap-4">
                    <x-dropdown align="right" width="48">

                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 border border-transparent
                                   text-sm leading-4 font-medium rounded-md text-zinc-500 bg-white
                                   hover:text-zinc-700 focus:outline-none transition ease-in-out duration-150">

                                <div class="ms-1">
                                    <i class="fa-solid fa-caret-down "></i>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">

                        </x-slot>

                    </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md
                              text-zinc-400 hover:text-zinc-500 hover:bg-zinc-100
                              focus:outline-none focus:bg-zinc-100 focus:text-zinc-500
                              transition duration-150 ease-in-out">
                    <i class="fa-solid fa-hamburger"></i>
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                              stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-zinc-200">
                <div class="px-4">
                    <div class="font-medium text-base text-zinc-800"></div>
                    <div class="font-medium text-sm text-zinc-500"></div>
                </div>

                <div class="mt-3 space-y-1">

                    <!-- Authentication -->
                    <form method="POST">
                        @csrf

                        <x-responsive-nav-link onclick="event.preventDefault();
                                               this.closest('form').submit();">
                        </x-responsive-nav-link>
                    </form>
                </div>
        </div>
    </div>
</nav>
