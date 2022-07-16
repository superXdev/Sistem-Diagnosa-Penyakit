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
                    @foreach($gejala as $key => $value)
                        @php 
                        $mod = ($key + 1) % 2;
                        @endphp

                        @if($mod == 1)
                    <div class="row">
                        @endif
                        <div class="col-md-6">
                            <div class="d-flex align-items-center justify-content-between border mb-2 p-2">
                                <div>
                                    <span class="ml-2">{{ $value->nama }}</span>
                                </div>
                                <div>
                                    <select name="diagnosa[]" id="" class="form-control form-control-sm red-border">
                                        <option value="{{ $value->id }}+-1">Pasti tidak</option>
                                        <option value="{{ $value->id }}+-0.8">Hampir pasti tidak</option>
                                        <option value="{{ $value->id }}+-0.6">Kemungkinan besar tidak</option>
                                        <option value="{{ $value->id }}+-0.4">Mungkin tidak</option>
                                        <option value="" selected>Tidak tahu</option>
                                        <option value="{{ $value->id }}+0.4">Mungkin</option>
                                        <option value="{{ $value->id }}+0.6">Sangat mungkin</option>
                                        <option value="{{ $value->id }}+0.8">Hampir pasti</option>
                                        <option value="{{ $value->id }}+1">Pasti</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    @if($mod == 0)
                    </div>
                    @endif

                    @if($key + 1 == \App\Models\Gejala::count() && $mod != 0)
                    </div>
                    @endif
                        
                    @endforeach
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Diagnosa sekarang</button>
                    </div>
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
                if(this.value == "") {
                    $(this).attr('class', 'form-control form-control-sm red-border')
                } else {
                    $(this).attr('class', 'form-control form-control-sm green-border')
                }
            })
        </script>
    </x-slot>
</x-app-layout>