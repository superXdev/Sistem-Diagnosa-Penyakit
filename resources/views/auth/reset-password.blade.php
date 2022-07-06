<x-guest-layout>
    <x-slot name="title">Reset Password</x-slot>
    <x-card>

        <!-- Validation Errors -->
        <x-alert-error/>

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <x-input type="email" name="email" text="Email" value="old('email', $request->email)"/>

            <!-- Password -->
            <x-input type="password" name="password" text="Password"/>

            <!-- Confirm Password -->
            <x-input type="password" name="password_confirmation" text="Confirm Password"/>

            <div class="mt-4">
                <x-button for="submit" text="Reset Password" type="primary" />
            </div>
        </form>
    </x-card>
</x-guest-layout>
