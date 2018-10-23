<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MENU DE NAVEGACION</li>
    <li class="{{ \App\Utils::checkRoute(['dashboard::index', 'admin::index']) ? 'active': '' }}">
        <a href="{{ route('dashboard::index') }}">
            <i class="fa fa-dashboard"></i> <span>Menu</span>
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
        </li>
        <li class="{{ \App\Utils::checkRoute(['admin::users.index', 'admin::users.create']) ? 'active': '' }}">
            <a href="{{ route('admin::users.index') }}">
                <i class="fa fa-ticket"></i> <span>Buscar Ticket</span>
            </a>
        </li>
    @endif
        </li>
        <li>
            <a href="{{ route('evento.create') }}">
                <i class="fa fa-calendar"></i> <span>Craer Eventos</span>
            </a>
        </li>
        </li>
        <li class="{{ \App\Utils::checkRoute(['admin::users.index', 'admin::users.create']) ? 'active': '' }}">
            <a href="{{ route('evento.create') }}">
                <i class="fa fa-ticket"></i> <span>Mis Ticket</span>
            </a>
        </li>
</ul>
