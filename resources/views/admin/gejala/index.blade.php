<x-app-layout>
    <x-slot name="title">Daftar Gejala</x-slot>
    <x-alert-error></x-alert-error>
    @if (session()->has('success'))
        <x-alert type="success" message="{{ session()->get('success') }}" />
    @endif
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-daun-tab" data-toggle="tab" href="#nav-home" role="tab"
                aria-controls="nav-home" aria-selected="true">Daun</a>
            <a class="nav-item nav-link" id="nav-batang-tab" data-toggle="tab" href="#nav-profile" role="tab"
                aria-controls="nav-profile" aria-selected="false">Batang</a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-daun-tab">
            <x-card>
                <x-slot name="option">
                    <div class="btn btn-success add">
                        <i class="fas fa-plus mr-1"></i> Tambahkan Gejala
                    </div>
                </x-slot>
                <table class="table table-hover border">
                    <thead>
                        <th>Kode</th>
                        <th>Nama Gejala</th>
                        <th>Kategori</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @forelse($gejalaDauns as $row)
                            <tr>
                                <td><b>{{ $row->kode }}</b></td>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->kategori }}</td>
                                <td>
                                    <div class="d-flex justify-between-space">
                                        <div>
                                            <button class="btn btn-primary btn-sm edit" data-id="{{ $row->id }}"><i
                                                    class="fas fa-edit"></i></button>
                                        </div>
                                        <form action="{{ route('admin.gejala.destroy', $row->id) }}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm ml-1 delete"><i
                                                    class="fas fa-trash"></i></button>
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
                <div class="mt-2">
                    {{ $gejalaDauns->links() }}
                </div>
            </x-card>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-batang-tab">
            <x-card>
                <x-slot name="option">
                    <div class="btn btn-success add">
                        <i class="fas fa-plus mr-1"></i> Tambahkan Gejala
                    </div>
                </x-slot>
                <table class="table table-hover border">
                    <thead>
                        <th>Kode</th>
                        <th>Nama Gejala</th>
                        <th>Kategori</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @forelse($gejalaBatangs as $row)
                            <tr>
                                <td><b>{{ $row->kode }}</b></td>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->kategori }}</td>
                                <td>
                                    <div class="d-flex justify-between-space">
                                        <div>
                                            <button class="btn btn-primary btn-sm edit"
                                                data-id="{{ $row->id }}"><i class="fas fa-edit"></i></button>
                                        </div>
                                        <form action="{{ route('admin.gejala.destroy', $row->id) }}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm ml-1 delete"><i
                                                    class="fas fa-trash"></i></button>
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
                <div class="mt-2">
                    {{ $gejalaBatangs->links() }}
                </div>
            </x-card>
        </div>
    </div>

    <x-modal title="Tambahkan Gejala" id="gejala">
        <form action="{{ route('admin.gejala.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nama">Kode Gejala</label>
                        <input type="text" class="form-control" name="kode" value="{{ $lastCode }}" disabled>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nama">Nama Gejala</label>
                        <input type="text" class="form-control" name="nama" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select name="kategori" class="form-control" required>
                            <option value="" disabled>Pilih Kategori</option>
                            <option value="daun">Daun</option>
                            <option value="batang">Batang</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="mt-2">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </x-modal>

    <x-modal title="Tambahkan Gejala" id="edit-gejala">
        <form action="{{ route('admin.gejala.update') }}" method="POST">
            @csrf
            <input type="hidden" name="id">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nama">Kode Gejala</label>
                        <input type="text" class="form-control" name="kode" value="{{ $lastCode }}"
                            disabled>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nama">Nama Gejala</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select name="kategori" class="form-control" required>
                            <option value="" disabled>Pilih Kategori</option>
                            <option value="daun">Daun</option>
                            <option value="batang">Batang</option>
                        </select>
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
                $('#gejala').modal('show')
            })

            $('.delete').click(function(e) {
                e.preventDefault()
                Swal.fire({
                    title: 'Hapus data gejala?',
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

                $.get(`{{ route('admin.gejala.json') }}?id=${id}`, function(res) {
                    $('#edit-gejala input[name="id"]').val(res.id)
                    $('#edit-gejala input[name="nama"]').val(res.nama)
                    $('#edit-gejala input[name="kode"]').val(res.kode)
                    $('#edit-gejala select[name="kategori"]').val(res.kategori)

                    $('#edit-gejala').modal('show')
                })
            })
        </script>
    </x-slot>
</x-app-layout>
