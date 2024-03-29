<x-app-layout>
    <x-slot name="title">Daftar Penyakit</x-slot>
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
                        <i class="fas fa-plus mr-1"></i> Tambahkan Penyakit
                    </div>
                </x-slot>
                <table class="table table-hover border">
                    <thead>
                        <th>Kode</th>
                        <th>Nama penyakit</th>
                        <th>Kategori</th>
                        <th>Penyebab</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @forelse($penyakitDauns as $row)
                            <tr>
                                <td><b>{{ $row->kode }}</b></td>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->kategori ? $row->kategori : '-' }}</td>
                                <td>{{ \Str::limit($row->penyebab, 180) }}</td>
                                <td>
                                    <div class="d-flex justify-between-space">
                                        <div>
                                            <button class="btn btn-primary btn-sm edit" data-id="{{ $row->id }}"><i
                                                    class="fas fa-edit"></i></button>
                                        </div>
                                        <form action="{{ route('admin.penyakit.destroy', $row->id) }}" method="post">
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
            </x-card>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-batang-tab">
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
                        <th>Kategori</th>
                        <th>Penyebab</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @forelse($penyakitBatangs as $row)
                            <tr>
                                <td><b>{{ $row->kode }}</b></td>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->kategori ? $row->kategori : '-' }}</td>
                                <td>{{ \Str::limit($row->penyebab, 180) }}</td>
                                <td>
                                    <div class="d-flex justify-between-space">
                                        <div>
                                            <button class="btn btn-primary btn-sm edit"
                                                data-id="{{ $row->id }}"><i class="fas fa-edit"></i></button>
                                        </div>
                                        <form action="{{ route('admin.penyakit.destroy', $row->id) }}" method="post">
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
            </x-card>
        </div>
    </div>
</x-app-layout>
