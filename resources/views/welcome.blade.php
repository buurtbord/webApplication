@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="content">
            <div class="header">
                <div class="rectangle_landing"></div>
                <div class="logo_header"></div>
            </div>

            <div class="image_landing">
                <div class="rectangle_intro">
                    <h3 class="intro_text">Buurtbord Hilligersberg - Schiebroek</h3>
                    <p class="intro_subtext">Log in om te reageren op plannen van de gemeente en burgers.</p>

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-12 control-label">Email-adres:</label>

                            <div class="col-md-11">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-11 control-label">Wachtwoord:</label>

                            <div class="col-md-11">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary login_btn">Login
                                <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                                </button>

                                <!-- <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a> -->
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
@endsection
