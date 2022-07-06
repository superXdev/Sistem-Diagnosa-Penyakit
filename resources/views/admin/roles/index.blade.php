<x-app-layout>
	<x-slot name="title">Roles</x-slot>

	@if(session()->has('success'))
	<x-alert type="success" message="{{ session()->get('success') }}" />
	@endif
	<x-card>
		<x-slot name="title">All Roles</x-slot>
		<x-slot name="option">
			<a href="{{ route('admin.roles.create') }}" class="btn btn-success">
				<i class="fas fa-plus"></i>
			</a>
		</x-slot>
		<table class="table table-bordered">
			<thead>
				<th>ID</th>
				<th>Role Name</th>
				<th>Action</th>
			</thead>
			<tbody>
				@forelse($roles as $role)
				<tr>
					<td>{{ $role->id }}</td>
					<td>{{ $role->name }}</td>
					<td class="text-center">
						<a href="{{ route('admin.roles.edit', $role->id) }}" class="btn btn-primary mr-1"><i class="fas fa-edit"></i></a> 
						<form action="{{ route('admin.roles.delete', $role->id) }}" style="display: inline-block;" method="POST">
							@csrf
							<button type="button" class="btn btn-danger delete"><i class="fas fa-trash"></i></button>
						</form>
					</td>
				</tr>
				@empty
				<tr>
					<td colspan="3" class="text-center">No Member</td>
				</tr>
				@endforelse
			</tbody>
		</table>
	</x-card>

	<x-slot name="script">
		<script>
			$('.delete').click(function(e){
				e.preventDefault()
				const ok = confirm('Ingin menghapus roles?')

				if(ok) {
					$(this).parent().submit()
				}
			})
		</script>
	</x-slot>
</x-app-layout>