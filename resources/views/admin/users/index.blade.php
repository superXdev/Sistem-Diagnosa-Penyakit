<x-app-layout>
	<x-slot name="title">Member</x-slot>

	@if(session()->has('success'))
	<x-alert type="success" message="{{ session()->get('success') }}" />
	@endif
	<x-card>
		<x-slot name="title">All Member</x-slot>
		<x-slot name="option">
			<a href="{{ route('admin.member.create') }}" class="btn btn-success">
				<i class="fas fa-plus"></i>
			</a>
		</x-slot>
		<table class="table table-bordered">
			<thead>
				<th>Name</th>
				<th>Username</th>
				<th>Role</th>
				<th>Action</th>
			</thead>
			<tbody>
				@forelse($users as $user)
				<tr>
					<td>{{ $user->name }}</td>
					<td>{{ $user->username }}</td>
					<td>
					@if(!empty($user->getRoleNames()))
				        @foreach($user->getRoleNames() as $v)
				           <label class="badge badge-{{ ($v == 'Admin') ? 'danger' : 'primary' }}">{{ $v }}</label>
				        @endforeach
				      @endif
					</td>
					<td class="text-center">
						<button type="button" class="btn btn-info mr-1 info"
						data-name="{{ $user->name }}" data-username="{{ $user->username }}" data-roles="{{ $user->getRoleNames() }}" data-created="{{ $user->created_at->format('d-M-Y H:m:s') }}">
							<i class="fas fa-eye"></i>
						</button>
						<a href="{{ route('admin.member.edit', $user->id) }}" class="btn btn-primary mr-1"><i class="fas fa-edit"></i></a> 
						<form action="{{ route('admin.member.delete', $user->id) }}" style="display: inline-block;" method="POST">
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
		<div class="mt-3">
			{{ $users->links() }}
		</div>
	</x-card>

	<x-modal>
		<x-slot name="id">infoModal</x-slot>
		<x-slot name="title">Information</x-slot>

		<div class="row mb-2">
			<div class="col-6">
				<b>Name</b>
			</div>
			<div class="col-6" id="name-modal"></div>
		</div>
		<div class="row mb-2">
			<div class="col-6">
				<b>Username</b>
			</div>
			<div class="col-6" id="username-modal"></div>
		</div>
		<div class="row mb-2">
			<div class="col-6">
				<b>Roles</b>
			</div>
			<div class="col-6" id="roles-modal"></div>
		</div>
		<div class="row mb-2">
			<div class="col-6">
				<b>Created</b>
			</div>
			<div class="col-6" id="created-modal"></div>
		</div>
	</x-modal>

	<x-slot name="script">
		<script>
			$('.info').click(function(e) {
				e.preventDefault()

				$('#name-modal').text($(this).data('name'))
				$('#username-modal').text($(this).data('username'))
				$('#roles-modal').text($(this).data('roles'))
				$('#created-modal').text($(this).data('created'))

				$('#infoModal').modal('show')
			})

			$('.delete').click(function(e){
				e.preventDefault()
				const ok = confirm('Ingin menghapus user?')

				if(ok) {
					$(this).parent().submit()
				}
			})
		</script>
	</x-slot>
</x-app-layout>