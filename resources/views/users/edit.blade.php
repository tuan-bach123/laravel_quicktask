<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("User Edit") }}
                </div>
            </div>
            
            <form action="{{ route('users.update', ['user' => $user->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mt-4">
                    <x-input-label for="first_name" :value="__('First_name')" />
                    <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name"
                        value="{{ $user->first_name }}" requied autocomplete="first_name" />
                </div>

                <div class="mt-4">
                    <x-input-label for="last_name" :value="__('Last_name')" />
                    <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name"
                        value="{{ $user->last_name }}" requied autocomplete="last_name" />
                </div>

                <x-primary-button class="mt-4">
                    {{ __("Edit") }}
                </x-primary-button>
            </form>
        </div>
    </div>
</x-app-layout>