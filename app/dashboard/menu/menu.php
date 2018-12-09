<div class="sidebar" data-background-color="brown" data-active-color="danger">
    <!-- logo -->
    <div class="logo">
        <img class="fe-icone-dashboard" src="../../assets/img/dashboard/icone-dashboard.png" alt="logo">
        <a class="simple-text logo-normal">
            <img class="fe-logo-dashboard" src="../../assets/img/dashboard/logo-dashboard.png" alt="dashboard">
        </a>
    </div>
    <!-- menu -->
    <div class="sidebar-wrapper">
        <!-- menu do usuário -->
        <div class="user">
            <div class="photo">
                <img src="../../assets/img/perfil/usuario/felipe.png">
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#menu-usuario" class="collapsed fe-menu-lateral">
                    <span>
                        Felipe Sales
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="clearfix"></div>

                <div class="collapse fe-fechar-menu-mobile" id="menu-usuario">
                    <ul class="nav">
                        <li>
                            <a href="#">
                                <span class="sidebar-mini">EP</span>
                                <span class="sidebar-normal">Editar Perfil</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="#">
                                <span class="sidebar-mini">AS</span>
                                <span class="sidebar-normal">Alterar Senha</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="sidebar-mini">S</span>
                                <span class="sidebar-normal">Sair</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- menu do sistema -->
        <ul class="nav">
            <!-- dashboard -->
            <li class="fe-menu-aberto fe-fechar-menu-mobile">
                <a class="fe-menu-lateral" href="#">
                    <i class="ti-dashboard"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <!-- collapse 1 -->
            <li class="fe-menu-aberto">
                <a class="fe-menu-lateral" data-toggle="collapse" href="#collapse1">
                    <i class="ti-panel"></i>
                    <p>
                        Collapse 1
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse fe-fechar-menu-mobile" id="collapse1">
                    <ul class="nav">
                        <li>
                            <a href="#">
                                <span class="sidebar-mini">C1</span>
                                <span class="sidebar-normal">Collapse 1</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="sidebar-mini">C2</span>
                                <span class="sidebar-normal">Collapse 2</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- collapse 2 -->
            <li class="fe-menu-aberto">
                <a class="fe-menu-lateral" data-toggle="collapse" href="#collapse2">
                    <i class="ti-list"></i>
                    <p>
                        Collapse 2
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse fe-fechar-menu-mobile" id="collapse2">
                    <ul class="nav">
                        <li>
                            <a href="#">
                                <span class="sidebar-mini">C1</span>
                                <span class="sidebar-normal">Collapse 1</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="sidebar-mini">C2</span>
                                <span class="sidebar-normal">Collapse 2</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>