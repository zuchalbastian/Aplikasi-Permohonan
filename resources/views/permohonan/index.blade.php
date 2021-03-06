@extends('layouts.index')
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
	<a href="/permohonan/create" class="btn btn-flat btn-primary pull-left"> + Tambah Permohonan Baru</a>
	<br/>
	<br/>
	<div class="table-responsive">
	<table border="1"  class="table table-bordered table-hover ">
		<tr>
			<th>Tanggal Pengajuan</th>
			<th>Tanggal Diterima TSI</th>
			<th>Bagian</th>
			<th>Klasifikasi Perbaikan</th>
			<th>Dokumen Pendukung</th>
			<th>Uraian</th>
			<th>Status</th>
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
			<td>{{ $p->status }}</td>
			<td>
				<a href="/permohonan/edit/{{ $p->id }}" class="btn btn-flat btn-info edit">Edit</a>
				<br><br>

				<a href="/permohonan/destroy/{{ $p->id }}" class="btn btn-flat btn-danger delete">Delete</a>

			</td>
		</tr>
<!--
		<form class="delete" action="/permohonan/destroy/{{ $p->id }}" method="POST">
	        <input type="hidden" name="_method" value="DELETE">
	        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
	        <input type="submit" value="Delete">
    	</form> -->
		@endforeach
	</table>
	{!! $permohonan->render() !!} 
	</div>
{{-- 
	Halaman : {{ $permohonan->currentPage() }} <br/>
	Jumlah Data : {{ $permohonan->total() }} <br/>
	Data Per Halaman : {{ $permohonan->perPage() }} <br/> --}}

	{{-- {{ $permohonan->links() }} --}}

   </div>	
</div>
@stop
