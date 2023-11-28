<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul class="sidebar-vertical">
                {{-- <li class="menu-title">
                    <span>Main</span>
                </li> --}}
                <li class="{{ Request::is('user/dashboard*') ? 'active' : ' ' }}">
                    <a href="{{ route('user.dashboard') }}" ><i class="la la-dashboard"></i> <span>Dashboard</span></a>
                </li>



                <li class="submenu">
                    <a href="#" class="{{ Request::is('user/profile*') || Request::is('user/password*') || Request::is('user/detail*') ? 'active' : ' ' }}"><i class="la la-user-cog"></i> <span>Manage Account </span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li class="{{ Request::is('user/profile*') ? 'active' : ' ' }}">
                            <a href="{{ route('user.profile') }}">My Profile</a>
                        </li>
                        <li class="{{ Request::is('user/password*') ? 'active' : ' ' }}">
                            <a href="{{ route('user.password') }}">Change Password</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ Request::is('user/leads*') ? 'active' : ' ' }}">
                    <a href="{{ route('user-leads.index') }}" ><i class="la la-bullhorn"></i> <span>Lead Management</span></a>
                </li>
                <li class="{{ Request::is('user/projects*') ? 'active' : ' ' }}">
                    <a href="{{ route('user-projects.index') }}" ><i class="la la-book"></i> <span>Project Management</span></a>
                </li>



            </ul>
        </div>
    </div>
</div>


