@extends('layout')

@section('contents')
    <div class="w-full h-full lg:h-screen lg:w-screen">
        <section class="w-full h-full bg-cover md:h-1/2 lg:bg-bottom" style="background-image: url('{{ asset('img/cover0.png') }}')">
            <div class="flex flex-col items-center justify-center w-full h-full px-6 py-6 lg:flex-row lg:justify-between lg:py-0 lg:px-32">
                <div class="flex flex-col items-center justify-center order-2 w-full space-y-2 lg:h-full lg:w-1/2 lg:space-y-6 lg:order-1">
                    <h1 class="text-2xl font-extrabold text-center text-white uppercase lg:text-5xl pro:text-4xl lg:text-left animate-pulse">professional custom website design & development</h1>
                    <p class="text-xs text-center text-white capitalize lg:text-lg pro:text-md lg:text-left">We build wonderful websites for all purposes and industries Personal blogs, e-commerce, corporate portfolios and web based systems. Get your website mock-up within just a few days.</p>
                </div>
                <div class="flex items-center justify-center order-1 w-full lg:h-full lg:w-1/2 lg:order-2">
                    <img src="{{ asset('img/laptop.png') }}" class="w-auto h-44 lg:h-96 pro:h-64">
                </div>
            </div>
        </section>
        <section class="w-full h-full bg-left bg-cover lg:bg-top md:h-1/2" style="background-image: url('{{ asset('img/bgwebsite.png') }}')">
            <div class="flex flex-col items-center justify-center w-full h-full px-12 space-y-2 lg:px-32">
                <h1 class="text-2xl font-extrabold text-left uppercase text-sky-600 font-digitalo">Our Work</h1>
                <ul class="w-full lazy space-2">
                    <li>
                        <div class="flex flex-col items-center justify-center">
                            <a href="https://icreate.live" target="_blank">
                                <img class="w-auto border border-gray-600 h-44 xl:h-56 rounded-xl" src="{{ asset('img/icreate.png') }}">
                            </a>
                            <small class="text-sm uppercase text-sky-900">ICREATE LIVE</small>
                        </div>
                    </li>
                    <li>
                        <div class="flex flex-col items-center justify-center">
                            <a href="https://expedio.com.ph" target="_blank">
                                <img class="w-auto border border-gray-600 h-44 xl:h-56 rounded-xl" src="{{ asset('img/expedio.png') }}">
                            </a>
                            <small class="text-sm uppercase text-sky-900">EXPEDIO</small>
                        </div>
                    </li>
                    <li>
                        <div class="flex flex-col items-center justify-center">
                            <a href="https://tracergo.ph" target="_blank">
                                <img class="w-auto border border-gray-600 h-44 xl:h-56 rounded-xl" src="{{ asset('img/tracergo.png') }}">
                            </a>
                            <small class="text-sm uppercase text-sky-900">TRACERGO</small>
                        </div>
                    </li>
                    <li>
                        <div class="flex flex-col items-center justify-center">
                            <a href="https://nameshuffler.com" target="_blank">
                                <img class="w-auto border border-gray-600 h-44 xl:h-56 rounded-xl" src="{{ asset('img/nameshuffler.png') }}">
                            </a>
                            <small class="text-sm uppercase text-sky-900">NAMESHUFFLER</small>
                        </div>
                    </li>
                    <li>
                        <div class="flex flex-col items-center justify-center">
                            <a href="https://cnx2020recognition.com" target="_blank">
                                <img class="w-auto border border-gray-600 h-44 xl:h-56 rounded-xl" src="{{ asset('img/cnx2020.png') }}">
                            </a>
                            <small class="text-sm uppercase text-sky-900">CNX2020</small>
                        </div>
                    </li>
                    <li>
                        <div class="flex flex-col items-center justify-center">
                            <a href="https://scratchfortreats.com/" target="_blank">
                                <img class="w-auto border border-gray-600 h-44 xl:h-56 rounded-xl" src="{{ asset('img/scratchfortreats.png') }}">
                            </a>
                            <small class="text-sm uppercase text-sky-900">SCRATCHFORTREATS</small>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>
@endsection