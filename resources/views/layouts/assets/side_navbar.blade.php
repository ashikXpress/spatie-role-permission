<div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
        <a href="index.html">
            <img src="{{asset('assets/admin/images/logo.png')}}" class="img-fluid" alt="">
            <span>POS</span>
        </a>
        <div class="iq-menu-bt-sidebar">
            <div class="iq-menu-bt align-self-center">
                <div class="wrapper-menu">
                    <div class="main-circle"><i class="ri-more-fill"></i></div>
                    <div class="hover-circle"><i class="ri-more-2-fill"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div id="sidebar-scrollbar">
        <nav class="iq-sidebar-menu">
            <ul class="iq-menu">

                <li class="{{ Route::currentRouteName() === 'dashboard' ? 'active' : '' }}">
                    <a href="{{route('dashboard')}}" class="iq-waves-effect"><i class="ri-hospital-fill"></i><span>Doctor Dashboard</span></a>
                </li>


                @php
                $subMenu = ['users.index','users.create','users.edit','roles.index','roles.create','roles.edit'];
                @endphp

                <li class="{{ in_array(Route::currentRouteName(), $subMenu) ? 'menu-open' : '' }}">

                    <a href="javascript:void(0);" class="iq-waves-effect"><i class="fa fa-user-plus"></i><span>Administrator</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul class="iq-submenu {{ in_array(Route::currentRouteName(), $subMenu) ? 'menu-open' : '' }}">

                        <li><a href="{{route('users.index')}}" class="{{ Route::currentRouteName() === 'users.index' ? 'active' : '' }}"><i class="fa fa-user"></i>Manage Users</a></li>
                        <li><a href="{{route('roles.index')}}" class="{{ Route::currentRouteName() === 'roles.index' ? 'active' : '' }}"><i class="fa fa-universal-access"></i>Manage Role & Permission</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="p-3"></div>
    </div>
</div>
