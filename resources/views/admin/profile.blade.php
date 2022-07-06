<x-app-layout>
	<x-slot name="title">
		Your Profile
	</x-slot>

    <x-slot name="head">
        <link href="{{ asset('dist/vendor/filepond/filepond.css') }}" rel="stylesheet" />
    </x-slot>

	<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
            	@if (session()->has('success'))
            		<x-alert type="success" message="{{ session()->get('success') }}" />
            	@elseif(session()->has('failed'))
            		<x-alert type="failed" message="{{ session()->get('failed') }}" />
            	@endif
            	
                <x-card>

                	<div class="text-center mb-2">
                		<img src="{{ asset((auth()->user()->avatar) ? 'storage/'.auth()->user()->avatar : 'dist/img/boy.png') }}" alt="" style="border: 1px solid rgba(0,0,0,.25); border-radius: 10px; width: 200px">
                	</div>

                	<form action="" method="POST">
                		@csrf

                        <input type="file" name="avatar">
                		<x-input type="text" text="Full Name" name="name" value="{{ auth()->user()->name }}" />

	                	<x-input type="password" text="Old Password" name="old_password" />
	                	<x-input type="password" text="New Password" name="new_password" />

	                	<div class="text-center">
	                		<x-button type="primary" for="submit" text="Update Profile" />
	                	</div>
                	</form>
                </x-card>
            </div>
        </div>
    </div>

    <x-slot name="script">
        <script src="{{ asset('dist/vendor/filepond/filepond.js') }}"></script>

        <script>
        const inputElement = document.querySelector('input[type="file"]');
        const pond = FilePond.create( inputElement );

        FilePond.setOptions({
            server: {
                url: '{{ route('admin.profile.upload') }}',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            }
        });
        </script>
    </x-slot>
</x-app-layout>