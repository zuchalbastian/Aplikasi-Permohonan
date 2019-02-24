@extends('layouts.index')
<!-- @section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Tweets
            <a class="btn btn-success pull-right" href="/"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection -->
 
@section('content')

<div class="panel panel-info">
    <div class="panel-heading">
	    <center>
	        <h1>
	        Data Permohonan
	        </h1>
	    </center>
 	</div>
 	<div class="panel-body">
	<a href="/permohonan/create" class="btn btn-raised btn-primary pull-left"> + Tambah Permohonan Baru</a>       
	<br/>
	<br/>
 
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
				<a href="/permohonan/edit/{{ $p->id }}" class="btn btn-sm btn-raised btn-info">Edit</a>
				<br><br>
				<a href="/permohonan/destroy/{{ $p->id }}" class="btn btn-sm btn-raised btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
   </div>
</div>
@stop