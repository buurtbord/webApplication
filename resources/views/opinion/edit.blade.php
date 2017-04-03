@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="content">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/home') }}">
                <div class="wrapper_opinion">                
                    <div class="title_block_opinion">     
                        <h1></h1>
                    </div>
                    <div class="nav_wrapper">
                        <h3>Het plan</h3>
                        <h3>Mijn mening</h3>
                    </div>
                    <div class="content_wrapper">
                        <p>...</p>
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

                <div class="wrapper_map">
                    
                </div>
            </form>

        </div>
    </div>
@endsection