    <header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/') }}"><img class="logo" src="{{ asset('dist/img/logo.png') }}" alt="img"/></a>

                   
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('/')}}">Home</a></li> 
						<li><a href="{{ url('about') }}">About Us</a></li>
						<li><a href="{{ url('service') }}">Services</a></li>
                        <li><a href="{{ url('portfolio') }}">Portfolio</a></li>
                        <li><a href="{{ url('contact') }}">Contact</a></li>
                      

                        <!-- <li><a href="{{ url('/admin') }}"><i class="fa fa-user fa-2x"></i></a></li>
                        {{--  <li><a href="{{ url('logout') }}">Logout</a></li> --}} -->
                    </ul>
                </div>
            </div>
        </div>
	</header>


   