<x-guest-layout>
    <x-slot name="title">Email Verification</x-slot>
    <x-card>

        <x-slot name="title">Email Verification</x-slot>

        <div class="text-sm text-secondary">
            Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="alert alert-success">
                A new verification link has been sent to the email address you provided during registration.
            </div>
        @endif

        <div class="mt-4 text-center">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <x-button for="submit" text="Resend email verification" type="primary" />
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="btn btn-danger">
                    {{ __('Log out') }}
                </button>
            </form>
        </div>
    </x-card>
</x-guest-layout>
