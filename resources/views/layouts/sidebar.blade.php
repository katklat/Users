<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <ul class="app-menu">
        <li>
            <a class="app-menu__item {{Request::is('home') ? 'active' : ''}}" href="{{route('home')}}"><i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Manage</span></a>
        </li>
        <li>
            <a class="app-menu__item {{Request::is('index') ? 'active' : ''}}" href="{{route('index')}}"><i class=" app-menu__icon fa fa-cube"></i>
                <span class="app-menu__label">Show all</span></a>
        </li>
        <li>
            <a class="app-menu__item {{Request::is('') ? 'active' : ''}}" href="{{route('home')}}"><i class="app-menu__icon fa fa-files-o"></i>
                <span class="app-menu__label">Show duration</span></a>
        </li>
        <li>
            <a class="app-menu__item {{Request::is('users*') ? 'active' : ''}}" href="{{route('users.index')}}"><i class="app-menu__icon fa fa-files-o"></i>
                <span class="app-menu__label">Users</span></a>
        </li>
    </ul>
</aside>
