@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="content">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/home') }}">
                <div class="wrapper_opinion">                
                    <div class="title_block_opinion">     
                        <h1>Titel plan</h1>
                    </div>
                    <div class="nav_wrapper">
                        <h5 id="plan_btn">Het plan</h5>
                        <h5 id="mening_btn">Mijn mening</h5>
                    </div>
                    <div class="content_wrapper" id="content_wrapper">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                        </p>
                    </div>

                    <div class="content_wrapper_sub" id="content_wrapper_sub" style="display:none;" onclick="ShowDiv()">
                        <div class="form-group">
                            <p>Geef uw mening</p>
                            <textarea class="form-control" placeholer="Message"></textarea>
                        </div>
                    </div>

                    <div class="footer_wrapper">
                        <div class="form-group cancel_btn">
                            <button type="submit" class="btn btn-primary cancel_btn">
                            <i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i>Annuleer</button>
                        </div>
                        <div class="form-group submit_btn">
                            <button type="submit" class="btn btn-primary submit_btn">Geef uw mening</button>
                        </div>
                    </div>
                </div>
            </form>

            <div class="wrapper_map">
                <div id="map"></div>
            </div>

        </div>
    </div>

@endsection