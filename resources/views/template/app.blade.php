<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Associação Andorinhas</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('owl-carousel/assets/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/meanmenu.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/nivo-lightbox.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" />


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<!-- header -->
@include('template.header')

@yield('content')

<!-- Footer -->
@include('template.footer')

<!-- Scripts -->
<script type="text/javascript" src="{{ asset('js/jquery2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.meanmenu.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/progress-bar-appear.js') }}"></script>
<script type="text/javascript" src="{{ asset('owl-carousel/owl.carousel.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/nivo-lightbox.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/isotope.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/countdown.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBEypW1XtGLWpikFPcityAok8rhJzzWRw "></script>
<script type="text/javascript" src="{{ asset('js/gmaps.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/js.js') }}"></script>

</body>
</html>