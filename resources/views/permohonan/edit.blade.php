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
    <script>
        $( document ).ready(function() {
        var $input = $( '.datepicker' ).pickadate({
                formatSubmit: 'yyyy-mm-dd',
                 hiddenName: true,
                // min: [2015, 7, 14],
                container: '#container',
                // editable: true,
                closeOnSelect: true,
                closeOnClear: false,
            })
            var picker = $input.pickadate('picker')
        });
    </script>

@stop

@extends('layouts.index')
@section('content')
 
<div class="panel panel-info">
    <div class="panel-heading">
        <center>
        <h4>
        FORM EDIT DATA PERMOHONAN
        </h4>
        </center>
    </div>
 <div class="panel-body">
	
	<div class="row">
            <div class="col-md-12"><br>
                <div class="col-md-2"></div>
             	<div class="col-md-8">
 
	<form action="{{ url('permohonan/update') }}" enctype='multipart/form-data' method="post">
		{{ csrf_field() }}

		<!-- <legend></legend> -->
		<fieldset>
      <input type="hidden" name="id" value={{ $permohonan->id }}>
		<div class="form-group">
          <label for="title">Tanggal Pengajuan</label>
          <div class="input-field col s13">
            <input type="text" class="form-control" name="tgl_pengajuan" value="{{ $permohonan->tgl_pengajuan }}">
          </div>
    	</div>

    	<div class="form-group">
          <label for="title">Tanggal Diterima TSI</label>
          <div class="input-field col s13">
            <input type="text" class="form-control" name="tgl_diterima_tsi" value="{{ $permohonan->tgl_diterima_tsi }}">
          </div>
    	</div>

    	<div class="form-group label-floating">
        <span class="control-label" for="focusedInput2">Bagian</span>
        <select name="bagian" class="form-control">
          
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
      <label for="title">Klasifikasi Perbaikan</label> 
            <div class="input-field col s12">
                 <input type=radio name="klasifikasi_perbaikan" value="modifikasi_fitur" {{ $permohonan->klasifikasi_perbaikan == 'modifikasi_fitur' ? 'checked' : ''}}>Modifikasi Fitur</option><br>
                 <input type=radio name="klasifikasi_perbaikan" value="penambahan_fitur" {{ $permohonan->klasifikasi_perbaikan == 'penambahan_fitur' ? 'checked' : ''}}>Penambahan Fitur</option><br>
                 <input type=radio name="klasifikasi_perbaikan" value="lain_lain" {{ $permohonan->klasifikasi_perbaikan == 'lain_lain' ? 'checked' : ''}}>Lain - Lain</option><br>
            </div><br>
    </div>

    	<div class="form-group">
	        <div class="input-field col s6">
            <button type="button" onclick="document.getElementById('getFile').click()">Edit File</button>
            <p id="filename">{{ $permohonan->dokumen_pendukung }}</p>
	          <input type="file" id="getFile" name="dokumen_pendukung" class="validate" style="display: none;" / >
	        </div>
      	</div><br>

		<div class="form-group">
          <label for="title">Uraian</label>
          <div class="input-field col s12">
            <textarea type="text" class="form-control" name="uraian" rows="3">{{ $permohonan->uraian }}</textarea>
          </div>
    	</div>
		<input class="btn btn-success" type="submit" value="Simpan Data">
		<p></p>
    <a href="{{ URL('permohonan') }}" class="btn btn-raised btn-danger pull-left">Kembali</a>

		</fieldset>
	</form>
	</div>
</div>
<script>
    document.getElementById('getFile').onchange = function () {
        document.getElementById('filename').innerHTML = this.files.item(0).name;
    };
</script>
@endsection