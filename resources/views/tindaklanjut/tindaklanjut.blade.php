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
	<a href="{{ URL('list') }}" class="btn btn-raised btn-danger pull-left">Kembali</a>
	
	<div class="row">
            <div class="col-md-12"><br>
                <div class="col-md-2"></div>
             	<div class="col-md-8">

   
 	
	@foreach($permohonan as $p)
	 <form action="/list/store" enctype='multipart/form-data' method="post">
		{{ csrf_field() }}

		<legend></legend>
		<fieldset>

		<div class="row">
    		<div class="input-field col s12">
            <input type="text" class="validate" name="nip_staff" value="{{ Auth::user()->nip }}">
            <label for="title">NIP Staff</label>
          </div>
    	</div>

    	<div class="row">
    		<div class="input-field col s12">
            <input type="text" class="validate" name="name_staff" value="{{ Auth::user()->name }}">
            <label for="title">Nama Staff</label>
          </div>
    	</div><br>

        <input type="hidden" name="id" value="{{ $p->id }}">

		<div class="row">
          <div class="input-field col s12">
            <input type="text" class="validate" name="tgl_pengajuan" value="{{ $p->tgl_pengajuan }}">
            <label for="title">Tanggal Pengajuan</label>
          </div>
    	</div>

    	<div class="row">
          <div class="input-field col s12">
            <input type="text" class="validate" name="tgl_diterima_tsi" value="{{ $p->tgl_diterima_tsi }}">
            <label for="title">Tanggal Diterima TSI</label>
          </div>
    	</div>

    	<div class="row">
          <div class="input-field col s12">
            <input type="text" class="validate" name="bagian" value="{{ $p->bagian }}">
            <label for="title">Bagian</label>
          </div>
    	</div><br>
		
    	<div class="row">
        <label for="title">Klasifikasi Perbaikan</label> 
            <div class="input-field col s12">
                 <input type=radio name="klasifikasi_perbaikan" value="modifikasi_fitur" {{ $p->klasifikasi_perbaikan == 'modifikasi_fitur' ? 'checked' : ''}}>Modifikasi Fitur</option><br>
                 <input type=radio name="klasifikasi_perbaikan" value="penambahan_fitur" {{ $p->klasifikasi_perbaikan == 'penambahan_fitur' ? 'checked' : ''}}>Penambahan Fitur</option><br>
                 <input type=radio name="klasifikasi_perbaikan" value="lain_lain" {{ $p->klasifikasi_perbaikan == 'lain_lain' ? 'checked' : ''}}>Lain - Lain</option><br>
            </div><br>
    </div>

		<div class="row">
          <div class="input-field col s6">
            <button onclick="document.getElementById('getFile').click()">Edit File</button>
            <p>{{ $p->dokumen_pendukung }}</p>
            <input type="file" id="getFile" name="dokumen_pendukung" class="validate" style="display: none;" / >
          </div>
        </div><br>

		<div class="row">
          <div class="input-field col s12">
            <label for="title">Uraian</label>
            <textarea type="text" class="materialize-textarea" name="uraian">{{ $p->uraian }}</textarea><br>
          </div>
    	</div>
		<input type="submit" value="Simpan Data">
		
		</fieldset>
	</form>
	 @endforeach
	</div>
</div>
@endsection