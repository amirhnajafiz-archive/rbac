<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 w-50 mx-auto">
        <ul class="list-group">
            @foreach($users as $user)
                <li class="list-group-item d-flex justify-content-between align-items-center my-2">
                    {{ $user->name }}
                </li>
            @endforeach
        </ul>
        <span class="d-block mr-auto my-4">
            {{ $users->links() }}
        </span>
    </div>
</x-app-layout>
