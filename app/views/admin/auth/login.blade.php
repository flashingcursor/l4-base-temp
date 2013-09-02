@extends('admin._layouts.basic')
 
@section('main')
    <div id="logo">
        <img src="{{ URL::asset('assets/img/logo.png') }}" alt="" />
    </div>

    <div id="loginbox">            
        {{ Form::open( array( 'id' => 'loginform' )) }}
            @if ($errors->has('login'))
                <div class="alert alert-error">{{ $errors->first('login', ':message') }}</div>
            @endif
            <p>Enter username and password to continue.</p>

            <div class="input-group">
                <span class="input-group-addon"><i class="icon-user"></i></span>
                {{ Form::text('email', null, array( 'placeholder' => 'Email', 'class' => 'form-control' )) }}
            </div>
 
            <div class="input-group">
                <span class="input-group-addon"><i class="icon-lock"></i></span>
                {{ Form::password('password', array( 'placeholder' => 'Password', 'class' => 'form-control' )) }}
            </div>
            <div class="row or-login">
                <span>or login using</span>
            </div>
            <div class="row">
                <div class="btn-group btn-sm btn-social">
                    <a class="btn btn-primary" href="#"><i class="icon-facebook"></i> Facebook</a>
                    <a class="btn btn-info" href="#"><i class="icon-twitter"></i> Twitter</a>
                    <a class="btn btn-danger" href="#"><i class="icon-google-plus"></i> Google+</a>
                </div>
            </div>
            <hr />
            <div class="form-actions">
                <div class="pull-left">
                    <a href="#" class="flip-link to-recover">Lost password?</a><br />
                    <a href="#" class="flip-link to-register">Need account? Register here!</a>
                </div>
                <div class="pull-right">
                    {{ Form::submit('Login', array('class' => 'btn btn-default')) }}
                </div>
            </div>
 
        {{ Form::close() }}
    </div>
@stop