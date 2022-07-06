<x-app-layout>
	<x-slot name="title">New Role</x-slot>
		<div class="row">
			<div class="col-md-6">
				<x-alert-error/>
				<x-card>
					<form action="{{ route('admin.roles.create') }}" method="post">
						@csrf

						<x-input type="text" text="Name" name="name" />
							<p>
								<input type="checkbox" id="check-all" /> All
							</p>
							@foreach($permission as $value)
							<label class="mr-2">
								<input type="checkbox" value="{{ $value->id }}" name="permission[]" /> {{ $value->name }}
							</label>
							
							@endforeach
						<div class="mt-3">
							<x-button type="primary" for="submit" text="Submit" />
						</div>
					</form>
				</x-card>
			</div>
		</div>

		<x-slot name="script">
			<script>
				$('#check-all').on('change', function(){
					if($(this).prop('checked')) {
						$('input:checkbox').prop('checked', true)
					} else {
						$('input:checkbox').prop('checked', false)
					}
				})
			</script>
		</x-slot>
</x-app-layout>