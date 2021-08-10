<header class="inset-x-0 top-0 border-b border-gray-100 shadow-md md:z-0">
    <nav class="flex flex-row items-center justify-between w-screen h-12 px-6 py-2 bg-white md:px-12">
        <div class="justify-start">
            <a href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" class="w-auto h-8"></a>
        </div>
        <div class="justify-end hidden lg:block">
            <div class="flex flex-row items-center justify-center w-full h-full space-x-6 font-digitalo">
                <a href="{{ url('/websites') }}" class="text-sm font-medium uppercase lg:text-md hover:text-sky-600 {{ request()->is('websites') ? 'text-sky-900' : 'text-gray-900' }}">
                    websites
                </a>
                <a href="{{ url('/games') }}" class="text-sm font-medium uppercase lg:text-md hover:text-sky-600 {{ request()->is('games') ? 'text-sky-900' : 'text-gray-900' }}">
                    games
                </a>
                {{-- <a href="{{ url('/marketing') }}" class="text-sm font-medium text-gray-900 uppercase lg:text-md hover:text-sky-600">
                    digital marketing
                </a> --}}
                {{-- <a href="{{ url('/events') }}" class="text-sm font-medium text-gray-900 uppercase lg:text-md hover:text-sky-600">
                    events
                </a> --}}
                <a href="{{ url('/about') }}" class="text-sm font-medium uppercase lg:text-md hover:text-sky-600 {{ request()->is('about') ? 'text-sky-900' : 'text-gray-900' }}">
                    our company
                </a>
                <a href="{{ url('/contact') }}" class="text-sm font-medium uppercase lg:text-md hover:text-sky-600 {{ request()->is('contact') ? 'text-sky-900' : 'text-gray-900' }}">
                    contact us
                </a>
            </div>
        </div>
        <div class="justify-end block lg:hidden">
            <button type="button" class="text-gray-900" onclick="toggleElem('sm_navi')">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>
</header>

<nav id="sm_navi" class="absolute inset-0 z-50 hidden w-full h-full p-2">
    <div class="flex flex-col items-center justify-start w-auto h-auto p-6 bg-white border border-gray-500 shadow-xl rounded-xl">
        <div class="flex flex-row items-center justify-between w-full">
            <a href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" class="w-auto h-12"></a>
            <button type="button" class="text-xl text-gray-900 focus:text-sky-600 active:hover:text-sky-900 focus:outline-none" onclick="toggleElem('sm_navi')">
                <i class="fas fa-times-circle"></i>
            </button>
        </div>
        <div class="flex flex-col items-center justify-center w-full p-2 mt-2 space-y-2 border-t-2 border-b-2 border-gray-300 border-dashed">
            <a href="{{ url('/websites') }}" class="text-sm text-gray-900 uppercase focus:text-sky-600 active:text-sky-600 focus:outline-none">websites</a>
            <a href="{{ url('/games') }}" class="text-sm text-gray-900 uppercase focus:text-sky-600 active:text-sky-600 focus:outline-none">games</a>
            {{-- <a href="{{ url('/marketing') }}" class="text-sm text-gray-900 uppercase focus:text-sky-600 active:text-sky-600 focus:outline-none">digital marketing</a> --}}
            {{-- <a href="{{ url('/events') }}" class="text-sm text-gray-900 uppercase focus:text-sky-600 active:text-sky-600 focus:outline-none">events</a> --}}
            <a href="{{ url('/about') }}" class="text-sm text-gray-900 uppercase focus:text-sky-600 active:text-sky-600 focus:outline-none">our company</a>
            <a href="{{ url('/contact') }}" class="text-sm uppercase text-sky-600 focus:font-extrabold active:font-extrabold focus:outline-none">contact us</a>
        </div>
    </div>
</nav>