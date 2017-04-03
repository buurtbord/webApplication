@extends('layouts.app')

@section('content')
    <div class="container" id="plannen_landing">
        <div class="content">
            <div class="header">

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/home') }}">

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary back_btn">
                            <i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i>Terug
                        </button>
                    </div>


                    <div class="logo_header">
                        <h1>Buurtbord Schiebroek - Hilligersberg</h1>
                    </div>
                    <div class="form-group">
                        <span class="intro_subtext username_display">Username</span>
                        <button type="submit" class="btn btn-primary back_btn">Uitloggen</button>
                    </div>
                </form>
            </div>


            <div class="box">

                @foreach($opinions as $opinion)
                <div class="plan_landing">
                    <div class="rectangle"></div>
                    <h3 class="plannen_headtext">{{$opinion->title}}</h3>
                    <h3 class="plannen_headtxt">{{$opinion->user_id}}</h3>
                    <img class="plannen_landing_image" src="">
                    <p class="intro_subtext">Bekijk plannen
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </p>
                </div>
                @endforeach


                {{--<div class="plan_landing">--}}
                {{--<div class="rectangle"></div>--}}
                {{--<h3 class="plannen_headtext">Bewoners plannen</h3>--}}
                {{--<img class="plannen_landing_image" src="">--}}
                {{--<p class="intro_subtext">Bekijk plannen--}}
                {{--<i class="fa fa-angle-right" aria-hidden="true"></i>--}}
                {{--</p>--}}
                {{--</div>--}}

                {{--<div class="plan_landing">--}}
                {{--<div class="rectangle"></div>--}}
                {{--<h3 class="plannen_headtext">Mijn reacties op plannen</h3>--}}
                {{--<img class="plannen_landing_image" src="">--}}
                {{--<p class="intro_subtext">Bekijk plannen--}}
                {{--<i class="fa fa-angle-right" aria-hidden="true"></i>--}}
                {{--</p>--}}
                {{--</div>--}}

            </div>

        </div>
    </div>
@endsection

