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
        DATA YANG AKAN DIKIRIM
        </h4>
        </center>
    </div>
 <div class="panel-body">
	
	<div class="row">
            <div class="col-md-12"><br>
                <div class="col-md-2"></div>
             	<div class="col-md-8">

   
 	
	@foreach($permohonan as $p)
	 <form class="form-horizontal" action="/list/store" enctype='multipart/form-data' method="post">
		{{ csrf_field() }}

		<!-- <legend></legend> -->
		<fieldset>

		<div class="form-group">
       <label for="title">NIP Staff</label>
    		<div class="input-field col s12">
            <input type="text" class="form-control" name="nip_staff" value="{{ Auth::user()->nip }}">
          </div>
    	</div>

    	<div class="form-group">
       <label for="title">Nama Staff</label>
    		<div class="input-field col s12">
            <input type="text" class="form-control" name="name_staff" value="{{ Auth::user()->name }}">
          </div>
    	</div><br>

        <input type="hidden" name="id" value="{{ $p->id }}">

		<div class="form-group">
        <label for="title">Tanggal Pengajuan : </label>
            <span type="text" class="form-control" name="tgl_pengajuan" >{{ $p->tgl_pengajuan }}</span> 
    	</div>

    	<div class="form-group">
         <label for="title">Tanggal Diterima TSI :</label>
            <span type="text" class="form-control" name="tgl_diterima_tsi">{{ $p->tgl_diterima_tsi }}</span>
    	</div>

    	<div class="form-group">
          <label for="title">Bagian : </label>
            <span type="text" class="form-control" name="tgl_diterima_tsi">{{ $p->bagian }}</span>
    	</div>
		
    	<div class="form-group">
        <label for="title">Klasifikasi Perbaikan : </label> 
          <span type="text" class="form-control" name="tgl_diterima_tsi">{{ $p->klasifikasi_perbaikan }}</span>
    </div>

		<div class="form-group">
        <label for="title">Dokumen Pendukung : </label> 
          <span type="text" class="form-control" name="tgl_diterima_tsi">{{ $p->dokumen_pendukung }}</span>

        </div>

		<div class="form-group">
         <label for="title">Uraian : </label>
            <span type="text" class="form-control" name="uraian" style="resize: vertical;">{{ $p->uraian }}</span>
    	</div><br>
		<input class="btn btn-success" type="submit" value="Kirim Data">
    <p></p>

		</fieldset>
	</form>
    <a href="{{ URL('list') }}" class="btn btn-raised btn-danger pull-left">Kembali</a>
    <div></div>
    <button class="btn btn-info" href="#">Revisi</button>

	 @endforeach
	</div>
</div>
@endsection