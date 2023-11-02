@extends('layouts.global')
@section('title')
    Login Admin
@endsection
@section('content')
<div class="min-h-screen flex items-center justify-center bg-[#B27423]">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h1 class="text-2xl font-semibold text-gray-700 mb-4">Login as Admin</h1>
        <form method="POST" action="{{ route('login.action') }}">
            @csrf

            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-600">Username</label>
                <input id="username" type="username" name="username" required autofocus class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                <input id="password" type="password" name="password" required class="mt-1 p-2 w-full border rounded-md">
            </div>

            <button type="submit" class="w-full p-2 text-white rounded-md hover:bg-opacity-90" style="background-color: #B27423;">Login</button>
        </form>

        <div class="mt-4 text-center">
            <p class="text-gray-600 text-sm">Don't have an account? <a href="{{ route('register') }}" class="text-[#B27423] hover:underline">Register here</a></p>
        </div>
    </div>
</div>
@endsection
