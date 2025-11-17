@extends('layout', ['title' => 'Our Services'])

@section('service')
<div class="max-w-6xl mx-auto px-4">

    {{-- HEADER --}}
    <section class="text-center py-16">
        <h1 class="text-4xl font-extrabold text-gray-900">Our Services</h1>
        <p class="mt-3 text-gray-600 text-lg w-3/4 mx-auto">
            We offer a wide range of web design and development services to help your business grow online.
        </p>
    </section>

    {{-- SERVICES GRID --}}
    <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 py-10">

        {{-- Service 1 --}}
        <div class="bg-white rounded-xl shadow p-6 hover:shadow-xl transition">
            <h3 class="text-xl font-bold text-blue-600 mb-2">Web Design</h3>
            <p class="text-gray-600">
                Clean, modern, responsive designs that make your brand shine online.
            </p>
        </div>

        {{-- Service 2 --}}
        <div class="bg-white rounded-xl shadow p-6 hover:shadow-xl transition">
            <h3 class="text-xl font-bold text-blue-600 mb-2">Web Development</h3>
            <p class="text-gray-600">
                Fast and secure websites built using Laravel, React, and modern tools.
            </p>
        </div>

        {{-- Service 3 --}}
        <div class="bg-white rounded-xl shadow p-6 hover:shadow-xl transition">
            <h3 class="text-xl font-bold text-blue-600 mb-2">UI/UX Design</h3>
            <p class="text-gray-600">
                User-friendly interfaces with smooth, intuitive experiences.
            </p>
        </div>

        {{-- Service 4 --}}
        <div class="bg-white rounded-xl shadow p-6 hover:shadow-xl transition">
            <h3 class="text-xl font-bold text-blue-600 mb-2">E-commerce Websites</h3>
            <p class="text-gray-600">
                Online stores built for performance, security, and easy management.
            </p>
        </div>

        {{-- Service 5 --}}
        <div class="bg-white rounded-xl shadow p-6 hover:shadow-xl transition">
            <h3 class="text-xl font-bold text-blue-600 mb-2">SEO Optimization</h3>
            <p class="text-gray-600">
                Improve your online visibility and rank higher on search engines.
            </p>
        </div>

        {{-- Service 6 --}}
        <div class="bg-white rounded-xl shadow p-6 hover:shadow-xl transition">
            <h3 class="text-xl font-bold text-blue-600 mb-2">Website Maintenance</h3>
            <p class="text-gray-600">
                Keep your website updated, fast, and secure with reliable support.
            </p>
        </div>

    </section>

    {{-- CTA SECTION --}}
    <section class="bg-blue-600 text-white rounded-xl p-10 mt-16 text-center shadow-lg">
        <h2 class="text-3xl font-bold mb-3">Ready to Start Your Project?</h2>
        <p class="text-lg mb-6">
            Contact us today and let’s build something amazing together.
        </p>

        <a href="/contact"
           class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold shadow hover:bg-gray-100 transition">
            Get in Touch
        </a>
    </section>

</div>
@endsection
