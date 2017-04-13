

@extends('layouts.app')

@section('content')
    <div class="container" id="plannen_landing">
        <div class="content">
            <div class="header">

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/home') }}">

                    <div class="form-group back_block">
                        <button type="submit" class="btn btn-primary back_btn">
                            <i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i>Terug
                        </button>
                    </div>

                    <div class="logo_header_plannen">
                        <h1>Buurtbord Schiebroek - Hilligersberg</h1>
                    </div>
                    <div class="form-group log_block">
                        <span class="intro_subtext username_display">Username</span>
                        <button type="submit" class="btn btn-primary back_btn">Uitloggen</button>
                    </div>
                </form>
            </div>


            <div class="row">
                <h1>{{$user->name}}</h1>
            </div>

        </div>
    </div>
@endsection