@extends('layouts/auth', ['title' => 'Login'])

@section('login')
<div class="flex justify-center items-center h-screen bg-gray-100">

    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold text-center text-gray-900 mb-6">Sign In</h1>

        <form action="/login" method="POST" class="space-y-4">
            @csrf {{-- CSRF protection --}}

            {{-- Email --}}
            <div>
                <label class="block mb-1 font-semibold text-gray-700">Email</label>
                <input type="email" name="email" required
                       class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>

            {{-- Password --}}
            <div>
                <label class="block mb-1 font-semibold text-gray-700">Password</label>
                <input type="password" name="password" required
                       class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>

            {{-- Submit --}}
            <button type="submit"
                    class="w-full bg-blue-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
                Login
            </button>
        </form>

        <p class="mt-4 text-center text-gray-600">
            Don't have an account? <a href="/register" class="text-blue-600 hover:underline">Register</a>
        </p>
    </div>

</div>
@endsection
