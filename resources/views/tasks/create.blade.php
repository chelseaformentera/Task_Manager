<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Task') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-8">
                    <form method="POST" action="{{ route('tasks.store') }}" class="space-y-6">
                        @csrf

                        <div class="max-w-lg mx-auto p-6 bg-card rounded-lg shadow-md">
                            <h2 class="text-xl font-semibold mb-4 text-foreground">Create New Task</h2>

                            <!-- Title Field -->
                            <label class="block mb-2 text-muted-foreground" for="title">Title</label>
                            <input type="text" name="title" id="title" class="w-full p-2 border border-border rounded mb-4" placeholder="Enter task title" value="{{ old('title') }}" required>
                            @error('title')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror

                            <!-- Description Field -->
                            <label class="block mb-2 text-muted-foreground" for="description">Description</label>
                            <textarea name="description" id="description" class="w-full p-2 border border-border rounded mb-4" rows="4" placeholder="Enter task description">{{ old('description') }}</textarea>
                            @error('description')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror

                            <!-- Priority Field -->
                            <label class="block mb-2 text-muted-foreground" for="priority">Priority</label>
                            <select name="priority" id="priority" class="w-full p-2 border border-border rounded mb-4">
                                <option value="low" {{ old('priority') == 'low' ? 'selected' : '' }}>Low</option>
                                <option value="medium" {{ old('priority') == 'medium' ? 'selected' : '' }}>Medium</option>
                                <option value="high" {{ old('priority') == 'high' ? 'selected' : '' }}>High</option>
                            </select>
                            @error('priority')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror

                            <!-- Due Date Field -->
                            <label class="block mb-2 text-muted-foreground" for="due_date">Due Date</label>
                            <input type="date" name="due_date" id="due_date" class="w-full p-2 border border-border rounded mb-4" value="{{ old('due_date') }}">
                            @error('due_date')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror

                            <!-- Status Field -->
                            <label class="block mb-2 text-muted-foreground" for="status">Status</label>
                            <select name="status" id="status" class="w-full p-2 border border-border rounded mb-4">
                                <option value="pending" {{ old('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                            </select>
                            @error('status')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror

                            <!-- Buttons -->
                            <div class="flex justify-between">
                                <a href="{{ route('tasks.index') }}" class="bg-secondary text-secondary-foreground hover:bg-secondary/80 p-2 rounded">
                                    CANCEL
                                </a>
                                <button type="submit" class="bg-primary text-primary-foreground hover:bg-primary/80 p-2 rounded">
                                    CREATE TASK
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
