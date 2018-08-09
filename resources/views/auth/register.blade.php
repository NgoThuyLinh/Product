@extends('layouts.webs.master')
@section('slider')
        <!-- breadcrumbs -->
            <div class="breadcrumbs">
                <div class="container">
                    <ol class="breadcrumb breadcrumb--ys pull-left">
                        <li class="home-link"><a href="index.html" class="icon icon-home"></a></li>                                     
                        <li class="active">CREATE AN ACCOUNT</li>
                    </ol>
                </div>
            </div>
        <!-- /breadcrumbs -->
    @endsection
@section('content')

    <div class="content container-fluid">
        <div class="row justify-content-center">
            <section class="col-sm-12 col-md-10 col-md-offset-1 col-xl-4 col-xl-offset-2">
                <div class="login-form-box">
                    <div class="card-header">
                        <h3 class="color small" style="text-align: center;"> CREATE AN ACCOUNT</h3>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0" style="margin-left: 46%">
                                <div class="col-md-6 col-offset-md-4">
                                    <button type="submit" class="btn btn--ys btn-top btn--xl"><span class="fa fa-plus"> </span> {{ __('CREATE') }}</button>
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
