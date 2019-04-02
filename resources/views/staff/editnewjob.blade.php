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

   
 	
	@foreach($tindaklanjut as $p)
	 <form action="/staff/store" enctype='multipart/form-data' method="post">
		{{ csrf_field() }}

		<legend></legend>
		<fieldset>

      <div class="form-group">
        <label for="title">NIP Staff</label>
         <div class="input-field col s12">
             <input id="id_staff" type="hidden" class="form-control" name="id_staff">
             <input id="nip_staff" type="text" class="form-control" name="nip_staff" disabled>
           </div>
       </div>
 
       <div class="form-group">
        <label for="title">Nama Staff</label>
         <div class="input-field col s12">
                 <select id="name_staff" name="name_staff" class="form-control" onchange="change();">
                     @foreach ($staffs as $index => $staff)
                         <option value="{{ $index }}">{{ $staff->name }}</option>
                     @endforeach
                 </select>
           </div>
       </div><br>
 
         <input type="hidden" name="id" value="{{ $p->id }}">

         <div class="form-group label-floating">
          <span class="control-label" for="focusedInput2">Bagian</span>
          <select name="bagian" class="form-control">
            
            @foreach ($department as $z)
              <option 
              value="{{ $z->id }}"
              @if ($z->id)
                selected
              @endif
            >
              {{ $p->get_department->name }}
            </option>
            @endforeach
          </select>
           <p class="help-block"></p>
         </div>	
		
    	<div class="form-group">
        <label for="title">Klasifikasi Perbaikan</label> 
            <div class="input-field col s12">
                 <input type=radio name="klasifikasi_perbaikan" value="modifikasi_fitur" {{ $p->klasifikasi_perbaikan == 'modifikasi_fitur' ? 'checked' : ''}}>Modifikasi Fitur</option><br>
                 <input type=radio name="klasifikasi_perbaikan" value="penambahan_fitur" {{ $p->klasifikasi_perbaikan == 'penambahan_fitur' ? 'checked' : ''}}>Penambahan Fitur</option><br>
                 <input type=radio name="klasifikasi_perbaikan" value="lain_lain" {{ $p->klasifikasi_perbaikan == 'lain_lain' ? 'checked' : ''}}>Lain - Lain</option><br>
            </div>
      </div>

      <div class="form-group">
        <label for="title">Uraian</label>
        <div class="input-field col s12">
          <textarea type="text" class="form-control" name="uraian" rows="3">{{ $p->uraian }}</textarea>
        </div>
    </div>

    <hr />

    <div class="form-group">
      <label for="title">Tanggal Selesai Analisa</label>
      <div class="input-field col s13">
        <input type="date" class="form-control validate" name="tgl_analisa" value="{{ $p->tgl_analisa }}">
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
      <input class="form-control validate" type="date" name="tgl_selesai" required="required" value="{{ date('Y-m-d') }}">
      <p class="help-block"></p>
    </div>	

		<input type="submit" value="Simpan Data">
		
		</fieldset>
	</form>
	 @endforeach
	</div>
</div>
<script>
  var staffs = {!! $staffs !!};
  change();
  function change() {
      var value = document.getElementById('name_staff').value;
      document.getElementById('id_staff').value = staffs[value].id;
      document.getElementById('nip_staff').value = staffs[value].nip;
  }
</script>
@endsection