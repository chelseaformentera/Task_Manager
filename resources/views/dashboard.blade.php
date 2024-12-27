<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-foreground leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-card overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-foreground">
                    <h3 class="text-lg font-medium mb-4">Welcome {{ Auth::user()->name }}!</h3>
                    <a href="{{ route('tasks.index') }}" 
                       class="inline-flex items-center px-4 py-2 bg-primary text-primary-foreground border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest hover:bg-primary/80">
                        View Tasks
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
