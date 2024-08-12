<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("User List") }}
                </div>
            </div>

            <x-primary-button class="mt-4" onclick="window.location=`{{ route('users.create') }}`">
                {{ __("Create") }}
            </x-primary-button>

            <table class="table-auto w-full mt-4">
                <thead>
                    <tr>
                        <th class="text-gray-900" scope="col">#</th>
                        <th class="text-gray-900" scope="col">Name</th>
                        <th class="text-gray-900" scope="col">Username</th>
                        <th class="text-gray-900" scope="col">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($users as $index => $user)
                        <tr>
                            <th class="text-gray-900" scope="row">{{ $index }}</th>
                            <th class="text-gray-900">
                                <a href="{{ route('users.show', ['id' => $user->id]) }}">
                                    {{ $user->full_name }}
                                </a>
                            </th>
                            <th class="text-gray-900">{{ $user->username }}</th>
                            <th class="text-gray-900">
                                <div style="display: inline-table;">
                                    <x-primary-button class="mt-4"
                                        onclick="window.location=`{{ route('users.edit', ['id' => $user->id]) }}`">
                                        {{ __("Edit") }}
                                    </x-primary-button>

                                    <form action="{{ route('users.destroy', ['id' => $user->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <x-primary-button class="mt-4">
                                            {{ __("Delete") }}
                                        </x-primary-button>
                                    </form>
                                </div>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>