@extends('layouts.app')
@section('title',__('Login |'))
<?php $config = CstmConfig();?>

@section('content')
        <div class="login-logo">
            <a href="{{ url('login') }}">
                <img src="{{asset('public/storage/logo/')}}/{{CstmConfig()['site_admin_logo']}}" class="img-fluid" width="100">
            </a>
        </div>
       
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            
            <form action="{{ url('login') }}" method="post">
                {{csrf_field()}}
            <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" class="form-control" placeholder="Password" name="password" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="row">
                <div class="col-xs-8">
                <div class="checkbox icheck">
                </div>
                </div>
                <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
            </div>
            </form>
        </div>
    @endsection














