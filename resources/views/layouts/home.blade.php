<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="@yield('author')">
    <!-- styles -->
    <link href="{{asset('assets')}}/css/bootstrap.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/prettyPhoto.css" rel="stylesheet">
    <link href="{{asset('assets')}}/js/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/flexslider.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/style.css" rel="stylesheet">
    <link href="{{asset('assets')}}/color/default.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,600,400italic|Open+Sans:400,600,700" rel="stylesheet">

    <!-- fav and touch icons -->
    <link rel="shortcut icon" href="{{asset('assets')}}/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('assets')}}/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('assets')}}/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('assets')}}/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="{{asset('assets')}}/ico/apple-touch-icon-57-precomposed.png">

    <!-- =======================================================
      Theme Name: Lumia
      Theme URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
      Author: BootstrapMade.com
      Author URL: https://bootstrapmade.com
    ======================================================= -->
    @yield('css')
    @yield('headerjs')
</head>
<body>




@section('content')
    @show

@include('home._footer')
@yield('footerjs')
</body>
</html>
