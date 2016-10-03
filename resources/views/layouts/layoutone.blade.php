<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>@yield('title')</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="{{{ asset('dist/img/logo.png') }}}">
<link rel="icon" type="image/png"href="{{{ asset('dist/img/logo.png') }}}"
<meta name="description" content="" />
<meta name="author" content="" />
<!-- css -->
<link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet" />
<link href="{{ asset('dist/css/fancybox/jquery.fancybox.css') }}" rel="stylesheet">

<link href="{{ asset('dist/css/flexslider.css') }}" rel="stylesheet" />

<link href="{{ asset('dist/css/style.css ') }}" rel="stylesheet" />

<style>
.logo{
	margin-top: -25px;
	height:80px;
	width:auto;
}

#service li{
    list-style-image: url('{{asset('dist/img/arr.png')}}');
    size: 1px;


}





#custom-search-input{
    padding: 3px;
    border: solid 1px #E4E4E4;
    border-radius: 6px;
    background-color: #fff;
}

#custom-search-input input{
    border: 0;
    box-shadow: none;
}

#custom-search-input button{
    margin: 2px 0 0 0;
    background: none;
    box-shadow: none;
    border: 0;
    color: #666666;
    padding: 0 8px 0 10px;
    border-left: solid 1px #ccc;
}

#custom-search-input button:hover{
    border: 0;
    box-shadow: none;
    border-left: solid 1px #ccc;
}

#custom-search-input .glyphicon-search{
    font-size: 23px;
}


</style>
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<script
        src="http://maps.googleapis.com/maps/api/js">
</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>


</head>
<body>
<div id="wrapper">
	<!-- start header -->
	
	<!-- end header -->

    @include('partials.header')


    @yield('content')
 

    @include('partials.footer')


    <!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

 



<script src="{{ asset('dist/js/jquery.js') }}"></script>
<script src="{{ asset('dist/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('dist/js/jquery.fancybox.pack.js') }}"></script>
<script src="{{ asset('dist/js/jquery.fancybox-media.js') }}"></script> 
<script src="{{ asset('dist/js/portfolio/jquery.quicksand.js') }}"></script>
<script src="{{ asset('dist/js/portfolio/setting.js') }}"></script>
<script src="{{ asset('dist/js/jquery.flexslider.js') }}"></script>
<script src="{{ asset('dist/js/animate.js') }}"></script>
<script src="{{ asset('dist/js/custom.js') }}"></script>

</body>
</html>