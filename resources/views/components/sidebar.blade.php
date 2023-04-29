<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="index.html"><img src="{{ asset('assets/images/logo.svg') }}" width="25" alt="Aero"><span
                class="m-l-10">Resturent App</span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li class="open {{ in_array($curr_url, ['admin.dashboard.index']) ? 'active' : '' }}"><a
                    href="{{ route('dashboard') }}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a>
            </li>
            @if (Auth::user()->user_type == 0)
                <li class="open {{ in_array($curr_url, ['admin.user_management.index']) ? 'active' : '' }}"><a href="{{ route('admin.user_management.index') }}"><i
                            class="zmdi zmdi-home"></i><span>User Management</span></a>
                </li>
            @endif
        </ul>
    </div>
</aside>
