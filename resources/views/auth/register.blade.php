@extends('layouts/auth', ['title' => 'Register'])

@section('signup')
<div class="flex justify-center items-center min-h-screen bg-gray-100">

    <div class="bg-white p-10 rounded-xl shadow-md w-full max-w-md">
        <h1 class="text-2xl font-bold text-center text-gray-900 mb-6">Register</h1>

        <form action="/register" method="POST" class="space-y-4">
            @csrf

            {{-- Name --}}
            <div>
                <label class="block mb-1 font-semibold text-gray-700">Name</label>
                <input type="text" name="name" required
                       class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>

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

            <div>
              <label class="block mb-1 font-semibold text-gray-700">Confirm Password</label>
            <input type="password" name="password_confirmation" required
           class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
             </div>


            {{-- Submit --}}
            <button type="submit"
                    class="w-full bg-blue-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
                Register
            </button>
        </form>

        <p class="mt-4 text-center text-gray-600">
            Already have an account? <a href="/login" class="text-blue-600 hover:underline">Login</a>
        </p>
    </div>

</div>
@endsection
