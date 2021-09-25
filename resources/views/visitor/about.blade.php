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
            </h1>
        </div>
    </div>
</section>
<!-- hero section end -->

{{-- team section start --}}
<section class="font-poppins">
    <div class="container px-5 py-24 mx-auto">
        <div class="text-center mb-20">
            <div class="text-center mb-5">
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 uppercase">Our Team</h1>
                <div class="flex mt-2 justify-center">
                    <div class="w-24 h-1 rounded-full bg-indigo-700 inline-flex"></div>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">

            <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                <div class="inline-flex items-center justify-center rounded-full mb-5 flex-shrink-0">
                    <img width="220px" class="rounded-full" src="https://via.placeholder.com/150" alt="Person Image">
                </div>
                <div class="flex-grow">
                    <h2 class="text-indigo-700 text-xl title-font font-semibold">Person Name</h2>
                    <h3 class="mb-2 text-base text-gray-500">Title</h3>
                    <p class="leading-relaxed text-base text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptas expedita tempore aut labore debitis optio quia quo facilis ducimus.</p>
                    <a class="mt-3 text-indigo-700 inline-flex items-center" href="/">Learn More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                <div class="inline-flex items-center justify-center rounded-full mb-5 flex-shrink-0">
                    <img width="220px" class="rounded-full" src="https://via.placeholder.com/150" alt="Person Image">
                </div>
                <div class="flex-grow">
                    <h2 class="text-indigo-700 text-xl title-font font-semibold">Person Name</h2>
                    <h3 class="mb-2 text-base text-gray-500">Title</h3>
                    <p class="leading-relaxed text-base text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptas expedita tempore aut labore debitis optio quia quo facilis ducimus.</p>
                    <a class="mt-3 text-indigo-700 inline-flex items-center" href="/">Learn More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                <div class="inline-flex items-center justify-center rounded-full mb-5 flex-shrink-0">
                    <img width="220px" class="rounded-full" src="https://via.placeholder.com/150" alt="Person Image">
                </div>
                <div class="flex-grow">
                    <h2 class="text-indigo-700 text-xl title-font font-semibold">Person Name</h2>
                    <h3 class="mb-2 text-base text-gray-500">Title</h3>
                    <p class="leading-relaxed text-base text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptas expedita tempore aut labore debitis optio quia quo facilis ducimus.</p>
                    <a class="mt-3 text-indigo-700 inline-flex items-center" href="/">Learn More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
{{-- team section end --}}

{{-- about section start --}}
<section class="text-gray-600 body-font">
    <div class="container  px-5 py-16 mx-auto">
        <div class="mb-10">
            <div class="text-center mb-5">
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 uppercase">About Us</h1>
                <div class="flex mt-2 justify-center">
                    <div class="w-24 h-1 rounded-full bg-indigo-700 inline-flex"></div>
                </div>
            </div>
            <p class="text-justify leading-relaxed text-lg">We're a full-service interactive software company that helps clients succeed by creating outstanding digital solutions. We provide fully customized software and IT solutions for industries, business enterprises, and educational institutions to fulfill their needs. Our Best Services Whatever we do, our ultimate purpose is to fulfill the requirements of our clients as best as possible. We provide our services with one thing in mind - they can be nothing short of being perfect and have to exceed all expectations.</p>
        </div>

        <div class="mb-10">
            <div class="text-center mb-5">
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 uppercase">Our Goal</h1>
                <div class="flex mt-2 justify-center">
                    <div class="w-24 h-1 rounded-full bg-indigo-700 inline-flex"></div>
                </div>
            </div>
            <p class="text-justify leading-relaxed text-lg">We believe in providing "Total Customer Delight". Our mission is to always help our clients get to know their business better. We help put more than just a face to a name.</p>
        </div>
    </div>
</section>
{{-- about section end --}}

@endsection
