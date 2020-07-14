<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <ul class="app-menu">
        <li>
            <a class="app-menu__item {{Request::is('admin') ? 'active' : ''}}" href="{{route('home')}}"><i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Manage</span></a>
        </li>
        <li>
            <a class="app-menu__item {{Request::is('admin/products*') ? 'active' : ''}}" href="{{route('home')}}"><i class=" app-menu__icon fa fa-cube"></i>
                <span class="app-menu__label">Show all</span></a>
        </li>
        <li>
            <a class="app-menu__item {{Request::is('admin/categories*') ? 'active' : ''}}" href="{{route('home')}}"><i class="app-menu__icon fa fa-files-o"></i>
                <span class="app-menu__label">Show duration</span></a>
        </li>
        <li>
            <form method='POST' action="{{ route('logout')}}">
                @csrf
                <a class="app-menu__item {{Request::is('admin/users*') ? 'active' : ''}}" href="{{route('home')}}"><i class="app-menu__icon fa fa-user-o"></i>
                    <span class="app-menu__label">Logout</span></a>
            </form>
        </li>
    </ul>
</aside>
