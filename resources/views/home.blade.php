@extends('layout', ['title' => 'Home'])

@section('content')
<div class="max-w-6xl mx-auto px-4">

    {{-- HERO SECTION --}}
    <section class="text-center py-20">
        <h1 class="text-5xl font-extrabold text-gray-900">
            Build Your Dream Website
        </h1>

        <p class="mt-4 text-gray-600 text-lg">
            We design modern, fast and beautiful web experiences for your business.
        </p>

        <div class="mt-8 space-x-4">
            <a href="/services"
               class="px-6 py-3 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition">
                Our Services
            </a>

            <a href="/contact"
               class="px-6 py-3 bg-white border border-gray-300 rounded-lg shadow hover:bg-gray-50 transition">
                Contact Us
            </a>
        </div>
    </section>

    {{-- FEATURES --}}
    <section class="grid grid-cols-1 md:grid-cols-3 gap-8 py-16">

        <div class="bg-white rounded-xl shadow p-6 hover:shadow-lg transition">
            <h3 class="text-xl font-bold text-blue-600 mb-2">Modern Designs</h3>
            <p class="text-gray-600">Clean and smooth UI designs created with TailwindCSS.</p>
        </div>

        <div class="bg-white rounded-xl shadow p-6 hover:shadow-lg transition">
            <h3 class="text-xl font-bold text-blue-600 mb-2">Fast Websites</h3>
            <p class="text-gray-600">Optimized Laravel backend for fast performance.</p>
        </div>

        <div class="bg-white rounded-xl shadow p-6 hover:shadow-lg transition">
            <h3 class="text-xl font-bold text-blue-600 mb-2">Fully Responsive</h3>
            <p class="text-gray-600">Looks great on mobile, tablet, and desktop.</p>
        </div>

    </section>

</div>
@endsection
