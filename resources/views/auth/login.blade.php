<!-- resources/views/auth/login.blade.php -->
@extends('layouts.login')
@section('content')

<div class="section"></div>
  <main>
    <center>
      <img class="responsive-img" style="width: 250px;" src="https://i.imgur.com/ax0NCsK.gif" />
      <div class="section"></div>

      <h5 class="indigo-text">Please, login into your account</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

            <form class="col s12" method="POST" action="/auth/login">
                {!! csrf_field() !!}

                <div class='row'>
                    <div class='col s12'>
                    </div>
                </div>

                <div class='row'>
                    <div class='input-field col s12'>
                        <label for='nip'>Enter your NIP</label>
                        <input class='validate' type='text' name='nip' id='nip'  value="{{ old('nip') }}"/>
                    </div>
                </div>

                <div class='row'>
                    <div class='input-field col s12'>
                        <input class='validate' type='password' name='password' id='password' />
                        <label for='password'>Enter your password</label>
                     </div>
                    <label style='float: right;'>
                        <a class='pink-text' href='#!'><b>Forgot Password?</b></a>
                    </label>
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

                <br />
                <center>
                <div class='row'>
                    <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Login</button>
                </div>
                </center>
            </form>
        </div>
       </div>
      <a href="/auth/register">Create account</a>
    </center>

    <div class="section"></div>
    <div class="section"></div>
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
