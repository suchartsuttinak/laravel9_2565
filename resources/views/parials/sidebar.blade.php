<nav class='mobile-navbar'>
    <button id='mobileMenuBtn' class='text-2xl px-4'>
        <ion-icon class='mt-2' name="menu-outline"></ion-icon>
    </button>

    <div>
        <div class="relative inline-block" x-data='{open: false}'>
            <button @click='open = !open' :class="open ? 'bg-gray-100' : '' " x-transition class='text-xl rounded px-2 hover:bg-gray-100 transition duration-200'>
                <ion-icon class='mt-2' name="notifications-outline"></ion-icon>
            </button>
            <div x-show="open" @click.outside="open = false" class="dropdown-content -right-14 sm:-right-8 md:right-1 text-center" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-y-0 transform" x-transition:enter-end="opacity-100 scale-y-100 transform" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" style="display: none;">

                <div class='p-3 text-sm text-gray-500'>
                    <span class="text-theme-primary">2</span> Unread notification
                </div>

                <div class="card flex-card hover:bg-theme-secondary items-center text-left">
                    <span class="border py-1 px-2 border-theme-primary rounded-full mr-3">
                        <ion-icon class='mt-1 text-theme-primary' name="dice-outline"></ion-icon>
                    </span>
                    <div>
                        <div class="card-header">its just an notificationt</div>
                        <small class="text-gray-500">5 Minutes ago</small>
                    </div>
                </div>

                <div class="card flex-card hover:bg-theme-secondary items-center text-left">
                    <span class="border py-1 px-2 border-theme-primary rounded-full mr-3">
                        <ion-icon class='mt-1 text-theme-primary' name="dice-outline"></ion-icon>
                    </span>
                    <div>
                        <div class="card-header">This notification title is longer than expection</div>
                        <small class="text-gray-500">5 Minutes ago</small>
                    </div>
                </div>

                <div class="card flex-card hover:bg-theme-secondary items-center text-left">
                    <span class="border py-1 px-2 border-gray-100 rounded-full mr-3">
                        <ion-icon class='mt-1' name="dice-outline"></ion-icon>
                    </span>
                    <div>
                        <div class="card-header">its just an notificationt</div>
                        <small class="text-gray-500">5 Minutes ago</small>
                    </div>
                </div>

            </div>
        </div>

        <div class="relative inline-block"  x-data='{open: false}'>
            <button @click='open = !open' :class="open ? 'bg-gray-100' : '' "  class='text-xl rounded px-2 hover:bg-gray-100 transition duration-200'>
                <ion-icon class='mt-2' name="person-outline"></ion-icon>
            </button>
            <div x-show="open" @click.outside="open = false" class="dropdown-content -right-6 sm:-right-8 md:right-1 text-left" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-y-0 transform" x-transition:enter-end="opacity-100 scale-y-100 transform" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" style="display: none;">

                <div class='p-3 text-sm text-gray-500 border-b border-gray-100'>
                    ยินดีต้อนรับ
                    <span class='block text-theme-darked-primary'>{{ Auth::user()->name }}</span>
                </div>

                <a class='flex items-center w-full p-3 hover:bg-theme-secondary transition duration-200' href="{{ route('welcome') }}">
                    <ion-icon class='mr-2' name="compass-outline"></ion-icon>
                    Visit site
                </a>

                <a class='flex items-center w-full p-3 hover:bg-theme-secondary transition duration-200' href="{{ route('profile.show') }}">
                    <ion-icon class='mr-2' name="create-outline"></ion-icon>
                    Edit profile
                </a>

                {{--  <a class='flex items-center w-full p-3 text-red-500 hover:bg-red-500 transition duration-200 border-t border-gray-100' href="#">
                    <ion-icon class='mr-2' name="log-out-outline"></ion-icon>
                    Logout
                </a>  --}}
                <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <a
                                class="text-lg flex items-center w-full p-3 text-red-500 hover:bg-red-50 transition duration-200 border-t border-gray-100"
                                href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                         <ion-icon class='mr-2' name="log-out-outline"></ion-icon>
                                    {{ __('Log Out') }}
                            </a>
                            </form>

            </div>
        </div>
    </div>
</nav>

<aside class="sidebar hidden lg:block left-0">
    <header>
        <h1>Suchart Template<span>.</span></h1>
    </header>
    <nav>
        <ul>
            <li class="badge">Main Menu</li>
            <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}">
                    <ion-icon name="Home"></ion-icon>
                    Dashboard
                </a>
            </li>
            <li class="{{ request()->routeIs('user.index') ? 'active' : '' }}">
                <a href="{{ route('user.index') }}">
                    <ion-icon name="person"></ion-icon>
                    ข้อมูลผู้ใช้งาน
                </a>
            </li>
        </ul>
    </nav>
</aside>
