<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <div>
            <p class="app-sidebar__user-name">John Doe</p>
            <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
    </div>
    <ul class="app-menu">
        <li>
            <a class="app-menu__item active" href="{{route('admin.dashboard')}}"><i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Dashboard</span>
            </a>
        </li>
        <li class="treeview">
            <a class="app-menu__item" href="{{route('admin.main')}}"><i class="app-menu__icon fa fa-home"></i>
                <span class="app-menu__label">Main</span> 
            </a>
            <ul class="treeview-menu">
        </li>
    </ul>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Service</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{route('admin.services.create')}}"><i class="icon fa fa-circle-o"></i>Create</a></li>
            <li><a class="treeview-item" href="{{route('admin.services.list')}}" ><i class="icon fa fa-circle-o"></i>List</a></li>
        </ul>
    </li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Portfolio</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{route('admin.portfolio.create')}}"><i class="icon fa fa-circle-o"></i>Create</a></li>
            <li><a class="treeview-item" href="{{route('admin.portfolios.list')}}" ><i class="icon fa fa-circle-o"></i>List</a></li>
        </ul>
    </li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">About</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{route('admin.about.create')}}"><i class="icon fa fa-circle-o"></i>Create</a></li>
            <li><a class="treeview-item" href="{{route('admin.about.list')}}" ><i class="icon fa fa-circle-o"></i>List</a></li>
        </ul>
    </li>
    <a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-tasks"></i>
                <span class="app-menu__label">Contact</span>
    </a>
</aside>