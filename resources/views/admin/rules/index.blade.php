<x-app-layout>
    <x-slot name="head">
        <link href="{{ asset('dist/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    </x-slot>

    <x-slot name="title">Data Rules</x-slot>

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
                <div class="row">
                    <div class="col-md-8">
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush table-hover border" id="dataTableHover">
                                <thead class="thead-light">
                                    <tr>
                                        <th>No.</th>
                                        <th>Gejala</th>
                                        <th>Kategori</th>
                                        <th>Nilai</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $rows = 1; @endphp

                                    @foreach ($gejala_penyakit->get()->where('kategori', 'daun') as $row)
                                        <tr>
                                            <td>{{ $rows }}</td>
                                            <td>{{ $row->nama }}</td>
                                            <td>{{ $row->kategori }}</td>
                                            <td>
                                                <input type="number" step="0.2"
                                                    class="form-control form-control-sm"
                                                    value="{{ $row->pivot->value_cf }}"
                                                    name="gejala-{{ $row->kategori }}-{{ $row->id }}">
                                            </td>
                                            <td>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input check"
                                                        data-id="{{ $row->id }}"
                                                        name="gejala-{{ $row->kategori }}[]"
                                                        data-kategori="{{ $row->kategori }}"
                                                        id="gejala-{{ $row->kategori }}-{{ $row->id }}"
                                                        {{ in_array($row->id, $gejala_id) ? 'checked' : '' }}>
                                                    <label class="custom-control-label"
                                                        for="gejala-{{ $row->kategori }}-{{ $row->id }}"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        @php $rows++; @endphp
                                    @endforeach

                                    @foreach ($gejala->where('kategori', 'daun') as $row)
                                        @if (!in_array($row->id, $gejala_id))
                                            <tr>
                                                <td>{{ $rows }}</td>
                                                <td>{{ $row->nama }}</td>
                                                <td>{{ $row->kategori }}</td>
                                                <td>
                                                    <input type="number" step="0.2"
                                                        class="form-control form-control-sm"
                                                        name="gejala-{{ $row->kategori }}-{{ $row->id }}"
                                                        disabled>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input check"
                                                            data-id="{{ $row->id }}"
                                                            name="gejala-{{ $row->kategori }}[]"
                                                            data-kategori="{{ $row->kategori }}"
                                                            id="gejala-{{ $row->kategori }}-{{ $row->id }}">
                                                        <label class="custom-control-label"
                                                            for="gejala-{{ $row->kategori }}-{{ $row->id }}"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            @php $rows++; @endphp
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="list-group">
                            @foreach ($penyakit->where('kategori', 'daun') as $row)
                                <a href="{{ route('admin.rules', $row->id) }}"
                                    class="list-group-item list-group-item-action {{ $data_penyakit->nama == $row->nama ? 'active' : '' }}">
                                    {{ $row->nama }}
                                </a>
                            @endforeach
                        </div>
                        <div class="mt-3">
                            <button class="btn-primary btn save" type="submit">Simpan</button>
                            <a href="" class="btn-warning btn">Reset</a>
                        </div>
                    </div>
                </div>
            </x-card>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-batang-tab">
            <x-card>
                <div class="row">
                    <div class="col-md-8">
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush table-hover border" id="dataTableHover">
                                <thead class="thead-light">
                                    <tr>
                                        <th>No.</th>
                                        <th>Gejala</th>
                                        <th>Kategori</th>
                                        <th>Nilai</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $rows = 1; @endphp

                                    @foreach ($gejala_penyakit->get()->where('kategori', 'batang') as $row)
                                        <tr>
                                            <td>{{ $rows }}</td>
                                            <td>{{ $row->nama }}</td>
                                            <td>{{ $row->kategori }}</td>
                                            <td>
                                                <input type="number" step="0.2"
                                                    class="form-control form-control-sm"
                                                    value="{{ $row->pivot->value_cf }}"
                                                    name="gejala-{{ $row->kategori }}-{{ $row->id }}">
                                            </td>
                                            <td>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input check"
                                                        data-id="{{ $row->id }}"
                                                        name="gejala-{{ $row->kategori }}[]"
                                                        data-kategori="{{ $row->kategori }}"
                                                        id="gejala-{{ $row->kategori }}-{{ $row->id }}"
                                                        {{ in_array($row->id, $gejala_id) ? 'checked' : '' }}>
                                                    <label class="custom-control-label"
                                                        for="gejala-{{ $row->kategori }}-{{ $row->id }}"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        @php $rows++; @endphp
                                    @endforeach

                                    @foreach ($gejala->where('kategori', 'batang') as $row)
                                        @if (!in_array($row->id, $gejala_id))
                                            <tr>
                                                <td>{{ $rows }}</td>
                                                <td>{{ $row->nama }}</td>
                                                <td>{{ $row->kategori }}</td>
                                                <td>
                                                    <input type="number" step="0.2"
                                                        class="form-control form-control-sm"
                                                        name="gejala-{{ $row->kategori }}-{{ $row->id }}"
                                                        disabled>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input check"
                                                            data-id="{{ $row->id }}"
                                                            name="gejala-{{ $row->kategori }}[]"
                                                            data-kategori="{{ $row->kategori }}"
                                                            id="gejala-{{ $row->kategori }}-{{ $row->id }}">
                                                        <label class="custom-control-label"
                                                            for="gejala-{{ $row->kategori }}-{{ $row->id }}"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            @php $rows++; @endphp
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="list-group">
                            @foreach ($penyakit->where('kategori', 'batang') as $row)
                                <a href="{{ route('admin.rules', $row->id) }}"
                                    class="list-group-item list-group-item-action {{ $data_penyakit->nama == $row->nama ? 'active' : '' }}">
                                    {{ $row->nama }}
                                </a>
                            @endforeach
                        </div>
                        <div class="mt-3">
                            <button class="btn-primary btn save" type="submit">Simpan</button>
                            <a href="" class="btn-warning btn">Reset</a>
                        </div>
                    </div>
                </div>
            </x-card>
        </div>
    </div>

    <x-slot name="script">
        <!-- Page level plugins -->
        <script src="{{ asset('dist/vendor/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('dist/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
        <script>
            $('.save').click(function() {
                $('#update_rules').submit()
            })

            // input number gejalan mustnot be less than 0
            $('input[type="number"]').on('input', function() {
                // check if theres any character that not number except dot
                if (/[^0-9.]/.test(this.value)) {
                    // remove all character that not number except dot
                    this.value = this.value.replace(/[^0-9.]/g, '');
                }
            })

            $('.check').change(function() {
                const id = $(this).data('id')
                const kategori = $(this).data('kategori')

                if (this.checked) {
                    // Check if there are any other checked inputs in a different category
                    const otherCheckedInputs = $(`input[name^="gejala-"]:checked`).not(
                        `input[name="gejala-${kategori}-${id}"]`)
                    if (otherCheckedInputs.length > 0) {
                        alert("Gejala yang kamu pilih harus sama dengan kategori penyakit yang kamu pilih sebelumnya")
                        this.checked = false
                        $(`input[name="gejala-${kategori}-${id}"]`).attr('disabled', '')
                        $(`input[name="gejala-${kategori}-${id}"]`).val('')
                    } else {
                        $(`input[name="gejala-${kategori}-${id}"]`).removeAttr('disabled')
                    }
                } else {
                    $(`input[name="gejala-${kategori}-${id}"]`).attr('disabled', '')
                    $(`input[name="gejala-${kategori}-${id}"]`).val('')
                }
            })

            $('button[type="submit"]').on('click', function(e) {
                e.preventDefault()
                // get all input number that not disabled
                const inputs = $('input[type="number"]:not(:disabled)')
                if (inputs.length == 0) {
                    alert('Pilih gejala terlebih dahulu')
                    return;
                }
                const data = []

                // loop through all input number
                inputs.each(function(index, input) {
                    const name = $(input).attr('name')
                    const value = $(input).val()
                    data.push({
                        name: name,
                        value: value
                    })
                })

                // check if theres any input number that not filled
                const empty = data.filter(item => item.value === '')

                // ge active rule	
                const active_rule = $('.list-group-item.active').attr('href').split('/').pop()

                // send data to server
                $.ajax({
                    url: "{{ route('admin.rules.update', ':id') }}".replace(':id', active_rule),
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        data: data
                    },
                    success: function(response) {
                        window.location.reload()
                    }
                })
            })
        </script>
    </x-slot>
</x-app-layout>
