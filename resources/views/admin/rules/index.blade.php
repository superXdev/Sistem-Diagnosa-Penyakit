<x-app-layout>
	<x-slot name="head">
		<link href="{{ asset('dist/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
	</x-slot>

	<x-slot name="title">Data Rules</x-slot>

	@if(session()->has('success'))
	<x-alert type="success" message="{{ session()->get('success') }}" />
	@endif
	<x-card>
		<div class="row">
			<div class="col-md-8">
					<form action="{{ route('admin.rules.update', $data_penyakit->id) }}" method="POST" id="update_rules">
						@csrf
				<div class="table-responsive">
						<table class="table align-items-center table-flush table-hover border" id="dataTableHover">
						<thead class="thead-light">
							<tr>
								<th style="width: 10%;">No.</th>
								<th style="width: 60%;">Gejala</th>
								<th style="width: 20%;">Nilai</th>
								<th style="width: 10%;"></th>
							</tr>
						</thead>
						<tbody>
							@php $rows = 1; @endphp

							@foreach($gejala_penyakit->get() as $row)
							<tr>
								<td>{{ $rows }}</td>
								<td>{{ $row->nama }}</td>
								<td>
									<input type="number" step="0.2" class="form-control form-control-sm" value="{{ $row->pivot->value_cf }}" name="gejala-{{ $row->id }}">
								</td>
								<td>
									<div class="custom-control custom-switch">
						                <input type="checkbox" class="custom-control-input check" data-id="{{ $row->id }}" id="gejala-{{ $row->id }}" checked>
						                <label class="custom-control-label" for="gejala-{{ $row->id }}"></label>
						             </div>
								</td>
							</tr>
							@php $rows++; @endphp
							@endforeach

							@foreach($gejala as $row)
							@if(!in_array($row->id, $gejala_id))
							<tr>
								<td>{{ $rows }}</td>
								<td>{{ $row->nama }}</td>
								<td>
						            <input type="number" step="0.2" class="form-control form-control-sm" name="gejala-{{ $row->id }}" disabled>
								</td>
								<td>
									<div class="custom-control custom-switch">
						                <input type="checkbox" class="custom-control-input check" data-id="{{ $row->id }}" id="gejala-{{ $row->id }}">
						                <label class="custom-control-label" for="gejala-{{ $row->id }}"></label>
						              </div>
								</td>
							</tr>
							@php $rows++; @endphp
							@endif
							@endforeach
						</tbody>
					</table>
				</div>
					</form>
			</div>

			<div class="col-md-4">
				<div class="list-group">
					@foreach($penyakit as $row)
					<a href="{{ route('admin.rules', $row->id) }}" class="list-group-item list-group-item-action {{ ($data_penyakit->nama == $row->nama) ? 'active' : '' }}">
					{{ $row->nama }}
					</a>
					@endforeach
				</div>
				<div class="mt-3">
					<button class="btn-primary btn save">Simpan</button>
					<a href="" class="btn-warning btn">Reset</a> 
				</div>
			</div>
		</div>
	</x-card>

	<x-slot name="script">
		<!-- Page level plugins -->
		<script src="{{ asset('dist/vendor/datatables/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('dist/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
		<script>
			$('.save').click(function() {
				$('#update_rules').submit()
			})

			$('.check').change(function() {
				const id = $(this).data('id')

				if(this.checked) {
					$(`input[name="gejala-${id}"]`).removeAttr('disabled')
				} else {
					$(`input[name="gejala-${id}"]`).attr('disabled', '')
					$(`input[name="gejala-${id}"]`).val('')
				}
			})
		</script>
	</x-slot>
</x-app-layout>