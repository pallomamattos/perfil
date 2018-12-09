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