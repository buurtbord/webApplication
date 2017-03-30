<html>
<head>
    <meta charset="utf-8">
    <link rel="icon" href="/webApplication/resources/assets/img/favicon.ico" type="image/x-icon"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buurtbord Landingpage</title>

    <link href="/webApplication/resources/assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/webApplication/resources/assets/css/main.css" type="text/css">

</head>
<body id="plannen"> <!-- redirect -->
<div class="container">
    <div class="content">


        @foreach($buurtplannen as $buurtplan)
            <div class="box">
                <div class="image_home"></div>
                <div class="rectangle"></div>
                <a href="">
                    <div class="rectangle_intro">
                        <h3 class="intro_text">{{$buurtplan->name}}</h3>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="/webApplication/resources/assets/js/bootstrap/bootstrap.min.js"></script>
</body>
</html>