<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- importação do head -->
	<?php include_once("../../assets/public/head.php"); ?>
    <title>Dashboard</title>
</head>

<body>
    <div class="wrapper">
        <!-- menu lateral -->
        <div class="sidebar" data-background-color="brown" data-active-color="danger">
            <!-- dica 1: você pode alterar a cor do fundo da barra lateral usando: data-background-color="white | brown" -->
            <!-- dica 2: você pode mudar a cor do botão ativo usando: data-active-color="primary | info | success | warning | danger" -->
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
                <!-- menu do dashboard -->
                <ul class="nav">
                    <li class="fe-menu-aberto fe-fechar-menu-mobile">
                        <a class="fe-menu-lateral" href="#">
                            <i class="ti-dashboard"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>

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

        <!-- painel -->
        <div class="main-panel">
            <!-- barra -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- icone do menu em PC -->
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-fill btn-icon" data-toggle="tooltip" data-placement="right" title="Minimizar">
                            <i class="ti-more-alt"></i>
                        </button>
                    </div>
                    <!-- icone do menu em mobile -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle">
	                        <span class="sr-only">Alternação de navegação</span>
	                        <span class="icon-bar bar1"></span>
	                        <span class="icon-bar bar2"></span>
	                        <span class="icon-bar bar3"></span>
	                    </button>
                        <a class="navbar-brand" href="#charts">Dashboard</a>
                    </div>
                    <!-- itens da barra -->
                    <div class="collapse navbar-collapse">
                        <!-- buscador (desabilitado) -->
                        <form class="navbar-form navbar-left navbar-search-form fe-hide" role="search">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                <input type="text" value="" class="form-control" placeholder="Buscar">
                            </div>
                        </form>
                        <!-- itens -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- e-mail -->
                            <li>
                                <a href="#email" class="btn-magnify">
                                    <i class="ti-email"></i>
                                    <p class="hidden-md hidden-lg">
                                        E-mail
                                    </p>
                                </a>
                            </li>
                            <!-- notificações -->
                            <li class="dropdown">
                                <a href="#notificacoes" class="dropdown-toggle btn-rotate" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <span class="notification">5</span>
                                    <p class="hidden-md hidden-lg">
                                        Notificações
                                        <b class="caret"></b>
                                    </p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#not1">Notificação 1</a></li>
                                    <li><a href="#not2">Notificação 2</a></li>
                                    <li><a href="#not3">Notificação 3</a></li>
                                    <li><a href="#not4">Notificação 4</a></li>
                                    <li><a href="#not5">Notificação 5</a></li>
                                </ul>
                            </li>
                            <!-- configurações -->
                            <li>
                                <a href="#configuracoes" class="btn-rotate">
                                    <i class="ti-settings"></i>
                                    <p class="hidden-md hidden-lg">
                                        Configurações
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- corpo -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">

                        <!-- fe-menu-aberto -->
                        <!-- Markup -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="card">
                            <div class="card-content">
                                <div class="row">
                                <div class="col-xs-7">
                                        <div class="numbers pull-left">
                                        $34,657
                                    </div>
                                    </div>
                                <div class="col-xs-5">
                                    <div class="pull-right">
                                        <span class="label label-success">
                                        +18%
                                        </span>
                                    </div>
                                </div>
                                </div>
                                <h6 class="big-title">total earnings <span class="text-muted">in last</span> ten <span class="text-muted">quarters</span>
                                    </h6>
                                <div id="chartTotalEarningsDoc"></div>
                            </div>
                            <div class="card-footer">
                                <hr>
                                <div class="footer-title">Financial Statistics</div>
                                <div class="pull-right">
                                    <button class="btn btn-info btn-fill btn-icon btn-sm">
                                        <i class="ti-plus"></i>
                                    </button>
                                </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            <!-- importação do rodapé -->
	        <?php include_once("../../assets/public/footer.php"); ?>
        </div>
    </div>
</body>

<!-- importação do javascript -->
<?php include_once("../../assets/public/javascript.php"); ?>

</html>