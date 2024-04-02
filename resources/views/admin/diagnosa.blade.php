<x-app-layout>
    <x-slot name="title">
        Diagnosa penyakit
    </x-slot>

    <x-slot name="head">
        <style>
            .red-border {
                border: 1px solid rgba(227, 39, 79, .8);
            }

            .green-border {
                border: 1px solid rgba(50, 179, 104, .8);
            }
        </style>
    </x-slot>

    <section class="row">

        {{-- chart section --}}
        <div class="col-md-12">
            <x-alert-error></x-alert-error>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.diagnosa') }}" method="post">
                        @csrf

                        @role('Admin')
                            <label for=""><b><i class="fas fa-user mr-1"></i> Nama</b></label>
                            <input type="text" class="form-control mb-3 w-50" name="nama">
                        @endrole

                        <p>Pilih gejala yang sedang dirasakan.</p>

                        <label for=""><b><i class="fas fa-th mr-1"></i> Gejala-gejala</b></label>

                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-daun-tab" data-toggle="tab" href="#nav-home"
                                    role="tab" aria-controls="nav-home" aria-selected="true">Daun</a>
                                <a class="nav-item nav-link" id="nav-batang-tab" data-toggle="tab" href="#nav-profile"
                                    role="tab" aria-controls="nav-profile" aria-selected="false">Batang</a>
                            </div>
                        </nav>

                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-daun-tab">
                                <div class="row">
                                    @foreach ($gejala->where('kategori', 'daun') as $key => $value)
                                        <div class="col-md-6">
                                            <div
                                                class="d-flex align-items-center justify-content-between border mb-2 p-2">
                                                <div>
                                                    <span class="ml-2">{{ $value->nama }}</span>
                                                </div>
                                                <div>
                                                    <select name="diagnosa[]" id=""
                                                        class="form-control form-control-sm red-border">
                                                        <option value="{{ $value->id }}+1">Sangat Yakin</option>
                                                        <option value="{{ $value->id }}+0.8">Yakin</option>
                                                        <option value="{{ $value->id }}+0.6">Cukup Yakin</option>
                                                        <option value="{{ $value->id }}+0.4">Kurang Yakin</option>
                                                        <option value="{{ $value->id }}+0.2">Tidak Tahu</option>
                                                        <option value="{{ $value->id }}+0">Tidak Yakin</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                aria-labelledby="nav-batang-tab">
                                <div class="row">
                                    @foreach ($gejala->where('kategori', 'batang') as $key => $value)
                                        <div class="col-md-6">
                                            <div
                                                class="d-flex align-items-center justify-content-between border mb-2 p-2">
                                                <div>
                                                    <span class="ml-2">{{ $value->nama }}</span>
                                                </div>
                                                <div>
                                                    <select name="diagnosa[]" id=""
                                                        class="form-control form-control-sm red-border">
                                                        <option value="{{ $value->id }}+1">Sangat Yakin</option>
                                                        <option value="{{ $value->id }}+0.8">Yakin</option>
                                                        <option value="{{ $value->id }}+0.6">Cukup Yakin</option>
                                                        <option value="{{ $value->id }}+0.4">Kurang Yakin</option>
                                                        <option value="{{ $value->id }}+0.2">Tidak Tahu</option>
                                                        <option value="{{ $value->id }}+0">Tidak Yakin</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary">Diagnosa sekarang</button>
                        </div>
                    </form>
                </div>
                </form>
            </div>
        </div>
    </section>

    <x-slot name="script">
        <script>
            $('button[type="submit"]').click(function() {
                $(this).attr('disabled')
            })

            $('select[name="diagnosa[]"]').on('change', function() {
                if (this.value == "") {
                    $(this).attr('class', 'form-control form-control-sm red-border')
                } else {
                    $(this).attr('class', 'form-control form-control-sm green-border')
                }
            })
        </script>
    </x-slot>
</x-app-layout>
