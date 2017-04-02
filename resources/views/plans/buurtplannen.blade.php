@extends('layouts.app')

@section('content')
    <div class="container" id="plannen">
        <div class="content">
            <div class="header">

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/home') }}">

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary back_btn">
                        <i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i>Terug
                        </button>
                    </div>
                

                <div class="logo_header">
                    <h1>Gemeentelijke plannen</h1>
                </div>
                    <div class="form-group">
                        <span class="intro_subtext username_display">Username</span>
                        <button type="submit" class="btn btn-primary back_btn">Uitloggen</button>
                    </div>
                </form>
            </div>


            <div class="box">
                <div class="plan">
                    <img class="plannen_image" src="">
                    <p class="intro_subtext">Titel plan
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </p>
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

        </div>
    </div>
@endsection