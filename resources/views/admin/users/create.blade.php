<x-app-layout>
	<x-slot name="title">New User</x-slot>
	
	{{-- show alert if there is errors --}}
	<x-alert-error/>

	@if(session()->has('success'))
	<x-alert type="success" message="{{ session()->get('success') }}" />
	@endif
	<x-card>
		<form action="{{ route('admin.member.create') }}" method="post">
			@csrf

			<div class="row">
				<div class="col-md-6">
					<x-input text="Name" name="name" type="text" />
				</div>
				<div class="col-md-6">
					<x-input text="Username" name="username" type="text" />
				</div>
			</div>


			<div class="row">
				<div class="col-md-6">
			        <x-input text="Password" name="password" type="password" />
				</div>
				<div class="col-md-6">
					<x-input text="Password" name="confirm-password" type="password" />
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<x-select name="roles" text="Roles" :values="$roles" />
				</div>
			</div>

			<x-button type="primary" text="Submit" for="submit" />
			
		</form>
	</x-card>
</x-app-layout>