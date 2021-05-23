<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>nanovity | @yield('title')</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
            #top {
                overflow-y: scroll;
                scroll-behavior: smooth;
            }

            .brand-color {
                color: #5222d0;
            }

            .hero-bg {
                background: #667db6;
                /* fallback for old browsers */
                background: -webkit-linear-gradient(to right, #667db6, #0082c8, #0082c8, #667db6);
                /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to right, #667db6, #0082c8, #0082c8, #667db6);
                /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

                color: white !important;

            }

        </style>

    </head>

    <body id="top" class="font-poppins">
        {{-- <div >
@if(Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
@auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
    @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

        @if(Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
        @endif
        @endauth
        </div>
        @endif
        </div> --}}
        <!-- header start -->
        <header id="home" class="text-gray-600 body-font hero-bg fixed left-0 right-0 z-50">
            <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
                <a class="flex title-font font-medium items-center mb-4 md:mb-0">
                    <span class="text-4xl font-gilroy">nanovity</span>
                </a>
                <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                    <a class="mr-5 hover:text-gray-900" href="{{ route('home') }}">Home</a>
                    <a class="mr-5 hover:text-gray-900" href="{{ route('services') }}">Services</a>
                    <a class="mr-5 hover:text-gray-900" href="{{ route('contact') }}">Contact</a>
                    <a class="mr-5 hover:text-gray-900" href="{{ route('about') }}">About</a>
                </nav>
            </div>
        </header>
        <!-- header end -->

        {{-- show page content here --}}
        @section('content')

        @show



        <!-- footer start -->
        <footer id="footer" class="text-gray-600 body-font">
            <hr>
            <div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
                <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
                    <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900 mb-2">
                        <span class="text-3xl font-gilroy">nanovity</span>
                    </a>
                    <address class="text-sm">
                        4th Floor, Momotaz Tower,<br>
                        Arkan Road, Bahaddarhat,<br>
                        Chattogram, Bangladesh <br>
                        <br>
                        <a href="mailto:info@nanovity.net" class="text-indigo-700">info@nanovity.net</a><br>
                        <br>
                        <a  href="tel:+8801730794514" class="text-indigo-700">(+880) 173 079 4514</a> <br>
                        <a  href="tel:+8801834255112" class="text-indigo-700">(+880) 183 425 5112</a> <br>
                    </address>
                </div>
                <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">

                    <div class="lg:w-1/2 md:w-1/2 w-full px-4">
                        <h2 class="title-font font-medium text-gray-900 tracking-widest mb-3">Stay tuned!</h2>
                        <p class="leading-5 text-sm text-gray-600">Sign up here to get the latest news, updates and special offers delivered to your inbox.</p>
                        <div class="flex xl:flex-nowrap md:flex-nowrap lg:flex-wrap flex-wrap justify-center items-end md:justify-start mb-10 mt-1">
                            <div class="relative w-40 sm:w-auto xl:mr-4 lg:mr-0 sm:mr-4 mr-2">
                                <input type="text" id="footer-field" name="footer-field" placeholder="Enter your email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:bg-transparent focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            <button class="lg:mt-2 xl:mt-0 flex-shrink-0 inline-flex text-white bg-indigo-700 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Join!</button>
                        </div>
                    </div>

                    <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                        <nav class="list-none mb-10 last:mb-0">
                            <li>
                                <a class="text-gray-600 hover:text-gray-700">First Link</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-gray-700">Second Link</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-gray-700">Third Link</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-gray-700">Fourth Link</a>
                            </li>
                        </nav>
                    </div>


                </div>
            </div>
            <div class="bg-gray-100">
                <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
                    <p class="text-gray-500 text-sm text-center sm:text-left">&copy;
                        <span>
                            <script>
                                document.write(new Date().getFullYear())

                            </script>
                        </span>
                        <a href="" class="text-indigo-700">Nanovity</a> —
                        All Rights Reserved.
                    </p>
                    <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
                        <a class="text-gray-500">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                            </svg>
                        </a>
                        <a class="ml-3 text-gray-500">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                            </svg>
                        </a>
                        <a class="ml-3 text-gray-500">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                            </svg>
                        </a>
                        <a class="ml-3 text-gray-500">
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                                <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                                <circle cx="4" cy="4" r="2" stroke="none"></circle>
                            </svg>
                        </a>
                    </span>
                </div>
            </div>
        </footer>
        <!-- footer end -->

        <script src="{{ asset('js/app.js') }}"></script>
    </body>

</html>
