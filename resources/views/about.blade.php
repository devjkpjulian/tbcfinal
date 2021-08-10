@extends('layout')

@section('contents')
    <div class="fixed z-0 w-full h-full bg-cover md:relative lg:h-screen lg:w-screen lg:bg-bottom" style="background-image: url('{{ asset('img/skyline.png') }}')">
        <section class="fixed z-10 flex flex-col items-center justify-start w-full h-full py-12 space-y-6 overflow-y-auto md:justify-center md:absolute bg-sky-600/50 md:py-0">
            <h1 class="text-2xl font-extrabold text-center text-white uppercase lg:text-5xl pro:text-4xl lg:text-left font-digitalo">ThinkBIG Creatives Inc.</h1>
            <p class="text-xs text-center text-white capitalize lg:text-lg pro:text-md lg:text-left">is a global web production company. we create ideas from scratch. we deliver what matters most for our clients, businesses and brands.</p>
            <h2 class="text-xl font-extrabold text-center text-white underline uppercase lg:text-2xl lg:text-left font-digitalo">OUR SERVICES</h2>
            <div class="grid items-center justify-center grid-cols-1 gap-6 pb-12 md:grid-cols-3 md:pb-0">
                <div class="flex flex-col items-center justify-start w-56 bg-white border border-gray-300 lg:w-64 h-96 rounded-xl">
                    <img class="w-auto h-32" src="{{ asset('gif/strategy.gif') }}">
                    <h1 class="text-base font-extrabold text-sky-600">ONLINE STRATEGY</h1>
                    <p class="p-6 text-base text-center text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                </div>
                <div class="flex flex-col items-center justify-start w-56 bg-white border border-gray-300 lg:w-64 h-96 rounded-xl">
                    <img class="w-auto h-32" src="{{ asset('gif/graphics.gif') }}">
                    <h1 class="text-base font-extrabold text-sky-600">WEB & GRAPHIC DESIGN</h1>
                    <p class="p-6 text-base text-center text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                </div>
                <div class="flex flex-col items-center justify-start w-56 bg-white border border-gray-300 lg:w-64 h-96 rounded-xl">
                    <img class="w-auto h-32" src="{{ asset('gif/system.gif') }}">
                    <h1 class="text-base font-extrabold text-sky-600">SYSTEM DEVELOPMENT</h1>
                    <p class="p-6 text-base text-center text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                </div>
            </div>
        </section>
    </div>
@endsection