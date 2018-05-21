<!-- Main Header -->
<header class="main-header">
    <!-- Logo -->
    <a href="{{ route('admin.dashboard') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LP</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>ALP</b>Transfer</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->

                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        @if(isset(Auth::user()->images))
                            <img src="{{Storage::url(Auth::user()->images)}}"
                                 class="user-image" alt="User Image">
                        @endif
                        @if(!isset(Auth::user()->images))
                                <img src="{{ asset('images/avatar.png')}}"
                                     class="user-image" alt="User Image">
                            @endif

                        <span class="hidden-xs">{{Auth::user()->name}}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            @if(isset(Auth::user()->images))
                                <img src="{{Storage::url(Auth::user()->images)}}"
                                     class="user-image" alt="User Image">
                            @endif
                            @if(!isset(Auth::user()->images))
                                <img src="{{ asset('images/avatar.png')}}"
                                     class="user-image" alt="User Image">
                            @endif
                            <p>
                                {{Auth::user()->name}}
                                <small>{{Auth::user()->email}}</small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            {{--<div class="pull-left">--}}
                            {{--<a href="#" class="btn btn-default btn-flat">Profile</a>--}}
                            {{--</div>--}}
                            <div class="pull-right">
                                <a href="#" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Sign out</a>
                                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->

            </ul>
        </div>
    </nav>
</header>