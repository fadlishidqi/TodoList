@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 no-scrollbar">
    <!-- Hero Section -->
    <div class="py-12 md:py-20 text-center">
        <h1 class="text-5xl font-extrabold text-gray-900 tracking-tight sm:text-6xl">
            Organize your work and life
        </h1>
        <p class="mt-6 text-xl text-gray-500 max-w-3xl mx-auto">
            Become focused, organized, and calm with our todo list app.
            Everything you need to stay productive in one place.
        </p>
        <div class="mt-10">
            <a href="{{ route('tasks.index') }}" 
               class="inline-flex items-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 transition duration-150 ease-in-out">
                Get Started
                <svg class="ml-2 -mr-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                </svg>
            </a>
        </div>
    </div>

    <!-- Features Section -->
    <div class="py-16 bg-gray-50 rounded-3xl px-8 mt-12">
        <div class="grid md:grid-cols-3 gap-12">
            <div class="text-center">
                <div class="bg-blue-100 p-3 rounded-xl inline-block">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                    </svg>
                </div>
                <h3 class="mt-6 text-xl font-medium text-gray-900">Quick Add Tasks</h3>
                <p class="mt-2 text-gray-500">Add tasks quickly and organize them efficiently</p>
            </div>

            <div class="text-center">
                <div class="bg-blue-100 p-3 rounded-xl inline-block">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                    </svg>
                </div>
                <h3 class="mt-6 text-xl font-medium text-gray-900">Track Progress</h3>
                <p class="mt-2 text-gray-500">Mark tasks as complete and track your productivity</p>
            </div>

            <div class="text-center">
                <div class="bg-blue-100 p-3 rounded-xl inline-block">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="mt-6 text-xl font-medium text-gray-900">Stay Productive</h3>
                <p class="mt-2 text-gray-500">Keep all your tasks organized in one place</p>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="py-16 text-center">
        <h2 class="text-3xl font-bold text-gray-900">Ready to get started?</h2>
        <p class="mt-4 text-xl text-gray-500">Join thousands of users who organize their life with our app.</p>
        <div class="mt-8">
            <a href="{{ route('tasks.index') }}" 
               class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-blue-600 bg-blue-100 hover:bg-blue-200 transition-colors duration-300">
                Try it for free
            </a>
        </div>
    </div>
</div>
@endsection