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

   
 	
	 <form class="form-horizontal" action="/list/store" enctype='multipart/form-data' method="post">
		{{ csrf_field() }}

		<!-- <legend></legend> -->
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

        <input type="hidden" name="id" value="{{ $permohonan->id }}">

		<div class="form-group">
        <label for="title">Tanggal Pengajuan : </label>
            <input type="hidden" name="tgl_pengajuan" value="{{ $permohonan->tgl_pengajuan }}">
            <span type="text" class="form-control" name="tgl_pengajuan" disabled>{{ $permohonan->tgl_pengajuan }} </span> 
    	</div>

    	<div class="form-group">
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
         <label for="title">Uraian : </label>
            <input type="hidden" name="uraian" value="{{ $permohonan->uraian }}">
            <span type="text" class="form-control" name="uraian" style="resize: vertical;" disabled>{{ $permohonan->uraian }}</span>
    	</div><br>
		<input class="btn btn-success" type="submit" value="Kirim Data">
        <div>
            
        </div>
		</fieldset>
	</form>
    <a href="{{ URL('list') }}" class="btn btn-raised btn-danger pull-left">Kembali</a>
    {{-- <button class="btn btn-info" href="#">Revisi</button> --}}

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