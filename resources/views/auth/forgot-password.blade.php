<x-guest-layout>
    <x-slot name="title">Forgot Confirm</x-slot>
    <x-card>

        <div class="mb-4 text-sm text-secondary">
            Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
        </div>

        <!-- Session Status -->
        @if(session()->has('status'))
        <div class="alert alert-info">
            {{ session('status') }}
        </div>
        @endif

        <!-- Validation Errors -->
        <x-alert-error/>

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <x-input type="email" name="email" text="Email"/>

            <div class="text-center mt-4">
                <x-button for="submit" text="Sent Email Reset Password" type="primary" />
            </div>
        </form>
    </x-card>
</x-guest-layout>
