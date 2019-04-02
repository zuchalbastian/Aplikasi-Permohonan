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

	<table border="1"  class="table table-bordered table-hover ">
		<tr>
			<th>Bagian</th>
			<th>Klasifikasi Perbaikan</th>
			<th>Uraian</th>
			<th>Tanggal Selesai Analisa</th>
			<th>Hasil Analisa</th>
			<th>Tanggal Penyelesaian</th>
			<th>Opsi</th>
		</tr>
		@foreach($finishjob as $p)
		<tr>
			<td>{{ $p->get_department->name }}</td>
			<td>{{ $p->klasifikasi_perbaikan }}</td>
			<td>{{ $p->uraian }}</td>
			<td>{{ $p->tgl_analisa }}</td>
			<td>{{ $p->hasil_analisa }}</td>
			<td>{{ $p->tgl_selesai }}</td>
			<td>
				<a href="#" class="btn btn-sm btn-raised btn-info">Send</a>
				<br><br>
			</td>
		</tr>
		@endforeach
	</table>
 
   </div>
</div>
@stop