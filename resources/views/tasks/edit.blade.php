<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Task Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Task Edit") }}
                </div>
            </div>
            
            <form action="{{ route('tasks.update', ['task' => $task->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mt-4">
                    <x-input-label for="title" :value="__('Title')" />
                    <x-text-input id="title" class="block mt-1 w-full" type="text" name="title"
                        value="{{ $task->title }}" requied autocomplete="title" />
                </div>

                <div class="mt-4">
                    <x-input-label for="content" :value="__('Content')" />
                    <x-text-input id="content" class="block mt-1 w-full" type="text" name="content"
                        value="{{ $task->content }}" requied autocomplete="content" />
                </div>

                <x-primary-button class="mt-4">
                    {{ __("Edit") }}
                </x-primary-button>
            </form>
        </div>
    </div>
</x-app-layout>