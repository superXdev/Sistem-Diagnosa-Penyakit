<x-guest-layout>
    <x-slot name="title">Password Confirm</x-slot>
    <x-card>

        <div class="mb-4 text-sm text-secondary">
            This is a secure area of the application. Please confirm your password before continuing.
        </div>

        <!-- Validation Errors -->
        <x-alert-error/>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <x-input type="password" name="password" text="Password"/>

            <div class="mt-4">
               <x-button for="submit" text="Confirm" type="primary" />
            </div>
        </form>
    </x-card>
</x-guest-layout>
