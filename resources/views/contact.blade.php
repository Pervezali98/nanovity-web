@extends('layouts.app')
@section('title', 'Contact')
@section('content')
    <!-- hero section start -->
    <section class="text-gray-600 body-font hero-bg">
        <div class="container mx-auto flex px-5 md:flex-row flex-col items-center">
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                <img class="object-cover object-center rounded animate-pulse" alt="hero" width="720px" height="600px" src="{{ asset('images/contact_1.svg') }}">
            </div>
            <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                <h1 class="title-font sm:text-5xl text-3xl mb-4 font-medium">Need a hand? Or a high five?
                    <br class="hidden lg:inline-block">Here's how to reach us.
                </h1>
                <p class="mb-8 leading-relaxed">Let’s talk about your website or project. Send us a message and we will be in touch within one business day.</p>
            </div>
        </div>
    </section>
    <!-- hero section end -->
    <!-- contact section start -->
    <section id="contact" class="text-gray-600 body-font relative">
        <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
            <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
                <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=nanovity&t=&z=13&ie=UTF8&iwloc=&output=embed" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
                <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
                    <div class="lg:w-1/2 px-6">
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
                        <address class="mt-1">350, Momotaz Tower, 4th Floor,<br class="hidden lg:inline-block">
                            Arakan Road, 4212, Bhaddarhat,
                            Chattogram, Bangladesh.</address>
                    </div>
                    <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
                        <a class="leading-relaxed"><a href="mailto:info@nanovity.net" class="text-indigo-700">info@nanovity.net</a></a>
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-2">PHONE</h2>
                        <p class="leading-relaxed text-indigo-700"><a  href="tel:+8801730794514">(+880) 173 079 4514</a></p>
                        <p class="leading-relaxed text-indigo-700"><a  href="tel:+8801834255112">(+880) 183 425 5112</a></p>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
                <h2 class="text-gray-900 text-lg mb-3 font-medium title-font uppercase">Want to work with us?</h2>
                <p class="leading-relaxed mb-5 text-gray-600">Complete this form and we will get back to you in 24 hours.</p>
                <div class="relative mb-4">
                    <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                    <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-600 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                    <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-600 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                    <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-600 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>
                <button class="text-white bg-indigo-700 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Send Email</button>
            </div>
        </div>
    </section>
    <!-- contact section end -->
@endsection
