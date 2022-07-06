<x-app-layout>
	<x-slot name="title">Edit Role</x-slot>
		<div class="row">
			<div class="col-md-6">
				<x-alert-error/>
				<x-card>
					<form action="{{ route('admin.roles.update', $role->id) }}" method="post">
						@csrf

						<x-input type="text" text="Name" name="name" value="{{ $role->name }}" />

							@foreach($permission as $value)
							<label class="mr-2">
								<input type="checkbox" value="{{ $value->id }}" name="permission[]" {{ in_array($value->id, $rolePermissions) ? 'checked' : '' }} /> {{ $value->name }}
							</label>
							
							@endforeach
						<div class="mt-3">
							<x-button type="primary" for="submit" text="Submit" />
						</div>
					</form>
				</x-card>
			</div>
		</div>
</x-app-layout>