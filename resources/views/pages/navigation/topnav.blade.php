<nav class="navbar navbar-inverse navbar-fixed-top noborder br0 montserrat" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand font26" href="{{ url('/projects') }}">
            <span class="lato fw300">24&nbsp;<span class="lato fw700">h<i class="fa fa-clock-o"></i>urs</span>
            {{--<img src="{{ asset('images/logos/logo.png') }}" alt="todoapp icon" height="25"/>--}}
        </a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav navbar-right text-capitalize opacity75">
            <li><a href="{{ url('/projects') }}">Projects</a></li>
            <!-- <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </li> -->
            @if (Auth::check())
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                </ul>
            </li>
            @else
            <li><a href="{{ url('/auth/login') }}">Login</a></li>
            @endif
            {{--<li><a href="#sidenav" id="menu">MENU&nbsp;<i class="fa fa-bars"></i></a></li>--}}
            <li>
                <ul class="list-inline margin-top-20">
                    <li>
                        <a href="#sidenav" id="menu" class="menu-btn">
                            <div class="menu-btn-block top"></div>
                            <div class="menu-btn-block middle"></div>
                            <div class="menu-btn-block bottom"></div>
                        </a>
                    </li>
                    {{--<li><span class="hidden-xs">Menu</span></li>--}}
                </ul>
            </li>
        </ul>
    </div><!-- /.navbar-collapse -->
    </div>
</nav>