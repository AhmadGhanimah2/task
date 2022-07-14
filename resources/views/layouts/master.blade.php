<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <title>@yield('title')</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar10">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar10">
            <ul class="navbar-nav nav-fill w-100">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('subcar.index')}}" style="color: white" >Sub Car</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('cars.index')}}" style="color: white">Cars</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('advcar.index')}}" style="color: white">adv</a>
                </li>


            </ul>
        </div>
    </div>
</nav>
<div class="container">
    @yield('content')
</div>



<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>
