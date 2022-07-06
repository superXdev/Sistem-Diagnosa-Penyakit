<x-guest-layout>
    <x-slot name="title">
        Login
    </x-slot>

    <x-auth-card>
    
        {{-- show alert if there is errors --}}
        <x-alert-error/>
        
        <x-slot name="title">
            Login
        </x-slot>
        <form action="{{ route('login') }}" method="POST">
            @csrf

            <!-- Email field -->
            <x-input type="text" text="Username" name="username" />

            <!-- Password field -->
            <x-input type="password" text="Password" name="password" />
            
            <x-button type="primary btn-block" text="Login" for="submit" />
        </form>
        <div class="mt-4 text-center">
            <hr>
            <a href="{{ route('register') }}" class="text-primary">Create new account?</a>
        </div>
    </x-auth-card>
</x-guest-layout>
