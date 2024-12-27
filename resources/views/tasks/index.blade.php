<x-app-layout>
<x-slot name="header">
<div class="flex justify-between items-center">
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
{{ __('Tasks') }}
</h2>
<a href="{{ route('tasks.create') }}" 
class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-blue-500 to-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:from-blue-600 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-150">
<svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
</svg>
<button type="submit" 
class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
Create Task
</button>
</a>
</div>
</x-slot>

<div class="py-12">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
@if(session('success'))
<div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
<span class="block sm:inline">{{ session('success') }}</span>
</div>
@endif

<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
<div class="p-6 text-gray-900">
@if($tasks->isEmpty())
<div class="text-center py-6">
    <svg class="mx-auto h-6 w-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
    </svg>
    <h3 class="mt-1 text-sm font-medium text-gray-900">No tasks</h3>
    <p class="mt-1 text-xs text-gray-500">Get started by creating a new task.</p>
</div>


@else
<div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
@foreach($tasks as $task)
<div class="bg-white dark:bg-card p-4 rounded-lg shadow-md">
<div class="flex justify-between items-start">
    <h3 class="text-lg font-bold text-zinc-800 dark:text-zinc-200">{{ $task->title }}</h3>
    <div class="flex space-x-2">
        <!-- Edit Button -->
        <a href="{{ route('tasks.edit', $task) }}" 
            class="inline-flex items-center space-x-1 px-4 py-2 bg-gradient-to-r from-blue-500 to-blue-600 text-secondary-foreground rounded shadow-sm text-sm font-medium hover:from-blue-600 hover:to-blue-700 hover:shadow-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-1 transition-all duration-150">
            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
            </svg>
            <span>Edit</span>
        </a>

        <!-- Delete Button -->
        <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="inline">
            @csrf
            @method('DELETE')
            <button type="submit" 
        class="bg-destructive text-destructive-foreground hover:bg-destructive/80 px-3 py-1 rounded inline-flex items-center space-x-1"
        onclick="return confirm('Are you sure you want to delete this task?')">
    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
    </svg>
    <span>Delete</span>
</button>

        </form>
    </div>
</div>


<p class="text-zinc-600 dark:text-zinc-400">{{ $task->description ?: 'No description provided.' }}</p>
<div class="flex flex-wrap gap-2 mt-2">
<span class="text-xs font-medium px-2.5 py-0.5 rounded {{ 
$task->priority === 'high' ? 'bg-red-100 text-red-800' : 
($task->priority === 'medium' ? 'bg-yellow-100 text-yellow-800' : 'bg-green-100 text-green-800') 
}}">
{{ ucfirst($task->priority) }}
</span>
<span class="text-xs font-medium px-2.5 py-0.5 rounded {{ 
$task->status === 'completed' ? 'bg-green-100 text-green-800' : 
($task->status === 'in_progress' ? 'bg-blue-100 text-blue-800' : 'bg-gray-100 text-gray-800') 
}}">
{{ ucfirst(str_replace('_', ' ', $task->status)) }}
</span>
@if($task->due_date)
<span class="inline-flex items-center px-2.5 py-0.5 rounded text-xs font-medium bg-purple-100 text-purple-800">
<svg class="mr-1.5 h-2 w-2 text-purple-400" fill="currentColor" viewBox="0 0 8 8">
    <circle cx="4" cy="4" r="3"/>
</svg>
Due: {{ $task->due_date->format('M d, Y') }}
</span>
@endif
</div>
</div>
@endforeach
</div>
@endif
</div>
</div>
</div>
</div>
</x-app-layout> 