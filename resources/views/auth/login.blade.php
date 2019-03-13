<!-- resources/views/auth/login.blade.php -->
@extends('layouts.login')
@section('content')

  <main>
    <center>
      <section class="content-header">
      <img class="responsive-img" style="width: 250px;" src="https://i.imgur.com/ax0NCsK.gif" />
      <div class="section"></div>

      <p><font face="Century Gothic" size="6"> Please, login into your account</font></p>
      <div class="section"></div>
      </section>
      <div class="row">
      <div class="container">
            <div class="box box-info" style="display: inline-block; padding: 20px 0px 0px 0px ; width: 500px">
      <!--         <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;"> -->

                  <form class="form-horizontal" method="POST" action="/auth/login">
                      {!! csrf_field() !!}
                          <div class="box-body">
                            <div class='form-group'>
                                <!-- <div class='input-field col s12'> -->
                                <font  face="Century Gothic" size="3" color="black" class="col-sm-5 control-label" for='nip'>Nomor Induk Pegawai </font>
                                <input placeholder="Masukkan NIP" class='col-sm-4' type='text' name='nip' id='nip'  value="{{ old('nip') }}"/>
                                <!-- </div> -->
                            </div>

                          <div class='form-group'>
                          <!-- <div class='input-field col s12'> -->
                              
                              <font  face="Century Gothic" size="3" color="black" class="col-sm-5 control-label" for='password'>Password</font>
                              <input placeholder="Masukkan Password" class='col-sm-4' type='password' name='password' id='password' />
                           <!-- </div> -->
                          </div>
                          <!-- <div class="col-sm-offset-2 col-sm-10"> -->
                          <!-- <label style='float: center;'>
                              <a class='pink-text' href='#!'><b>Forgot Password?</b></a>
                          </label>
                         --><!-- </div> -->
                      </div>
                     <!--  <div class="row">
                        <div class="input-field col s12">
                           <div class="captcha">
                             <span>{!! captcha_img() !!}</span>
                               <button type="button" class="btn btn-success">
                                   <i class="fa fa-refresh" id="refresh"></i>
                               </button>
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                            <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                        </div>
                      </div> -->
                      <div class='box-footer bg-gray'>

                          <a class="btn btn-flat btn-primary" href="/auth/register">Create account</a>
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
    <!-- <div class="section"></div>
    <div class="section"></div> -->
  </main>
  

@stop
<script type="text/javascript">
$('#refresh').click(function(){
  $.ajax({
     type:'GET',
     url:'refreshcaptcha',
     success:function(data){
        $(".captcha span").html(data.captcha);
     }
  });
});
</script>
