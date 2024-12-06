<nav class="bg-white border-b shadow-sm sticky top-0 z-50">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center gap-2">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                    </svg>
                    <span class="font-bold text-xl text-gray-800">TodoApp</span>
                </a>
            </div>

            <div class="hidden sm:flex items-center space-x-8">
                <a href="{{ route('home') }}" 
                   class="text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium {{ request()->routeIs('home') ? 'text-blue-600 border-b-2 border-blue-600' : '' }}">
                    Home
                </a>
                <a href="{{ route('tasks.index') }}" 
                   class="text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium {{ request()->routeIs('tasks.*') ? 'text-blue-600 border-b-2 border-blue-600' : '' }}">
                    Tasks
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="sm:hidden">
                <button type="button" onclick="toggleMobileMenu()" class="text-gray-600 hover:text-gray-900">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div class="sm:hidden hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="{{ route('home') }}" 
               class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('home') ? 'text-blue-600 bg-blue-50' : 'text-gray-600' }}">
                Home
            </a>
            <a href="{{ route('tasks.index') }}" 
               class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('tasks.*') ? 'text-blue-600 bg-blue-50' : 'text-gray-600' }}">
                Tasks
            </a>
        </div>
    </div>
</nav>