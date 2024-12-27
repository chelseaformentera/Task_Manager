<x-app-layout>
<x-slot name="header">
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
{{ __('Edit Task') }}
</h2>
</x-slot>

<div class="py-12">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
<div class="p-6 text-gray-900">
<form method="POST" action="{{ route('tasks.update', $task) }}" class="space-y-6">
@csrf
@method('PUT')

<div>
<label for="title" class="block text-sm font-medium text-gray-700">Title</label>
<input type="text" name="title" id="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" value="{{ old('title', $task->title) }}" required>
@error('title')
<p class="mt-1 text-sm text-red-600">{{ $message }}</p>
@enderror
</div>

<div>
<label for="description" class="block text-sm font-medium text-gray-700">Description</label>
<textarea name="description" id="description" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ old('description', $task->description) }}</textarea>
@error('description')
<p class="mt-1 text-sm text-red-600">{{ $message }}</p>
@enderror
</div>

<div>
<label for="priority" class="block text-sm font-medium text-gray-700">Priority</label>
<select name="priority" id="priority" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
<option value="low" {{ old('priority', $task->priority) == 'low' ? 'selected' : '' }}>Low</option>
<option value="medium" {{ old('priority', $task->priority) == 'medium' ? 'selected' : '' }}>Medium</option>
<option value="high" {{ old('priority', $task->priority) == 'high' ? 'selected' : '' }}>High</option>
</select>
@error('priority')
<p class="mt-1 text-sm text-red-600">{{ $message }}</p>
@enderror
</div>

<div>
<label for="status" class="block text-sm font-medium text-gray-700">Status</label>
<select name="status" id="status" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
<option value="pending" {{ old('status', $task->status) == 'pending' ? 'selected' : '' }}>Pending</option>
<option value="in_progress" {{ old('status', $task->status) == 'in_progress' ? 'selected' : '' }}>In Progress</option>
<option value="completed" {{ old('status', $task->status) == 'completed' ? 'selected' : '' }}>Completed</option>
</select>
@error('status')
<p class="mt-1 text-sm text-red-600">{{ $message }}</p>
@enderror
</div>

<div>
<label for="due_date" class="block text-sm font-medium text-gray-700">Due Date</label>
<input type="date" name="due_date" id="due_date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" value="{{ old('due_date', $task->due_date?->format('Y-m-d')) }}">
@error('due_date')
<p class="mt-1 text-sm text-red-600">{{ $message }}</p>
@enderror
</div>

<div class="flex space-x-4">
    <button type="submit" 
    class="inline-flex items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 transition-all duration-200">
        Update Task
    </button>
    
    <a href="{{ route('tasks.index') }}" 
    class="inline-flex items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 transition-all duration-200">
        Cancel
    </a>
</div>
</form>
</div>
</div>
</div>
</div>
</x-app-layout> 