@extends('layouts.index')

@section('content')

<div class="panel panel-info">
    <div class="panel-heading">
	    <center>
	        <h1>
	        Daftar Pekerjaan Revisi
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
			<th>Revisi</th>
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
			<td>{{ $p->alasan }}</td>
			<td>
				<button class="btn btn-sm btn-raised btn-info" type="button" data-toggle="modal" data-target="#revisiModal">Revisi</button>
				<br><br>
			</td>
		</tr>
		@endforeach
	</table>
	{!! $permohonan->render() !!} 
	</div>
   </div>
</div>

@foreach($permohonan as $p)
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
					<form action="/staff/sendrevisi" enctype='multipart/form-data' method="post">
						{{ csrf_field() }}
						<fieldset>
						
							<input type="hidden" name="id" value={{ $p->id }}>
							<div class="form-group">
									<label for="title">Tanggal Selesai Analisa</label>
									<div class="input-field col s13">
									  <input class="form-control" type="date" name="tgl_analisa" required="required">
									  <p class="help-block"></p>
									</div>
								  </div>
							  
								  <div class="form-group">
									<div class="input-field col s12">
									  <label>Hasil Analisa</label>
											  <p>
											<span>
											  <input  class="with-gap" name="hasil_analisa" type="radio" value="dapat_dikerjakan" id="mf"/>
											  <span>Dapat Dikerjakan</span>
											</span>
										  </p>
										  <p>
											<span>
											  <input  class="with-gap" name="hasil_analisa" type="radio" value="tidak_dapat_dikerjakan" id="pf"/>
											  <span>Tidak Dapat Dikerjakan</span>
											</span>
										  </p>    
									</div>
								  </div>  <br>
								   
								  <div class="form-group label-floating">
									<label class="control-label" for="focusedInput2">Tanggal Penyelesaian</label>
									<input class="form-control validate" type="hidden" name="tgl_selesai" required="required" value="{{ date('Y-m-d') }}">
									<input class="form-control validate" type="date" name="tgl_dd" required="required" value="{{ date('Y-m-d') }}" disabled>
									<p class="help-block"></p>
									</div>	
									
									<div class="form-group label-floating">
										<span class="control-label" for="focusedInput2">Uraian Hasil Analisa</span>
										<textarea class="form-control" name="uraian_hasil_analisa" required="required"></textarea> 
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
@stop