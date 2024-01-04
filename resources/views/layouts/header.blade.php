<nav x-data="{ open: false }" class="header-nav">
    <!-- Primary Navigation Menu -->
    <div class="header-nav__wrapper mx-auto px-4 sm:px-6 lg:px-8">
        <div class="header-nav__container">
            {{-- <div class="flex"> --}}
                <!-- Logo -->
                <div class="header-nav__logo shrink-0">
                    <a href="{{ url('/') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden header-nav__menu space-x-8 xl:flex">
                    <x-nav-link :href="route('about')" :active="request()->routeIs('about')">
                        {{ __('О компании') }}
                    </x-nav-link>
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Услуги') }}
                    </x-nav-link>
                    <x-nav-link :href="route('areas')" :active="request()->routeIs('areas')">
                        {{ __('Направления') }}
                    </x-nav-link>
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Готовые решения') }}
                    </x-nav-link>
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Проекты') }}
                    </x-nav-link>
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Контакты') }}
                    </x-nav-link>
                </div>

                <!-- Contacts phone and time -->
                <div class="hidden header-nav__phone md:flex">
                    <span class="header-nav__phone--number">+7 (495) 999 88 77</span>
                    <span class="header-nav__phone--time">пн-пт с 9.00 до 19.00</span>
                </div>
            {{-- </div> --}}

            <!-- Hamburger -->
            <div class="-me-2 flex items-center xl:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden xl:hidden header-nav__responsive">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('О компании') }}
            </x-responsive-nav-link>
        </div>

    </div>
</nav>
