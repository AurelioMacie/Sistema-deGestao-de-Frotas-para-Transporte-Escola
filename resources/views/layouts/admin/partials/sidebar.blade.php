<header class="main-nav">
    <div class="sidebar-user text-center">
        <a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="{{asset('assets/images/dashboard/1.png')}}" alt="" />
        <div class="badge-bottom"><span class="badge badge-primary">New</span></div>
        <a href="user-profile"> <h6 class="mt-3 f-14 f-w-600">Emay Walter</h6></a>
    </div>
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>General</h6>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title {{ prefixActive('/ui-kits') }}" href="javascript:void(0)"><i data-feather="box"></i><span>Alunos</span></a>
                        <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('/ui-kits') }};">
                            <li><a href="{{ route('state-color')}}" class="{{routeActive('state-color')}}">Cadastrar</a></li>
                            <li><a href="{{ route('typography')}}" class="{{routeActive('typography')}}">Listar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title {{ prefixActive('/drivers') }}" href="javascript:void(0)"><i data-feather="folder-plus"></i><span>Motoristas</span></a>
                        <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('/bonus-ui') }};">
                            <li><a href="{{ route('motorista-create') }}" class="{{routeActive('scrollable')}}">Cadastrar</a></li>
                            <li><a href="{{ route('motorista') }}" class="{{routeActive('tree')}}">Listar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title {{ prefixActive('/drive') }}" href="javascript:void(0)"><i data-feather="edit-3"></i><span>Veículos</span></a>
                        <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('/builders') }};">
                            <li><a href="{{ route('veiculo-create') }}" class="{{routeActive('form-builder-1')}}">Cadastrar</a></li>
                            <li><a href="{{ route('veiculo') }}" class="{{routeActive('form-builder-2')}}">Listar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title {{ prefixActive('/schools') }}" href="javascript:void(0)"><i data-feather="cloud-drizzle"></i><span>Escolas</span></a>
                        <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('/animation') }};">
                            <li><a href="{{ route('escola-create') }}" class="{{routeActive('animate')}}">Cadastrar</a></li>
                            <li><a href="{{ route('escola') }}" class="{{routeActive('scroll-reval')}}">Listar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title {{ prefixActive('/officine') }}" href="javascript:void(0)"><i data-feather="command"></i><span>Oficina</span></a>
                        <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('/icons') }};">
                            <li><a href="{{ route('oficina-create') }}" class="{{routeActive('flag-icon')}}">Cadastrar</a></li>
                            <li><a href="{{ route('oficina') }}" class="{{routeActive('font-awesome')}}">Listar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title {{ prefixActive('/ecommerce') }}" href="javascript:void(0)"><i data-feather="cloud"></i><span>Rotas</span></a>
                        <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('/ecommerce') }};">
                            <li><a href="{{ route('rota-create') }}" class="{{routeActive('buttons')}}">Cadastrar</a></li>
                            <li><a href="{{ route('rota') }}" class="{{routeActive('buttons-flat')}}">Listar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title {{ prefixActive('/management') }}" href="javascript:void(0)"><i data-feather="bold"></i><span>Manutenção</span></a>
                        <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('/buttons') }};">
                            <li><a href="{{ route('manutencao-create') }}" class="{{routeActive('buttons')}}">Incluir Manutenção</a></li>
                            <li><a href="{{ route('manutencao') }}" class="{{routeActive('buttons-flat')}}">Exibir manutenção</a></li>
                        </ul>
                        </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title {{ prefixActive('/buttons') }}" href="javascript:void(0)"><i data-feather="cloud"></i><span>Solicitações</span></a>
                        <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('/buttons') }};">
                            <li><a href="{{ route('buttons') }}" class="{{routeActive('buttons')}}">Exibir solicitações</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title {{ prefixActive('/charts') }}" href="javascript:void(0)"><i data-feather="box"></i><span>Relatórios</span></a>
                        <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('/charts') }};">
                            <li><a href="{{ route('chart-apex') }}" class="{{routeActive('chart-apex')}}">Exibir relatório</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
