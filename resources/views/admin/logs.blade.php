<x-app-layout>
	<x-slot name="title">Activity Log</x-slot>

	@if(session()->has('success'))
	<x-alert type="danger" message="{{ session()->get('success') }}" />
	@endif

	<x-card>
		<x-slot name="title">All Activity Log</x-slot>
		<x-slot name="option">
			<form action="{{ route('admin.logs.delete') }}" method="post">
				@csrf
				<button type="submit" class="btn btn-danger">Delete 7 days ago</button>
			</form>
		</x-slot>

		<table class="table table-bordered mb-3">
			<thead>
				<th>Description</th>
				<th>Properties</th>
				<th>Date</th>
			</thead>
			<tbody>
				@forelse($logs as $log)
				<tr>
					<td>{{ $log->description }}</td>
					<td>
						@if(!empty($log->properties))
							@if(!empty($log->properties['attributes']))
								@foreach($log->properties["attributes"] as $key => $value)
								<ul>
									<li><b>{{ $key }}</b>: {{ $value }}</li>
								</ul>
								@endforeach
							@else
							@foreach($log->properties as $key => $value)
								<ul>
									@if(!empty($value))
									<li><b>{{ $key }}</b>: {{ $value }}</li>
									@endif
								</ul>
								@endforeach
							@endif
						@else
						<td class="text-center">empty</td>
						@endif
					</td>
					<td>{{ $log->created_at->format('d-M-Y H:m:s') }}</td>
				</tr>
				@empty
				<tr>
					<td colspan="3" class="text-center">Nothing Logs</td>
				</tr>
				@endforelse
			</tbody>
		</table>
		{{ $logs->links() }}
	</x-card>
</x-app-layout>