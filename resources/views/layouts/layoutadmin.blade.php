<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta http-equiv="Cache-control" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png"href="{{{ asset('dist/img/logo.png') }}}"
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>
    
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('css/plugins/morris.css') }}" rel="stylesheet">
    

    <!-- Custom Fonts -->
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

   <script src="//cdn.ckeditor.com/4.5.10/standard/ckeditor.js"></script>




</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h1 id="dashboard"><a href="http://talentsassociates.com/admin">Dashboard</a></h1>
            </div>
            
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
            
             <li>
                    
                   <a class="navbar-brand" href="{{ url('/')}}"> Goto main Page</a>
                    </li>
            
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="{{ Auth::user()->name }}dropdown"><i class="fa fa-user"></i> {{ Auth::user()->name }} <b class=""></b></a>
                </li>
                <li>
                        <a href="{{url('taap/logout')}}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                    
            </ul>
             <ul class="nav navbar-center top-nav">
                
              <h1 style="text-align:center;color:white"> Admin Panel</h1>
                    
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-book"></i> 
                        &nbsp  Article <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="{{ url('taap/article') }}">Article List</a>
                            </li>
                            <li>
                                <a href="{{ url('taap/article/create') }}">Add Article</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-building"> </i> &nbsp Notice<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo1" class="collapse">
                            <li>
                                <a href="{{route('taap.notice.index')}}">Notice List</a>
                            </li>
                            <li>
                                <a href="{{route('taap.notice.create')}}">Add Notice</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-comment" aria-hidden="true"></i> &nbsp Review <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo2" class="collapse">
                            <li>
                                <a href="{{route('taap.review.index')}}">Review List</a>
                            </li>
                            <li>
                                <a href="{{route('taap.review.create')}}">Add Review</a>
                            </li>
                        </ul>
                    </li>
                       <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo3"><i class="fa fa-comment" aria-hidden="true"></i> &nbsp Profile <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo3" class="collapse">
                            <li>
                                <a href="{{route('taap.profile.index')}}">Profile List</a>
                            </li>
                            <li>
                                <a href="{{route('taap.profile.create')}}">Add Profile</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                    
                  <a href=""><i class="fa fa-user"></i> {{ Auth::user()->name }}</a>
                    </li>
                  
                    
                </ul>
                
                 
                
            </div>
            
        
              
                  
            <!-- /.navbar-collapse -->
        </nav>

        



    @yield('content')







    
    <!-- /#wrapper -->



    <!-- jQuery -->
    <script src="{{ asset('js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    

   	<script>
            CKEDITOR.replace( 'summary' );
        </script>
        <script>
            CKEDITOR.replace( 'details' );
        </script>
   



</body>




</html>