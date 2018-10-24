<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MENU DE NAVEGACION</li>
    <li class="{{ \App\Utils::checkRoute(['dashboard::index', 'admin::index']) ? 'active': '' }}">
        <a href="{{ route('welcome') }}">
            <i class="fa fa-paper-plane-o"></i> <span>Página Principal</span>
        </a>
    </li>
    @if (Auth::user()->can('viewList', \App\User::class))
        <li class="{{ \App\Utils::checkRoute(['admin::users.index', 'admin::users.create']) ? 'active': '' }}">
            <a href="{{ route('admin::users.index') }}">
                <i class="fa fa-user"></i> <span>Usuarios</span>
            </a>
        </li>

        <li class="{{ \App\Utils::checkRoute(['admin::users.index', 'admin::users.create']) ? 'active': '' }}">
            <a href="{{ route('admin::users.index') }}">
                <i class="fa fa-calendar"></i> <span>Buscar Eventos</span>
            </a>
        </li>

        <li class="{{ \App\Utils::checkRoute(['admin::users.index', 'admin::users.create']) ? 'active': '' }}">
            <a href="{{ route('admin::users.index') }}">
                <i class="fa fa-ticket"></i> <span>Buscar Ticket</span>
            </a>
        </li>
    @endif
    <!-- Menu Evento-->
        <li class="active treeview">
            <a>
                <i class="fa fa-calendar"></i> <span>Eventos</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <!-- SubMenu Evento-->
            <ul class="treeview-menu">
                <li><a href="{{ route('evento.create') }}"><i class="fa fa-plus-square"></i>Crear Evento</a></li>
                <li><a href="#"><i class="fa fa-calendar-o"></i>Mis eventos</a></li>
            </ul>
            <!-- .Final SubMenu Evento-->
        </li>
    <!-- .Final Menu Evento-->

    <!-- Menu Ticket-->

        <li class="active treeview">
            <a>
                <i class="fa fa-ticket"></i> <span>Ticket</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <!-- SubMenu Ticket-->
            <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-address-card-o"></i>Mis Ticket</a></li>
                <li><a href="#"><i class="fa fa-question"></i>Otra cosa de tickets</a></li>
            </ul>
            <!-- .Final SubMenu Ticket-->
        </li>

    <!-- .Final Menu Ticket-->
</ul>
