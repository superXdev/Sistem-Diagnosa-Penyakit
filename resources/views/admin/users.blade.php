<x-app-layout>
	<x-slot name="title">Users</x-slot>

	<x-card>
		<table class="table table-bordered">
			<thead>
				<th>Name</th>
				<th>Email</th>
				<th>Role</th>
				<th>Action</th>
			</thead>
			<tbody>
				@forelse($users as $user)
				<tr>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
					<td>
						@if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
           <label class="badge badge-success">{{ $v }}</label>
        @endforeach
      @endif
					</td>
					<td>
						<a href="" class="btn btn-primary mr-1"><i class="fas fa-edit"></i></a> 
						<button class="btn btn-danger"><i class="fas fa-trash"></i></button>
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
</x-app-layout>