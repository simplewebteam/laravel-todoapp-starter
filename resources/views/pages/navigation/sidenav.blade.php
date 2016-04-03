<nav>
    <div id="sidenav" class="sidebar sidebar-hidden z-index1050 text-capitalize hidden-xs text-left">
      <ul class="nav montserrat text-uppercase">
        <li class="text-center"><a href="#"><h4 class="lato fw500 text-white text-lowercase">24<span class="fw700">h<i class="fa fa-clock-o"></i>urs&nbsp;<sup><em class=""><span class="text-cyan">beta</span></em></sup></span> <span class="sr-only">(current)</span></h4></a></li>
        @if(Auth::check())
        <li class="">
            <a href="#">
                {{ $user->name }}&nbsp;<i class="fa fa-male pull-right text-light-grey line-height-2em"></i>
            </a>
            <ul class="nav bg-light-grey hidden">
                <li class=""><a href="{{ url('/auth/logout') }}">Logout</a></li>
                {{--<li><a href="{{ url('/clients/edit') }}">Edit Profile</a></li>--}}
            </ul>
        </li>
        @else
        <li class="">
            <a href="#">Members only
                <i class="fa fa-lock pull-right text-light-grey line-height-2em"></i>
            </a>
            <ul class="nav bg-light-grey hidden">
                <li><a href="{{ url('/auth/login') }}">Login</a></li>
                <li><a href="{{ url('/auth/register') }}">Register</a></li>
            </ul>
        </li>
        @endif

        <li class="">
            <a href="#">projects
                @if(URL::current() == url('/projects'))
                    @if(count($projects))
                        <span class="small badge">{{ count($projects) }} </span>
                    @else
                        <span class="small badge">0 </span>
                    @endif
                @endif
                <i class="fa fa-caret-down pull-right text-light-grey line-height-2em"></i>
            </a>
            @if(count($projects))
                <ul class="nav bg-light-grey hidden">
                    @foreach($projects as $project)
                        <li><a href="{{ url('ProjectController@show', $project->slug) }}" class="">{{ $project->name }}</a></li>
                    @endforeach
                </ul>
            @endif
        </li>
      </ul>
    </div>
</nav>