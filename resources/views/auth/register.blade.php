<x-guest-layout>
    <x-slot name="title">
        Register
    </x-slot>

    <x-auth-card>
    
        {{-- show alert if there is errors --}}
        <x-alert-error/>

        <x-slot name="title">
            Register
        </x-slot>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <!-- Name field -->
            <x-input type="text" text="Name" name="name" />

            <!-- Email field -->
            <x-input type="text" text="Username" name="username" />

            <!-- Password field -->
            <x-input type="password" text="Password" name="password" />

            <!-- Password confirmation field -->
            <x-input type="password" text="Password Confirmation" name="password_confirmation" />
            
            <x-button type="primary btn-block" text="Register" for="submit" />
        </form>
        <div class="text-center mt-4">
            <hr>
            <a class="font-weight-bold small" href="{{ route('login') }}">Already have an account?</a>
        </div>
    </x-auth-card>
</x-guest-layout>
