@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="content">
                <div class="header">
                    <div class="logo_header">
                        <h1>Buurtbord Hilligersberg - Schiebroek</h1>
                    </div>
                    <div class="login_header">
                        <span>
                            <a href="{{ url('/login') }}"> <button  class="btn btn-default" type="button" aria-haspopup="true" aria-expanded="false">Inloggen</button> </a>
                        </span>
                    </div>
                </div>

                @foreach($plannen as $plan)
                <div class="box">
                    <div class="image_home"></div>
                    <div class="rectangle"></div>
                    <a href="">
                        <div class="rectangle_intro">
                            <h3 href="/plannen/{{$plan->id}}" class="intro_text">{{$plan->name}}</h3>
                            {{--<img src="{{$plan->img}}">--}}
                            <p class="intro_subtext">Bekijk hier de plannen van de gemeente voor de buurt.</p>
                        </div>
                    </a>

                </div>
                @endforeach

                {{--<div class="box">--}}
                    {{--<div class="image_home"></div>--}}
                    {{--<div class="rectangle"></div>--}}
                    {{--<a href="">--}}
                        {{--<div class="rectangle_intro">--}}
                            {{--<h3>Buurtbewoners plannen</h3>--}}
                            {{--<p>Bekijk hier de plannen van uw medebuurtbewoners</p>--}}
                        {{--</div>--}}
                    {{--</a>--}}

                {{--</div>--}}

            </div>
        </div>
@endsection

