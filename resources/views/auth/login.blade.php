@extends('layouts.login')
@section('content')
  <main>
    <center>
      <section class="content-header">
      {{-- <img class="responsive-img" style="width: 250px;" src="https://i.imgur.com/ax0NCsK.gif" /> --}}
      <img class="responsive-img" style="width: 250px;" src="{!! asset('../image/ax0NCsK.gif') !!}"/>
      <div class="section"></div><br>

      <p><font face="Century Gothic" size="6"> SELAMAT DATANG DI FORMULIR APLIKASI</font></p>
      <div class="section"></div>
      </section>
      <div class="row">
      <div class="container">
            <div class="box box-info" style="display: inline-block; padding: 20px 0px 0px 0px ; width: 500px">
                  <form class="form-horizontal" method="POST" action="/auth/login">
                      {!! csrf_field() !!}
                          <div class="box-body">
                            <div class='form-group'>
                                <font  face="Century Gothic" size="3" color="black" class="col-sm-5 control-label" for='nip'>Nomor Induk Pegawai </font>
                                <input placeholder="Masukkan NIP" class='col-sm-4' type='text' name='nip' id='nip'  value="{{ old('nip') }}"/>
                            </div>
                          <div class='form-group'>
                              <font  face="Century Gothic" size="3" color="black" class="col-sm-5 control-label" for='password'>Password</font>
                              <input placeholder="Masukkan Password" class='col-sm-4' type='password' name='password' id='password' />
                          </div>
                          <div class="form-group{{ $errors->has('captcha') ? ' has-error' : '' }}">
                              <font  face="Century Gothic" size="3" color="black" class="col-sm-5 control-label" for='password'>Captcha</font>
                              <div class="col-sm-4">
                                  <div class="captcha">
                                  <span>{!! captcha_img('flat') !!}</span>
                                  </div><br>
                                  <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                                  @if ($errors->has('captcha'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('captcha') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>
                      <div class='box-footer bg-gray'>
                          <button type='submit' name='btn_login' class='btn btn-flat btn-success  pull right '>Login</button>
                      </div>
                </form>
              </div>
            </div>
        </div>
        <div class="box-footer">
  <p><font face="Century Gothic" size="3"><b> Copyright©2019~TSI-PDAM-Surabaya</b></font></p>
  <p><font face="Century Gothic" size="3"><b>PDAM Surya Sembada Surabaya~All right reserved.</b></font></p>
  </div>
      </div>
    </center>
  </main>
@stop
