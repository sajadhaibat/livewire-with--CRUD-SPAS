<div class="header">

    <!-- Logo -->
    <div class="header-left">
        <a href="/" class="logo">
{{--            <img class="head_logo" src="{{asset('img/logo.png')}}" width="" height="45" alt="">--}}
        </a>
    </div>
    <!-- /Logo -->

    <a id="toggle_btn" href="javascript:void(0);">
        <span class="bar-icon">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </a>

    <!-- Header Title -->
    <div class="page-title-box">
        <h3>Livewire App</h3>
    </div>
    <!-- /Header Title -->

    <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>

    <!-- Header Menu -->
    <ul class="nav user-menu">


        <!-- Notifications -->

        <!-- /Notifications -->


{{--        <li class="nav-item dropdown has-arrow main-drop">--}}
{{--            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">--}}
{{--							<span class="user-img"><img src="" alt="">--}}
{{--							<span class="status online"></span></span>--}}
{{--                <span>Admin</span>--}}
{{--            </a>--}}
{{--            <div class="dropdown-menu">--}}
{{--                <a class="dropdown-item" href="profile.html">My Profile</a>--}}
{{--                <a class="dropdown-item" href="settings.html">Settings</a>--}}
{{--                <a class="dropdown-item" href="#"--}}
{{--                   onclick="event.preventDefault();--}}
{{--                                    document.getElementById('logout-form').submit();">--}}
{{--                    {{ __('Logout') }}--}}
{{--                </a>--}}
{{--                <form id="logout-form" action="#" method="POST" style="display: none;">--}}
{{--                    @csrf--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </li>--}}
    </ul>
    <!-- /Header Menu -->

    <!-- Mobile Menu -->
    <div class="dropdown mobile-user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="profile.html">My Profile</a>
            <a class="dropdown-item" href="settings.html">Settings</a>
            <a class="dropdown-item" href="login.html">Logout</a>
        </div>
    </div>
    <!-- /Mobile Menu -->

</div>
