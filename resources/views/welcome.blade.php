<x-app-layout>
    <div class="relative min-h-screen bg-gradient-to-b from-white to-blue-50 flex items-center justify-center">
        <div class="max-w-4xl mx-auto p-6 text-center">
            <!-- Main Content -->
            <h1 class="text-5xl font-bold text-blue-600 mb-4">
                Welcome to Task Manager
            </h1>
            
            <p class="text-2xl text-gray-700 mb-8">
                A simple and efficient way to manage your tasks and stay organized.
            </p>

            <!-- Action Buttons -->
            <div class="flex justify-center gap-4 mb-12">
                @auth
                    <a href="{{ route('dashboard') }}" 
                    class="px-6 py-3 bg-white text-blue-600 text-lg font-semibold rounded-lg border-2 border-blue-600 hover:bg-blue-50 transition-colors">
                        Go to Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" 
                    class="px-6 py-3 bg-white text-blue-600 text-lg font-semibold rounded-lg border-2 border-blue-600 hover:bg-blue-50 transition-colors">
                        Log in
                    </a>
                    <a href="{{ route('register') }}" 
                       class="px-6 py-3 bg-white text-blue-600 text-lg font-semibold rounded-lg border-2 border-blue-600 hover:bg-blue-50 transition-colors">
                        Register
                    </a>
                @endauth
            </div>

            <!-- Features -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-card p-4 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Organize Tasks</h3>
                    <p class="text-muted-foreground">Keep track of all your tasks in one place.</p>
                </div>

                <div class="bg-card p-4 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Set Due Dates</h3>
                    <p class="text-muted-foreground">Never miss a deadline with task due dates.</p>
                </div>

                <div class="bg-card p-4 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Track Progress</h3>
                    <p class="text-muted-foreground">Monitor your task completion status.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
