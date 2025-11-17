@extends('layout', ['title' => 'About Us'])

@section('about')
<div class="max-w-6xl mx-auto px-4">

    {{-- HEADER --}}
    <section class="text-center py-16">
        <h1 class="text-4xl font-extrabold text-gray-900">About Us</h1>
        <p class="mt-3 text-gray-600 text-lg w-3/4 mx-auto">
            We are passionate about building modern, fast, and beautiful websites that help businesses grow.
        </p>
    </section>

    {{-- TWO-COLUMN SECTION --}}
    <section class="grid grid-cols-1 md:grid-cols-2 gap-10 py-10 items-center">

        {{-- IMAGE --}}
        <div>
            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f"
                 class="rounded-xl shadow-lg" alt="Team">
        </div>

        {{-- TEXT --}}
        <div>
            <h2 class="text-3xl font-bold text-blue-600 mb-4">Who We Are</h2>
            <p class="text-gray-700 leading-relaxed mb-4">
                We are a small creative team that focuses on delivering clean, professional, and user-friendly
                web experiences. Our mission is to help every brand stand out online.
            </p>

            <p class="text-gray-700 leading-relaxed">
                Using technologies like Laravel, React, and TailwindCSS, we create websites that are:
            </p>

            <ul class="mt-4 space-y-2 text-gray-700">
                <li>✔ Fast and responsive</li>
                <li>✔ Clean and modern design</li>
                <li>✔ Easy to manage and update</li>
                <li>✔ SEO-friendly</li>
            </ul>
        </div>

    </section>

    {{-- MISSION BOX --}}
    <section class="bg-white shadow rounded-xl p-10 mt-10">
        <h3 class="text-2xl font-bold text-gray-800 mb-4 text-center">Our Mission</h3>
        <p class="text-gray-600 text-center w-4/5 mx-auto">
            To empower individuals and businesses by creating digital experiences that are not only visually
            stunning but also functional, accessible, and built for long-term success.
        </p>
    </section>

</div>
@endsection
