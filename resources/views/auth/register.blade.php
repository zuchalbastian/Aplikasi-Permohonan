<!-- resources/views/auth/register.blade.php -->
@extends('layouts.login')
@section('content')

<div class="section"></div>
  <main>
    <center>
      <img class="responsive-img" style="width: 250px;" src="https://i.imgur.com/ax0NCsK.gif" />
      <div class="section"></div>

      <h5 class="indigo-text">Please, register your account</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-2 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE; width:450px;">

            <form class="col s12" rule="form" method="POST" action="{{ url('/auth/register') }}">
                {!! csrf_field() !!}

                <div class='row'>
                    <div class='col s12'>
                    </div>
                </div>

                <div class='row'>
                    <div class='input-field col s12'>
                        <label for='name'>Name</label>
                        <input class='validate' type='text' name='name' id='name'  value="{{ old('name') }}"/>
                    </div>
                </div>

                <div class='row'>
                    <div class='input-field col s12'>
                        <label for='email'>Email</label>
                        <input class='validate' type='email' name='email' id='email'  value="{{ old('email') }}"/>
                    </div>
                </div>

                <div class='row'>
                    <div class='input-field col s12'>
                        <label for='password'>Password</label>
                        <input class='validate' type='password' name='password' id='password'/>
                    </div>
                </div>

                <div class='row'>
                    <div class='input-field col s12'>
                        <label for='password_confirmation'>Confirm Password</label>
                        <input class='validate' type='password' name='password_confirmation' id='password_confirmation'/>
                    </div>
                </div>

                <br />
                <center>
                <div class='row'>
                    <button type='submit' name='btn_register' class='col s6 btn btn-large waves-effect indigo' style="float:none;">Register</button>
                </div>
                </center>
            </form>

        </div>
       </div>
    </center>

    <div class="section"></div>
    <div class="section"></div>
  </main>

@stop