<!-- NAVIGATION MENU -->
<section class="sticky top-0 z-50 py-2 bg-green-400" data-primary="blue-500">
    <div class="flex items-center justify-between h-20 px-8 mx-auto max-w-7xl">

        <a href="{{ route('dashboard') }}"
            class="relative z-10 flex items-center w-auto text-2xl font-extrabold leading-none text-white select-none hover:animate-ping">DLHP</a>

        <nav class="items-center justify-center hidden space-x-8 text-gray-200 md:flex">

            <!-- MENU NON CHILD -->
            <a href="{{ route('dashboard') }}" x-data="{ hover: false }" @mouseenter="hover = true"
                @mouseleave="hover = false"
                class="relative inline-block ml-5 text-base font-bold text-gray-200 uppercase transition duration-150 ease hover:text-white">
                <span class="block hover:animate-bounce">Beranda</span>
                <span class="absolute bottom-0 left-0 inline-block w-full h-1 -mb-1 overflow-hidden">
                    <span x-show="hover"
                        class="absolute inset-0 inline-block w-full h-1 h-full transform border-t-2 border-white"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                        x-transition:leave="transition ease-out duration-300" x-transition:leave-start="translate-x-0"
                        x-transition:leave-end="translate-x-full" data-primary="blue-600" style="display: none;"></span>
                </span>
            </a>
            <!-- MENU NON CHILD -->

            @foreach ($main_menu as $mm)
            @if ($mm->status_menu == "tidak ada")
            <!-- MENU NON CHILD -->
            <a href="{{ route('content.single', $mm->id) }}" x-data="{ hover: false }" @mouseenter="hover = true"
                @mouseleave="hover = false"
                class="relative inline-block ml-5 text-base font-bold text-gray-200 uppercase transition duration-150 ease hover:text-white">
                <span class="block hover:animate-bounce">{{ $mm->nama_menu }}</span>
                <span class="absolute bottom-0 left-0 inline-block w-full h-1 -mb-1 overflow-hidden">
                    <span x-show="hover"
                        class="absolute inset-0 inline-block w-full h-1 h-full transform border-t-2 border-white"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                        x-transition:leave="transition ease-out duration-300" x-transition:leave-start="translate-x-0"
                        x-transition:leave-end="translate-x-full" data-primary="blue-600" style="display: none;"></span>
                </span>
            </a>
            <!-- MENU NON CHILD -->
            @endif

            @if ($mm->status_menu == "ada")
            <a href="#" id="dropdownDefault" data-dropdown-toggle="dropdown_{{ $mm->id }}"
                class="relative inline-block ml-5 text-base font-bold text-gray-200 uppercase transition duration-150 ease hover:text-white"
                x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                <span class="block hover:animate-bounce">{{ $mm->nama_menu }}</span>
                <span class="absolute bottom-0 left-0 inline-block w-full h-1 -mb-1 overflow-hidden">
                    <span x-show="hover"
                        class="absolute inset-0 inline-block w-full h-1 h-full transform border-t-2 border-white"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                        x-transition:leave="transition ease-out duration-300" x-transition:leave-start="translate-x-0"
                        x-transition:leave-end="translate-x-full" data-primary="blue-600" style="display: none;"></span>
                </span>
            </a>

            <!-- Dropdown menu -->
            <div id="dropdown_{{ $mm->id }}"
                class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                    @foreach ($mm->children as $mc)
                    <li>
                        <a href="{{ route('content.single', $mc->id) }}"
                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ $mc->nama_menu }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>

            @endif

            @endforeach

        </nav>

        <!-- Mobile Button -->
        <div class="relative flex items-center justify-center h-full text-white md:hidden">
            <button class="outline-none mobile-menu-button">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16">
                    </path>
                </svg>
            </button>
        </div>
    </div>
</section>
<!-- NAVIGATION MENU -->

<!-- MOBILE MENU -->
<nav class="sticky top-0 z-50 h-50 hidden mobile-menu">
    <ul
        class="flex flex-col p-4 border border-gray-100 bg-white md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-green-100 md:dark:bg-gray-900 dark:border-gray-700">

        @foreach ($main_menu as $mm)
        @if ($mm->status_menu == "tidak ada")
        <!-- menu without submenu -->
        <li>
            <a href="{{ route('content.single', $mm->id) }}"
                class="block py-2 pl-3 pr-4 text-gray-200 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                {{ $mm->nama_menu }}
            </a>
        </li>
        <!-- menu without submenu -->
        @endif

        @if ($mm->status_menu == "ada")
        <!-- menu with submenu -->
        <li>
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar_{{ $mm->id }}"
                class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                {{ $mm->nama_menu }}
                <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd">
                    </path>
                </svg>
            </button>

            <div id="dropdownNavbar_{{ $mm->id }}"
                class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-green-100 dark:divide-gray-600">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                    @foreach ($mm->children as $mc)
                    <li>
                        <a href="{{ route('content.single', $mc->id) }}"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ $mc->nama_menu }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </li>
        @endif

        @endforeach
        <!-- menu with submenu -->


    </ul>
</nav>
<!-- MOBILE MENU -->
