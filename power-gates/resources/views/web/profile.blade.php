<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12 w-50 mx-auto">
        <div class="card">
            <div class="card-header">
                Your profile
            </div>
            <div class="card-body p-5">
                <h5 class="card-title mb-5">
                    {{ 'Name: ' . $user->name }}
                </h5>
                <p class="card-text mb-5">
                    {{ 'Email: ' . $user->email }}
                </p>
                <span class="btn btn-primary">
                    {{ 'Joined: ' . $user->created_at }}
                </span>
            </div>
        </div>
    </div>
</x-app-layout>
