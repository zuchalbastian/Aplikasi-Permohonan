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
        FORM DATA TINDAK LANJUT 
        </h4>
        </center>
    </div>
 <div class="panel-body">
	<a href="{{ URL('staff') }}" class="btn btn-raised btn-danger pull-left">Kembali</a>
	
	<div class="row">
            <div class="col-md-12"><br>
                <div class="col-md-2"></div>
             	<div class="col-md-8">

   
 	
	 <form action="/staff/store" enctype='multipart/form-data' method="post">
		{{ csrf_field() }}

		<legend></legend>
		<fieldset>

       <input type="hidden" name="id_staff" value="{{ Auth::user()->id }}">
 
         <input type="hidden" name="id" value="{{ $permohonan->id }}">

         <div class="form-group label-floating">
            <label for="title">Tanggal Pengajuan : </label>
                <input type="hidden" name="tgl_pengajuan" value="{{ $permohonan->tgl_pengajuan }}">
                <span type="text" class="form-control" name="tgl_pengajuan" disabled>{{ $permohonan->tgl_pengajuan }} </span> 
          </div>
    
          <div class="form-group label-floating">
             <label for="title">Tanggal Diterima TSI :</label>
                <input type="hidden" name="tgl_diterima_tsi" value="{{ $permohonan->tgl_diterima_tsi }}">
                <span type="text" class="form-control" name="tgl_diterima_tsi" disabled>{{ $permohonan->tgl_diterima_tsi }}</span>
          </div>

         <div class="form-group label-floating">
          <span class="control-label" for="focusedInput2">Bagian</span>
          <select name="bagian" class="form-control" disabled>
            
            @foreach ($department as $z)
              <option 
              value="{{ $z->id }}"
              @if ($z->id==$permohonan->department)
                selected
              @endif
            >
              {{ $z->name }}
            </option>
            @endforeach
          </select>
           <p class="help-block"></p>
         </div>	
		
         <div class="form-group">
          <label for="title">Klasifikasi Perbaikan : </label> 
              <input type="hidden" name="klasifikasi_perbaikan" value="{{ $permohonan->klasifikasi_perbaikan }}">
              <span type="text" class="form-control" name="klasifikasi_perbaikan" disabled>{{ $permohonan->klasifikasi_perbaikan }}</span>
          </div>

          <div class="form-group">
            <label for="title">Dokumen Pendukung : </label> 
                <span type="text" class="form-control" name="dokumen_pendukung" disabled>{{ $permohonan->dokumen_pendukung }}</span>
    
            </div>

      <div class="form-group">
        <label for="title">Uraian</label>
        <div class="input-field col s12">
          <textarea type="text" class="form-control" name="uraian" rows="3" disabled>{{ $permohonan->uraian }}</textarea>
        </div>
    </div>

    <hr />

    {{-- <div class="form-group">
      <label for="title">Tanggal Selesai Analisa</label>
      <div class="input-field col s13">
        <input class="form-control" id="date" name="tgl_analisa" required="required">
        <p class="help-block"></p>
      </div>
    </div> --}}

    <div class="form-group label-floating">
      <span class="control-label" for="focusedInput2">Tanggal Selesai Analisa</span>
      <input class="form-control" id="date" name="tgl_analisa" required="required">
      <p class="help-block"></p>
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

		<input type="submit" value="Simpan Data">
		
		</fieldset>
	</form>

	</div>
</div>

@endsection