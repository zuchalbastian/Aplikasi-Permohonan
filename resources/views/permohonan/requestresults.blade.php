@extends('layouts.index')
@section('content')

<div class="panel panel-info">
    <div class="panel-heading">
	    <center>
	        <h1>
			         Laporan Hasil Permohonan
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
			<th>Tanggal Selesai Analisa</th>
			<th>Hasil Analisa</th>
			<th>Tanggal Penyelesaian</th>
			<th>Uraian Hasil Analisa</th>

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

		</tr>
		@endforeach
	</table>
	{!! $permohonan->render() !!}

	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
		<!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Review Report</h4>
			</div>
			<div class="modal-body">
					<table>
							<tr>
								<th>NIP Staff</th>
								<td>:</td>
								{{-- <td>{{ $finishjob->customer->name }}</td> --}}
							</tr>
							<tr>
								<th>Nama Staff</th>
								<td>:</td>
								{{-- <td>{{ $finishjob->customer->phone }}</td> --}}
							</tr>
							<tr>
								<th>Pemohon</th>
								<td>:</td>
								{{-- <td>{{ $finishjob->customer->address }}</td> --}}
							</tr>
						</table>
			</div>
			<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

		</div>
	</div>

   </div>
</div>
@stop
