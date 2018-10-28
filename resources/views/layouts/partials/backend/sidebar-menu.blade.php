<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MENU DE NAVEGACION</li>
    <li class="{{ \App\Utils::checkRoute(['dashboard::index', 'admin::index']) ? 'active': '' }}">
        <a href="{{ route('welcome') }}">
            <i class="fa fa-paper-plane-o" style="color: blue;"></i> <span style="color: blue;">Página Principal</span>
        </a>
    </li>
    @if (Auth::user()->can('viewList', \App\User::class))
        <li class="{{ \App\Utils::checkRoute(['admin::users.index', 'admin::users.create']) ? 'active': '' }}">
            <a href="{{ route('admin::users.index') }}">
                <i class="fa fa-user" style="color: #FFC414"></i> <span style="color: #FFC414">Usuarios</span>
            </a>
        </li>

        <li class="{{ \App\Utils::checkRoute(['admin::users.index', 'admin::users.create']) ? 'active': '' }}">
            <a href="{{ route('admin::users.index') }}">
                <i class="fa fa-calendar" style="color: #00ca6d";></i > <span style="color: #00ca6d";>Buscar Eventos</span>
            </a>
        </li>

        <li class="{{ \App\Utils::checkRoute(['admin::users.index', 'admin::users.create']) ? 'active': '' }}">
            <a href="{{ route('admin::users.index') }}">
                <i class="fa fa-ticket" style="color: #720e9e"></i> <span style="color: #720e9e">Buscar Ticket</span>
            </a>
        </li>
    @else
    <!-- Menu Evento-->
        <li class="treeview">
            <a>
                <i class="fa fa-calendar" style="color: red;"></i> <span style="color: red;">Eventos</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <!-- SubMenu Evento-->
            <ul class="treeview-menu">
                <li><a href="{{ route('evento.create') }}"><i class="fa fa-plus-square" style="color: red;"></i>Crear Evento</a></li>
                <li><a href="{{ route('evento.mis_evntos') }}"><i class="fa fa-calendar-o" style="color: red;"></i>Mis eventos</a></li>
            </ul>
            <!-- .Final SubMenu Evento-->
        </li>
    <!-- .Final Menu Evento-->

    <!-- Menu Ticket-->

        <li class="treeview">
            <a>
                <i class="fa fa-ticket" style="color: green;"></i> <span style="color: green;">Ticket</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right" style="color: green;"></i>
                </span>
            </a>
            <!-- SubMenu Ticket-->
            <ul class="treeview-menu">
                <li><a href="{{ route('ticket.mis_ticket') }}"><i class="fa fa-address-card-o" style="color: green;"></i>Mis Ticket</a></li>
                <li><a href="#"><i class="fa fa-question" style="color: green;"></i>Otra cosa de tickets</a></li>
            </ul>
            <!-- .Final SubMenu Ticket-->
        </li>
    @endif

    <!-- .Final Menu Ticket-->
</ul>
