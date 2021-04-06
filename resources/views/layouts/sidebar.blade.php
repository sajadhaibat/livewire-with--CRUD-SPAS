<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main</span>
                </li>
                <li @if (\Request::is('/')) class="active" @endif>
                    <a href="{{url('/')}}"><i class="la la-user"></i> <span>Employees </span></a>
                </li>
                <li @if (\Request::is('/employeeList')) class="active" @endif>
                    <a href="{{url('/employeeList')}}"><i class="la la-user"></i> <span>Employees List</span></a>
                </li>
                <li @if (\Request::is('/cashlogs')) class="active" @endif>
                    <a href="{{url('/cashlogs')}}"><i class="la la-user"></i> <span>Cash Logs</span></a>
                </li>

            </ul>

        </div>
    </div>

</div>

