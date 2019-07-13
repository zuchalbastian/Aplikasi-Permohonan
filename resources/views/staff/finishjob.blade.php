@extends('layouts.index')

@section('content')

<div class="panel panel-info">
    <div class="panel-heading">
	    <center>
	        <h1>
	        Daftar Pekerjaan Terselesaikan
	        </h1>
	    </center>
 	</div>
 	<div class="panel-body">
	<div class="table-responsive">
	<table border="1"  class="table table-bordered table-hover ">
		<tr>
			<th>Tanggal Pengajuan</th>
			<th>Tanggal Diterima TSI</th>
			<th>Bagian</th>
			<th>Klasifikasi Perbaikan</th>
			<th>Dokumen Pendukung</th>
			<th>Uraian</th>
			<th>Tanggal Selesai Analisa</th>
			<th>Hasil Analisa</th>
			<th>Tanggal Penyelesaian</th>
			<th>Uraian Hasil Analisa</th>
			<th>Opsi</th>
		</tr>
		@foreach($permohonan as $p)
		<tr>
			<td>{{ $p->tgl_pengajuan }}</td>
			<td>{{ $p->tgl_diterima_tsi }}</td>
			<td>{{ $p->get_department->name }}</td>
			<td>{{ $p->klasifikasi_perbaikan }}</td>
			<td><a href="/permohonan/getDownload?filename={{$p->dokumen_pendukung}}">{{ $p->dokumen_pendukung}}</a></td>
			<td>{{ $p->uraian }}</td>
			<td>{{ $p->tgl_analisa }}</td>
			<td>{{ $p->hasil_analisa }}</td>
			<td>{{ $p->tgl_selesai }}</td>
			<td>{{ $p->uraian_hasil_analisa }}</td>
			<td>
				<a href="/staff/send/{{ $p->id }}" class="btn btn-sm btn-raised btn-info staff">Send</a>
				<br><br>
			</td>
		</tr>
		@endforeach
	</table>
	{!! $permohonan->render() !!} 
	</div>
   </div>
</div>
@stop