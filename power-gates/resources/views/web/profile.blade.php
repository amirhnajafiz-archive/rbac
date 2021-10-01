<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12 w-50 mx-auto">
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center my-2">
                {{ 'Name: ' . $user->name }}
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center my-2">
                {{ 'Email: ' . $user->email }}
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center my-2">
                {{ 'Joined: ' . $user->created_at }}
            </li>
        </ul>
    </div>
</x-app-layout>
