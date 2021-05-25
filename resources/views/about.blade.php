@extends('layouts.app')

@section('title', 'About')

@section('content')
    <!-- hero section start -->
    <section class="text-gray-600 body-font hero-bg">
        <div class="container mx-auto flex px-5 md:flex-row flex-col items-center">
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                <img class="object-cover object-center rounded animate-pulse" alt="hero" width="720px" height="600px" src="{{ asset('images/welcome.svg') }}">
            </div>
            <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                <h1 class="title-font sm:text-5xl md:text-6xl text-4xl mb-4 font-medium">Hello, we're <span class="font-gilroy text-black">nanovity</span>
                    {{-- <br class="hidden lg:inline-block">Here's how to reach us. --}}
                </h1>
                {{-- <p class="mb-8 leading-relaxed">Let’s talk about your website or project. Send us a message and we will be in touch within one business day.</p> --}}
            </div>
        </div>
    </section>
    <!-- hero section end -->
@endsection
