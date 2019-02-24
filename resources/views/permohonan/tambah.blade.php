@section('js')
<script type="text/javascript">

      function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#showgambar').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#inputgambar").change(function () {
        readURL(this);
    });

</script>

@stop

@extends('layouts.index')
@section('content')
 
<div class="panel panel-info">
    <div class="panel-heading">
        <center>
        <h4>
        FORM TAMBAH DATA PERMOHONAN
        </h4>
        </center>
    </div>
    <div class="panel-body">
        <a href="{{ URL('permohonan') }}" class="btn btn-raised btn-danger pull-left">Kembali</a>
        <div class="row">
            <div class="col-md-12"><br>
                <div class="col-md-2"></div>
             	<div class="col-md-8">
 
			<form action="/permohonan/store" enctype='multipart/form-data' method="post">
				{{ csrf_field() }}

				<legend></legend>
		        <fieldset>

		            <div class="form-group label-floating">
		            	<span class="control-label" for="focusedInput2">Tanggal Pengajuan</span>
		            	<input class="form-control" type="date" name="tgl_pengajuan" required="required">
		            	<p class="help-block"></p>
		            </div>		

		            <div class="form-group label-floating">
		            	<span class="control-label" for="focusedInput2">Tanggal Diterima TSI</span>
		            	<input class="form-control" type="date" name="tgl_diterima_tsi" required="required" value="{{ date('Y-m-d') }}">
		            	<p class="help-block"></p>
		            </div>	

		            <div class="form-group label-floating">
		            	<span class="control-label" for="focusedInput2">Bagian</span>
		            	<input class="form-control" type="text" name="bagian" required="required">
		           		<p class="help-block"></p>
		           	</div>	

			
		            <span>Klasifikasi Perbaikan</span>
		            <p>
				      <label>
				        <input  class="with-gap" name="klasifikasi_perbaikan" type="radio" value="modifikasi_fitur" id="mf"/>
				        <span>Modifikasi Fitur</span>
				      </label>
				    </p>
				    <p>
				      <label>
				        <input  class="with-gap" name="klasifikasi_perbaikan" type="radio" value="penambahan_fitur" id="pf"/>
				        <span>Penambahan Fitur</span>
				      </label>
				    </p>
				    <p>
				      <label>
				        <input class="with-gap" name="klasifikasi_perbaikan" type="radio" value="lain_lain" id="ll"/>
				        <span>Lain - lain</span>
				      </label>
				    </p>
					<br/>

					<div class="form-group label-floating">
		                <span class="control-label" for="focusedInput2">Dokumen Pendukung</span>
		                <input id="inputgambar" class="validate" type="file" name="dokumen_pendukung" required="required">
		                <p class="help-block"></p>
		            </div>	

		            <div class="form-group label-floating">
		                <span class="control-label" for="focusedInput2">Uraian</span>
		                <textarea class="form-control" name="uraian" required="required"></textarea> 
		                <span class="help-block"></span>
		            </div><br>

					<input type="submit" value="Simpan Data">
				</fieldset>
			</form>
	 	</div>
                <div class="col-md-2"></div>
		</div>
        </div>
    </div>
 
 </div>
@endsection