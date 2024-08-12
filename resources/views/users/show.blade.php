<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Detail') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Name: ") }} {{ $user->full_name }}
                </div>

                <div class="p-6 text-gray-900">
                    {{ __("Email: ") }} {{ $user->email }}
                </div>
            </div>

            <x-primary-button class="mt-4" onclick="window.location=`{{ route('users.edit', $user->id) }}`">
                {{ __("Edit") }}
            </x-primary-button>
            <x-primary-button class="mt-4"
                onclick="window.location=`{{ route('tasks.create', ['user_id' => $user->id]) }}`">
                {{ __("Create") }}
            </x-primary-button>

            <table class="table-auto w-full mt-4">
                <thead>
                    <tr>
                        <th class="text-gray-900" scope="col">#</th>
                        <th class="text-gray-900" scope="col">Title</th>
                        <th class="text-gray-900" scope="col">Content</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($tasks as $index => $task)
                        <tr>
                            <th class="text-gray-900" scope="row">{{ $index }}</th>
                            <th class="text-gray-900">{{ $task->title }}</th>
                            <th class="text-gray-900">{{ $task->content }}</th>
                            <th class="text-gray-900">
                                <x-primary-button class="mt-4"
                                    onclick="window.location=`{{ route('tasks.edit', $task->id) }}`">
                                    {{ __("Edit") }}
                                </x-primary-button>

                                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <x-primary-button class="mt-4">
                                        {{ __("Delete") }}
                                    </x-primary-button>
                                </form>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>