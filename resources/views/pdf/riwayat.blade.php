<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hasil Diagnosa</title>
    <link href="{{ public_path('dist/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
	@php
	$riwayat = App\Models\Riwayat::find($id);
	@endphp
	
	<p class="mb-4"> 
		<b>Nama :</b> {{ $riwayat->nama }}
	</p>

	<p class="mb-4"> 
		<b>Tanggal :</b> {{ $riwayat->created_at->format('d M Y, H:m:s A') }}
	</p>

	<table class="table table-hover border">
		<thead class="thead-light">
			<tr>
				<th>Gejala yang kamu alami saat ini</th>
				<th>Tingkat keyakinan</th>
				<th>CF User</th>
			</tr>
		</thead>
		<tbody>
			@foreach(unserialize($riwayat->gejala_terpilih) as $gejala)
			<tr>
				<td>{{ $gejala['kode'] }} - {{ $gejala['nama'] }}</td>
				<td>{{ $gejala['keyakinan'] }}</td>
				<td>{{ $gejala['cf_user'] }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	@foreach(unserialize($riwayat->hasil_diagnosa) as $diagnosa)
	<div class="card card-body shadow-none p-0 mt-5 border">
		<div class="card-header bg-primary text-white p-2">
			<h6 class="font-weight-bold">Tabel perhitungan penyakit: {{ $diagnosa['nama_penyakit'] }} ({{ $diagnosa['kode_penyakit'] }})</h6>
		</div>
		<table class="table table-hover">
			<thead class="thead-light">
				<tr>
					<th>Gejala</th>
					<th>CF User</th>
					<th>CF Expert</th>
					<th>CF (H, E)</th>
				</tr>
			</thead>
			<tbody>
				@foreach($diagnosa['gejala'] as $gejala)
				<tr>
					<td>{{ $gejala['kode'] }} - {{ $gejala['nama'] }}</td>
					<td>{{ $gejala['cf_user'] }}</td>
					<td>{{ $gejala['cf_role'] }}</td>
					<td>{{ $gejala['hasil_perkalian'] }}</td>
				</tr>
				@endforeach
			</tbody>
			<tfoot class="font-weight-bold">
				<tr>
					<td scope="row">Nilai CF</td>
					<td><span class="text-danger">{{ number_format($diagnosa['hasil_cf'], 3) }}</span></td>
				</tr>
			</tfoot>	
		</table>
	</div>
	@endforeach
	<div class="mt-5">
		<div class="alert alert-success">
			<h5 class="font-weight-bold">Kesimpulan</h5>
			<p>Berdasarkan dari gejala yang kamu pilih atau alami juga berdasarkan Role/Basis aturan yang sudah ditentukan oleh seorang pakar penyakit maka perhitungan Algoritma Certainty Factor mengambil nilai CF yang paling pinggi yakni <b>{{ number_format(unserialize($riwayat->cf_max)[0], 3) }} ({{ number_format(unserialize($riwayat->cf_max)[0], 3) * 100 }}%)</b> yaitu <b>{{ unserialize($riwayat->cf_max)[1] }}</b></p>
		</div>
	</div>
</body>
</html>