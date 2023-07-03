<header class="main-nav">
    <div class="sidebar-user text-center">
        <a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="<?php echo e(asset('assets/images/dashboard/1.png')); ?>" alt="" />
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
                        <a class="nav-link menu-title <?php echo e(prefixActive('/ui-kits')); ?>" href="javascript:void(0)"><i data-feather="box"></i><span>Alunos</span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/ui-kits')); ?>;">
                            <li><a href="<?php echo e(route('estudante-create')); ?>" class="<?php echo e(routeActive('state-color')); ?>">Cadastrar</a></li>
                            <li><a href="<?php echo e(route('estudante')); ?>" class="<?php echo e(routeActive('typography')); ?>">Listar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/drivers')); ?>" href="javascript:void(0)"><i data-feather="folder-plus"></i><span>Motoristas</span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/bonus-ui')); ?>;">
                            <li><a href="<?php echo e(route('motorista-create')); ?>" class="<?php echo e(routeActive('scrollable')); ?>">Cadastrar</a></li>
                            <li><a href="<?php echo e(route('motorista')); ?>" class="<?php echo e(routeActive('tree')); ?>">Listar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/drive')); ?>" href="javascript:void(0)"><i data-feather="edit-3"></i><span>Veículos</span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/builders')); ?>;">
                            <li><a href="<?php echo e(route('veiculo-create')); ?>" class="<?php echo e(routeActive('form-builder-1')); ?>">Cadastrar</a></li>
                            <li><a href="<?php echo e(route('veiculo')); ?>" class="<?php echo e(routeActive('form-builder-2')); ?>">Listar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/schools')); ?>" href="javascript:void(0)"><i data-feather="cloud-drizzle"></i><span>Escolas</span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/animation')); ?>;">
                            <li><a href="<?php echo e(route('escola-create')); ?>" class="<?php echo e(routeActive('animate')); ?>">Cadastrar</a></li>
                            <li><a href="<?php echo e(route('escola')); ?>" class="<?php echo e(routeActive('scroll-reval')); ?>">Listar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/officine')); ?>" href="javascript:void(0)"><i data-feather="command"></i><span>Oficina</span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/icons')); ?>;">
                            <li><a href="<?php echo e(route('oficina-create')); ?>" class="<?php echo e(routeActive('flag-icon')); ?>">Cadastrar</a></li>
                            <li><a href="<?php echo e(route('oficina')); ?>" class="<?php echo e(routeActive('font-awesome')); ?>">Listar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/ecommerce')); ?>" href="javascript:void(0)"><i data-feather="cloud"></i><span>Rotas</span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/ecommerce')); ?>;">
                            <li><a href="<?php echo e(route('rota-create')); ?>" class="<?php echo e(routeActive('buttons')); ?>">Cadastrar</a></li>
                            <li><a href="<?php echo e(route('rota')); ?>" class="<?php echo e(routeActive('buttons-flat')); ?>">Listar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/management')); ?>" href="javascript:void(0)"><i data-feather="bold"></i><span>Manutenção</span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/buttons')); ?>;">
                            <li><a href="<?php echo e(route('manutencao-create')); ?>" class="<?php echo e(routeActive('buttons')); ?>">Incluir Manutenção</a></li>
                            <li><a href="<?php echo e(route('manutencao')); ?>" class="<?php echo e(routeActive('buttons-flat')); ?>">Exibir manutenção</a></li>
                        </ul>
                        </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/buttons')); ?>" href="javascript:void(0)"><i data-feather="cloud"></i><span>Solicitações</span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/buttons')); ?>;">
                            <li><a href="<?php echo e(route('buttons')); ?>" class="<?php echo e(routeActive('buttons')); ?>">Exibir solicitações</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/charts')); ?>" href="javascript:void(0)"><i data-feather="box"></i><span>Relatórios</span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/charts')); ?>;">
                            <li><a href="<?php echo e(route('chart-apex')); ?>" class="<?php echo e(routeActive('chart-apex')); ?>">Exibir relatório</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
<?php /**PATH E:\sgfte\theme\resources\views/layouts/admin/partials/sidebar.blade.php ENDPATH**/ ?>