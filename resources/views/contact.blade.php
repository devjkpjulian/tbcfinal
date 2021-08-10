@extends('layout')

@section('contents')
    <div class="fixed z-0 w-full h-full bg-cover md:relative lg:h-screen lg:w-screen lg:bg-bottom" style="background-image: url('{{ asset('img/contact.png') }}')">
        <section class="fixed z-10 flex flex-col items-center justify-start w-full h-full py-12 space-y-6 overflow-y-auto md:justify-center md:absolute bg-sky-600/50 md:py-0">
            <div class="container px-4 mx-auto">
                <div class="flex flex-wrap justify-center py-10">
                <div class="w-full px-4 lg:w-6/12">
                    <div class="relative flex flex-col w-full min-w-0 mb-6 break-words border-4 border-white shadow-lg rounded-xl bg-blue-500/75">
                    <div class="flex-auto p-5 lg:p-10">
                        <h4 class="text-3xl font-semibold text-blue-900">CREATE <span class="text-white">WITH US!</span></h4>
                        <p class="mt-1 mb-4 leading-relaxed text-white">
                        For Inquiries, complete this form and we will get back to you ASAP.
                        </p>
                        <form method="POST" action="{{ route('inquiry') }}">
                            @csrf
                            <div class="relative w-full mt-8 mb-3">
                            <label class="block mb-2 text-xs font-bold text-white uppercase" for="full-name">Full Name</label>
                            <input id="name" name="name" type="text" class="w-full px-3 py-3 text-sm text-gray-700 placeholder-gray-400 bg-white rounded shadow focus:outline-none focus:shadow-outline" placeholder="Full Name" style="transition: all 0.15s ease 0s;"/>
                            </div>
                            <div class="relative w-full mb-3">
                            <label class="block mb-2 text-xs font-bold text-white uppercase" for="email">Email</label>
                            <input id="email" name="email" type="email" class="w-full px-3 py-3 text-sm text-gray-700 placeholder-gray-400 bg-white rounded shadow focus:outline-none focus:shadow-outline" placeholder="Email" style="transition: all 0.15s ease 0s;"/>
                            </div>
                            <div class="relative w-full mb-3">
                            <label class="block mb-2 text-xs font-bold text-white uppercase" for="message">Message</label>
                            <textarea id="message" name="message" rows="4" cols="80" class="w-full px-3 py-3 text-sm text-gray-700 placeholder-gray-400 bg-white rounded shadow focus:outline-none focus:shadow-outline" placeholder="Type a message..."></textarea>
                            </div>
                            <div class="mt-6 text-center">
                            <button type="submit" class="px-6 py-3 mb-1 mr-1 text-sm font-bold text-blue-500 uppercase bg-white rounded shadow outline-none hover:bg-gray-300 active:bg-gray-300 active:text-gray-900 hover:shadow-lg focus:outline-none" type="button" style="transition: all 0.15s ease 0s;">
                                Send Message
                            </button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
    </div>
@endsection