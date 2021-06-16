<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title> My Prpject </title>
    </head>
    <body>
    {{View::make('header')}}
    @yield('content')   
    {{View::make('footer')}}
    </body>
    <style>
        .custom-login {
            padding-top : 100px;
            height: 600px;
        }
        img.slider-img{
            height :400px;
        }
        .custom-product{
            height :600px;
        }
        .carousel-caption{
            background-color: #35443585 !important;
        }
        .trending-image {
            height : 150px;
        }
        .trending-item {
            float : left;
            width:20%;            
        }
        .trending-wrapper{
            margin:20px;
        }
        .detail-img{
            height : 200px;
        }
        .search-box{
            width : 500px;
        }
    </style>
</html>