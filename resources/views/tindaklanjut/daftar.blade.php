@extends('layouts.index')

@section('content')

<div class="panel panel-info">
    <div class="panel-heading">
	    <center>
	        <h1>
	        Data Permohonan Yang Sudah Masuk
	        </h1>
	    </center>
 	</div>
 	<div class="panel-body">

	<table border="1"  class="table table-bordered table-hover ">
		<tr>
			<th>Tanggal Pengajuan</th>
			<th>Tanggal Diterima TSI</th>
			<th>Bagian</th>
			<th>Klasifikasi Perbaikan</th>
			<th>Dokumen Pendukung</th>
			<th>Uraian</th>
			<th>Opsi</th>
		</tr>
		@foreach($permohonan as $p)
		<tr>
			<td>{{ $p->tgl_pengajuan }}</td>
			<td>{{ $p->tgl_diterima_tsi }}</td>
			<td>{{ $p->bagian }}</td>
			<td>{{ $p->klasifikasi_perbaikan }}</td>
			<td><a href="/permohonan/getDownload?filename={{$p->dokumen_pendukung}}">{{ $p->dokumen_pendukung}}</a></td>
			<td>{{ $p->uraian }}</td>
			<td>
				<a href="/list/create/{{ $p->id }}" class="btn btn-sm btn-raised btn-info">Tindak Lanjut</a>
				<br><br>
			</td>
		</tr>
		@endforeach
	</table>
 
   </div>
</div>
@stop