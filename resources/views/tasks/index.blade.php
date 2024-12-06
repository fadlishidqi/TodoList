@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="bg-white rounded-lg shadow-sm p-6 md:p-8">
        <h1 class="text-2xl font-bold text-gray-900 mb-8">My Tasks</h1>
        
        <form action="{{ route('tasks.store') }}" method="POST" class="mb-8">
            @csrf
            <div class="flex flex-col gap-4">
                <div class="relative">
                    <input type="text" 
                           name="name" 
                           placeholder="What needs to be done?" 
                           class="w-full pl-4 pr-12 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('name') border-red-500 @enderror"
                           value="{{ old('name') }}">
                    <button type="submit" class="absolute right-2 top-1/2 transform -translate-y-1/2 text-white bg-blue-600 rounded-md px-4 py-2 text-sm hover:bg-blue-700 transition-colors">
                        Add
                    </button>
                </div>
                @error('name')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
        </form>

        <div class="space-y-4 max-h-[calc(100vh-400px)] overflow-y-auto pr-2 scrollbar-thin scrollbar-thumb-gray-300 scrollbar-track-gray-100">
            @forelse($tasks as $task)
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                    <div class="flex items-center space-x-3">
                        <span class="font-medium text-gray-900">{{ $task->name }}</span>
                        <span class="px-2 py-1 text-xs rounded-full {{ $task->status === 'completed' ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                            {{ $task->status }}
                        </span>
                    </div>
                    <div class="flex items-center space-x-2">
                        @if($task->status !== 'completed')
                            <form action="{{ route('tasks.update-status', $task->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <button class="text-sm bg-green-600 text-white px-3 py-1.5 rounded-md hover:bg-green-700 transition-colors">
                                    Complete
                                </button>
                            </form>
                        @endif
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="text-sm bg-red-600 text-white px-3 py-1.5 rounded-md hover:bg-red-700 transition-colors">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            @empty
                <div class="text-center py-12">
                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                    <p class="mt-4 text-gray-500">No tasks yet. Create your first task above!</p>
                </div>
            @endforelse
        </div>
    </div>
</div>
@endsection