<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("User Create") }}
                </div>
            </div>
            
            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="mt-4">
                    <x-input-label for="first_name" :value="__('First_name')" />
                    <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name"
                        value="" requied autocomplete="first_name" />
                </div>

                <div class="mt-4">
                    <x-input-label for="last_name" :value="__('Last_name')" />
                    <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name"
                        value="" requied autocomplete="last_name" />
                </div>

                <div class="mt-4">
                    <x-input-label for="username" :value="__('Username')" />
                    <x-text-input id="username" class="block mt-1 w-full" type="text" name="username"
                        value="" requied autocomplete="username" />
                </div>

                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="text" name="email"
                        value="" requied autocomplete="email" />
                </div>

                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="block mt-1 w-full" type="text" name="password"
                        value="" requied autocomplete="password" />
                </div>

                <x-primary-button class="mt-4">
                    {{ __("Create") }}
                </x-primary-button>
            </form>
        </div>
    </div>
</x-app-layout>