<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul class="sidebar-vertical">
                {{-- <li class="menu-title">
                    <span>Main</span>
                </li> --}}
                <li class="{{ Request::is('stuff/dashboard*') ? 'active' : ' ' }}">
                    <a href="{{ route('stuff.dashboard') }}" ><i class="la la-dashboard"></i> <span>Dashboard</span></a>
                </li>



                <li class="submenu">
                    <a href="#" class="{{ Request::is('stuff/profile*') || Request::is('stuff/password*') || Request::is('stuff/detail*') ? 'active' : ' ' }}"><i class="la la-user-cog"></i> <span>Manage Account </span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li class="{{ Request::is('stuff/profile*') ? 'active' : ' ' }}">
                            <a href="{{ route('stuff.profile') }}">My Profile</a>
                        </li>
                        <li class="{{ Request::is('stuff/password*') ? 'active' : ' ' }}">
                            <a href="{{ route('stuff.password') }}">Change Password</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ Request::is('stuff/leads*') ? 'active' : ' ' }}">
                    <a href="{{ route('stuff-leads.index') }}" ><i class="la la-bullhorn"></i> <span>Lead Management</span></a>
                </li>
                <li class="{{ Request::is('stuff/projects*') ? 'active' : ' ' }}">
                    <a href="{{ route('stuff-projects.index') }}" ><i class="la la-book"></i> <span>Project Management</span></a>
                </li>



            </ul>
        </div>
    </div>
</div>


