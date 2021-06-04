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

{{-- about section start --}}
<section class="text-gray-600 body-font">
    <div class="container  px-5 lg:px-60 py-16 mx-auto">
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
