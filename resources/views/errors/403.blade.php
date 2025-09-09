@extends('layouts.app')

@section('content')
<div class="flex flex-col items-center justify-center min-h-screen bg-gray-100 text-center px-6">
    <div class="bg-white shadow-xl rounded-2xl p-10 max-w-lg">
        <h1 class="text-6xl font-bold text-red-600 mb-4">403</h1>
        <h2 class="text-2xl font-semibold text-gray-800 mb-2">Access Denied</h2>
        <p class="text-gray-600 mb-6">
            Sorry, you do not have permission to access this page.
        </p>

        <a href="{{ url('/') }}"
           class="inline-block px-6 py-3 bg-red-600 text-white font-medium text-lg rounded-xl shadow-md hover:bg-red-700 transition">
            ⬅ Back to Home
        </a>
    </div>
</div>
@endsection
