<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    {!! Charts::assets() !!}
    <style>
        .row div {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container">
   <div class="row">

       <div class ="col-md-6">
           {!! $chart->render() !!}
       </div>

       <div class ="col-md-6">
           {!! $pie_chart->render() !!}
       </div>

       <div class ="col-md-6">
           {!! $areaspline_chart->render() !!}
       </div>

       <div class ="col-md-6">
           {!! $percentage_chart->render() !!}
       </div>

       <div class ="col-md-6">
           {!! $geo_chart->render() !!}
       </div>

       <div class ="col-md-6">
           {!! $area_chart->render() !!}
       </div>

       <div class ="col-md-6">
           {!! $donut_chart->render() !!}
       </div>

   </div>
</div>

</body>
</html>
