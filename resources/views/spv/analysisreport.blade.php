@extends('layouts.index')

@section('content')

<div class="panel panel-info">
    <div class="panel-heading">
	    <center>
	        <h1>
			Laporan Analisis Pekerjaan
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
				<button type="button" class="btn btn-sm btn-raised btn-info" data-toggle="modal" data-target="#myModal">Review</button>
				<a href="/spv/send/{{ $p->id }}" class="btn btn-sm btn-raised btn-success spv">Approve</a>
				<button href="#" type="button" data-toggle="modal" 	data-target="#revisiModal" class="btn btn-sm btn-raised btn-danger">Reject</button>
				<br><br>
			</td>
		</tr>
		@endforeach
	</table>
	{!! $permohonan->render() !!} 
	</div>
	@foreach($permohonan as $p)
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
								<th style="width:180px;">NIP Staff</th>
								<td style="width:10px;">:</td>
								<td>{{ $p->get_staff->nip }}</td>
							</tr>
							<tr>
								<th>Nama Staff</th>
								<td>:</td>
								<td>{{ $p->get_staff->name }}</td>
							</tr>
							<tr>
								<th>NIP Pemohon</th>
								<td>:</td>
								<td>{{ $p->get_user->nip }}</td>
							</tr>
							<tr>
								<th>Nama Pemohon</th>
								<td>:</td>
								<td>{{ $p->get_user->name }}</td>
							</tr>
							<tr>
								<th>Tanggal Pengajuan</th>
								<td>:</td>
								<td>{{ $p->tgl_pengajuan }}</td>
							</tr>
							<tr>
								<th>Tanggal Diterima TSI</th>
								<td>:</td>
								<td>{{ $p->tgl_diterima_tsi }}</td>
							</tr>
							<tr>
								<th>Bagian</th>
								<td>:</td>
								<td>{{ $p->get_department->name }}</td>
							</tr>
							<tr>
								<th>Klasifikasi Perbaikan</th>
								<td>:</td>
								<td>{{ $p->klasifikasi_perbaikan }}</td>
							</tr>
							<tr>
								<th>Dokumen Pendukung</th>
								<td>:</td>
								<td>{{ $p->dokumen_pendukung }}</td>
							</tr>
							<tr>
								<th>Uraian</th>
								<td>:</td>
								<td>{{ $p->uraian }}</td>
							</tr>
							<tr>
								<th>Tanggal Selesai Analisa</th>
								<td>:</td>
								<td>{{ $p->tgl_analisa }}</td>
							</tr>
							<tr>
								<th>Hasil Analisa</th>
								<td>:</td>
								<td>{{ $p->hasil_analisa }}</td>
							</tr>
							<tr>
								<th>Tanggal Penyelesaian</th>
								<td>:</td>
								<td>{{ $p->tgl_selesai }}</td>
							</tr>
							<tr>
								<th>Uraian Hasil Analisa</th>
								<td>:</td>
								<td>{{ $p->uraian_hasil_analisa }}</td>
							</tr>
					</table>
			</div>
			<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

		</div>
	</div>

	<!-- Modal -->
	<div id="revisiModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
		
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Alasan Revisi</h4>
				</div>
				<div class="modal-body">
						<form action="/spv/store" enctype='multipart/form-data' method="post">
							{{ csrf_field() }}
							<fieldset>
							
								<input type="hidden" name="id" value={{ $p->id }}>
								<div class="form-group label-floating">
										<span class="control-label" for="focusedInput2">Alasan</span>
										<textarea class="form-control" name="alasan" required="required"></textarea> 
										<span class="help-block"></span>
								</div><br>

								<input class="btn btn-success" type="submit" value="Kirim Revisi">
							</fieldset>
						</form>
				</div>
				<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
			@endforeach
			</div>
		</div>
 
   </div>
</div>
@stop