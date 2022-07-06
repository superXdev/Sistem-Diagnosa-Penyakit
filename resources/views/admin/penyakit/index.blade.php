<x-app-layout>
	<x-slot name="title">Daftar Penyakit</x-slot>
	<x-alert-error></x-alert-error>
	@if(session()->has('success'))
	<x-alert type="success" message="{{ session()->get('success') }}" />
	@endif
	<x-card>
		<x-slot name="option">
			<div class="btn btn-success add">
				<i class="fas fa-plus mr-1"></i> Tambahkan Penyakit
			</div>
		</x-slot>
		<table class="table table-hover border">
			<thead>
				<th>Kode</th>
				<th>Nama penyakit</th>
				<th>Penyebab</th>
				<th></th>
			</thead>
			<tbody>
				@forelse($penyakit as $row)
				<tr>
					<td><b>{{ $row->kode }}</b></td>
					<td>{{ $row->nama }}</td>
					<td>{{ \Str::limit($row->penyebab, 180) }}</td>
					<td>
						<div class="d-flex justify-between-space">
							<div>
								<button class="btn btn-primary btn-sm edit" data-id="{{ $row->id }}"><i class="fas fa-edit"></i></button>
							</div>
							<form action="{{ route('admin.penyakit.destroy', $row->id) }}" method="post">
								@csrf
								<button type="submit" class="btn btn-danger btn-sm ml-1 delete"><i class="fas fa-trash"></i></button>
							</form>
						</div>
					</td>
				</tr>
				@empty
				<tr>
					<td colspan="3" class="text-center">No Data</td>
				</tr>
				@endforelse
			</tbody>
		</table>
	</x-card>

	<x-modal title="Tambahkan penyakit" id="penyakit">
		<form action="{{ route('admin.penyakit.store') }}" method="POST">
			@csrf
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label for="nama">Kode penyakit</label>
						<input type="text" class="form-control" name="kode">
					</div>
				</div>
				<div class="col-md-8">
					<div class="form-group">
						<label for="nama">Nama penyakit</label>
						<input type="text" class="form-control" name="nama">
					</div>
				</div>
			</div>
			<div class="row mt-2">
				<div class="col-md-12">
					<div class="form-group">
						<label for="penyebab">Keterangan penyebab</label>
						<textarea name="penyebab" cols="30" rows="6" class="form-control"></textarea>
					</div>
				</div>
			</div>
			<div class="mt-2">
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
		</form>
	</x-modal>

	<x-modal title="Edit penyakit" id="edit-penyakit">
		<form action="{{ route('admin.penyakit.update') }}" method="POST">
			@csrf
			<input type="hidden" name="id">
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label for="nama">Kode penyakit</label>
						<input type="text" class="form-control" name="kode">
					</div>
				</div>
				<div class="col-md-8">
					<div class="form-group">
						<label for="nama">Nama penyakit</label>
						<input type="text" class="form-control" name="nama">
					</div>
				</div>
			</div>
			<div class="row mt-2">
				<div class="col-md-12">
					<div class="form-group">
						<label for="penyebab">Keterangan penyebab</label>
						<textarea name="penyebab" cols="30" rows="6" class="form-control"></textarea>
					</div>
				</div>
			</div>
			<div class="mt-2">
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
		</form>
	</x-modal>

	<x-slot name="script">
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script>
			$('.add').click(function() {
				$('#penyakit').modal('show')
			})

			$('.delete').click(function(e) {
				e.preventDefault()
				Swal.fire({
				  title: 'Hapus data penyakit?',
				  text: "Kamu tidak akan bisa mengembalikannya kembali!",
				  icon: 'warning',
				  showCancelButton: true,
				  confirmButtonColor: '#d33',
				  cancelButtonColor: '#3085d6',
				  cancelButtonText: 'Batal',
				  confirmButtonText: 'Ya, hapus!'
				}).then((result) => {
				  if (result.isConfirmed) {
				    $(this).parent().submit()
				  }
				})
			})

			$('.edit').click(function() {
				const id = $(this).data('id')

				$.get(`{{ route('admin.penyakit.json') }}?id=${id}`, function(res) {
					$('#edit-penyakit input[name="id"]').val(res.id)
					$('#edit-penyakit input[name="nama"]').val(res.nama)
					$('#edit-penyakit input[name="kode"]').val(res.kode)
					$('#edit-penyakit textarea').text(res.penyebab)

					$('#edit-penyakit').modal('show')
				})
			})
		</script>
	</x-slot>
</x-app-layout>