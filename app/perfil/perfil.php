<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- importação do head -->
	<?php include_once("../../assets/public/head.php"); ?>
    <title>Perfil</title>
</head>

<body class="fe-body-perfil">
    <!-- menu lateral -->
    <div class="sidebar" data-background-color="brown" data-active-color="danger">
        <!-- dica 1: você pode alterar a cor do fundo da barra lateral usando: data-background-color="white | brown" -->
        <!-- dica 2: você pode mudar a cor do botão ativo usando: data-active-color="primary | info | success | warning | danger" -->
        <div class="logo fe-remove-logo"></div>
        <!-- menu -->
        <div class="sidebar-wrapper fe-ajuste-wrapper">
            <div class="fe-center-y">
                <!-- foto do perfil -->
                <img class="fe-foto fe-center-x" src="../../assets/img/perfil/usuario/felipe.png">
                <!-- menu do perfil -->
                <ul class="nav fe-fechar-menu-mobile">
                    <li class="active">
                        <a class="fe-nav-link fe-scroll-trigger" href="#sobre">
                            <p>Sobre</p>
                        </a>
                    </li>
                    <li>
                        <a class="fe-nav-link fe-scroll-trigger" href="#experiencias">
                            <p>Experiências</p>
                        </a>
                    </li>
                    <li>
                        <a class="fe-nav-link fe-scroll-trigger" href="#educacao">
                            <p>Educação</p>
                        </a>
                    </li>
                    <li>
                        <a class="fe-nav-link fe-scroll-trigger" href="#habilidades">
                            <p>Habilidades</p>
                        </a>
                    </li>
                    <li>
                        <a class="fe-nav-link fe-scroll-trigger" href="#portfolio">
                            <p>Portfólio</p>
                        </a>
                    </li>
                    <li>
                        <a class="fe-nav-link fe-scroll-trigger" href="#contato">
                            <p>Contato</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- barra -->
    <nav class="navbar navbar-fixed fe-menu-perfil-mobile">
        <div class="container-fluid">
            <!-- icone do menu em mobile -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle">
                    <span class="sr-only">Alternação de navegação</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                </button>
                <div class="navbar-brand fe-logo-nome">
                    <a class="fe-cor-tema fe-scroll-trigger" href="#sobre">Felipe Sales</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- painel -->
    <div class="main-panel fe-main-perfil">
        <!-- corpo -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- sobre -->
                    <section class="fe-perfil-section" id="sobre">
                        <div>
                            <!-- nome -->
                            <h1><span class="fe-cor-tema fe-texto-flex-mobile">Felipe</span> Sales</h1>
                            <!-- endereço -->
                            <p class="fe-texto-upper">
                                <i class="fas fa-map-marked-alt"></i>&ensp;
                                Rua Varandas da Serra, nº 185
                                <span class="fe-ponto-flex"> · </span>
                                <span class="fe-texto-flex-mobile fe-endereco-perfil-mobile">Novo Horizonte, Salvador - BA</span>
                                <span class="fe-ponto-flex"> · </span>
                                <span class="fe-texto-flex-mobile fe-endereco-perfil-mobile">CEP: 41218-168</span>
                                <p>
                                    <i class="fas fa-phone fe-cor-tema"></i>&ensp;
                                    <span class="fe-cor-tema fe-texto-lower">(71) 99140-2371</span>
                                </p>
                                <p>
                                    <i class="fas fa-at fe-cor-tema"></i>&ensp;
                                    <a href="#contato" class="fe-cor-tema fe-texto-lower fe-scroll-trigger" data-toggle="tooltip" data-placement="right" title="Enviar uma mensagem">
                                        felipesales007@hotmail.com&ensp;
                                    </a>
                                </p>
                            </p>
                            <br>
                            <!-- frase -->
                            <p class="fe-frase-perfil">
                                Por mais que a ciência evolua e que a tecnologia avance jamais ela vai decifrar a mente humana, pois cada cabeça é um mundo e cada ser humano uma história, jamais caberá numa tese ou num fundamento. Isso faz da humanidade e seu imaginário imensamente complexos e hierárquicos.
                                <br>
                                <a href="#" target="_blank" class="fe-cor-tema fe-texto-default fe-right" data-toggle="tooltip" data-placement="bottom" title="Conheça o autor">- Afonso Allan</a>
                                <i class="far fa-edit fe-cor-tema fe-right"></i>&ensp;
                            </p>
                            <br>
                            <!-- social -->
                            <div class="fe-social-icons">
                                <a title="LinkedIn" href="https://www.linkedin.com/in/felipesales007" target="_blank">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a title="GitHub" href="https://github.com/felipesales007" target="_blank">
                                    <i class="fab fa-github"></i>
                                </a>
                                <a title="Facebook" href="https://www.facebook.com/felipesales007" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a title="Twitter" href="#" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a title="Instagram" href="https://www.instagram.com/felipesales007/" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a title="YouTube" href="https://www.youtube.com/user/FelipeSales007/videos" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                                <a title="E-mail" href="#contato" class="fe-scroll-trigger">
                                    <i class="fas fa-envelope"></i>
                                </a>
                            </div>
                        </div>
                    </section>
                    <hr class="fe-hr">

                    <!-- experiências -->
                    <section class="fe-perfil-section" id="experiencias">
                        <div>
                            <h2>Experience</h2>

                            
                                    <h3>Senior Web Developer</h3>
                                    <div class="subheading">Intelitec Solutions</div>
                                    <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution.
                                        User generated content in real-time will have multiple touchpoints for offshoring.</p>
                                
                                    <span class="fe-cor-tema">March 2013 - Present</span>

                            <div class="perfil-item d-flex flex-column flex-md-row mb-5">
                                <div class="perfil-content mr-auto">
                                    <h3 class="mb-0">Web Developer</h3>
                                    <div class="subheading mb-3">Intelitec Solutions</div>
                                    <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close
                                        the loop on focusing solely on the bottom line.</p>
                                </div>
                                <div class="perfil-date text-md-right">
                                    <span class="fe-cor-tema">December 2011 - March 2013</span>
                                </div>
                            </div>

                            <div class="perfil-item d-flex flex-column flex-md-row mb-5">
                                <div class="perfil-content mr-auto">
                                    <h3 class="mb-0">Junior Web Designer</h3>
                                    <div class="subheading mb-3">Shout! Media Productions</div>
                                    <p>Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the
                                        start-up mentality to derive convergence on cross-platform integration.</p>
                                </div>
                                <div class="perfil-date text-md-right">
                                    <span class="fe-cor-tema">July 2010 - December 2011</span>
                                </div>
                            </div>

                            <div class="perfil-item d-flex flex-column flex-md-row">
                                <div class="perfil-content mr-auto">
                                    <h3 class="mb-0">Web Design Intern</h3>
                                    <div class="subheading mb-3">Shout! Media Productions</div>
                                    <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
                                </div>
                                <div class="perfil-date text-md-right">
                                    <span class="fe-cor-tema">September 2008 - June 2010</span>
                                </div>
                            </div>

                        </div>

                    </section>
                    <hr class="fe-hr">

                    <!-- educação -->
                    <section class="fe-perfil-section p-3 p-lg-5 d-flex flex-column" id="educacao">
                        <div class="my-auto">
                            <h2 class="mb-5">Education</h2>

                            <div class="perfil-item d-flex flex-column flex-md-row mb-5">
                                <div class="perfil-content mr-auto">
                                    <h3 class="mb-0">University of Colorado Boulder</h3>
                                    <div class="subheading mb-3">Bachelor of Science</div>
                                    <div>Computer Science - Web Development Track</div>
                                    <p>GPA: 3.23</p>
                                </div>
                                <div class="perfil-date text-md-right">
                                    <span class="fe-cor-tema">August 2006 - May 2010</span>
                                </div>
                            </div>

                            <div class="perfil-item d-flex flex-column flex-md-row">
                                <div class="perfil-content mr-auto">
                                    <h3 class="mb-0">James Buchanan High School</h3>
                                    <div class="subheading mb-3">Technology Magnet Program</div>
                                    <p>GPA: 3.56</p>
                                </div>
                                <div class="perfil-date text-md-right">
                                    <span class="fe-cor-tema">August 2002 - May 2006</span>
                                </div>
                            </div>

                        </div>
                    </section>
                    <hr class="fe-hr">

                    <!-- habilidades -->
                    <section class="fe-perfil-section p-3 p-lg-5 d-flex flex-column" id="habilidades">
                        <div class="my-auto">
                            <h2 class="mb-5">Skills</h2>

                            <div class="subheading mb-3">Programming Languages &amp; Tools</div>
                            <ul class="list-inline dev-icons">
                                <li class="list-inline-item">
                                    <i class="fab fa-html5"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fab fa-css3-alt"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fab fa-js-square"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fab fa-angular"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fab fa-react"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fab fa-node-js"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fab fa-sass"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fab fa-less"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fab fa-wordpress"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fab fa-gulp"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fab fa-grunt"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fab fa-npm"></i>
                                </li>
                            </ul>

                            <div class="subheading mb-3">Workflow</div>
                            <ul class="fa-ul mb-0">
                                <li>
                                    <i class="fa-li fa fa-check text-success"></i> Mobile-First, Responsive Design</li>
                                <li>
                                    <i class="fa-li fa fa-check text-success"></i> Cross Browser Testing &amp; Debugging</li>
                                <li>
                                    <i class="fa-li fa fa-check text-success"></i> Cross Functional Teams</li>
                                <li>
                                    <i class="fa-li fa fa-check text-success"></i> Agile Development &amp; Scrum</li>
                            </ul>

                            <div class="subheading mb-3">Certificados</div>
                            <ul class="fa-ul mb-0">
                                <li>
                                    <i class="fa-li fa fa-trophy text-warning"></i> Mobile-First, Responsive Design</li>
                                <li>
                                    <i class="fa-li fa fa-trophy text-warning"></i> Cross Browser Testing &amp; Debugging</li>
                                <li>
                                    <i class="fa-li fa fa-trophy text-warning"></i> Cross Functional Teams</li>
                                <li>
                                    <i class="fa-li fa fa-trophy text-warning"></i> Agile Development &amp; Scrum</li>
                            </ul>
                        </div>
                    </section>
                    <hr class="fe-hr">

                    <!-- portfolio -->
                    <section class="fe-perfil-section p-3 p-lg-5 d-flex flex-column" id="portfolio">
                        <div class="my-auto">
                            <h2 class="mb-5">Interests</h2>
                            <p>Apart from being a web developer, I enjoy most of my time being outdoors. In the winter, I am an avid skier and novice ice climber. During the warmer months here in Colorado, I enjoy mountain biking, free climbing, and kayaking.</p>
                            <p class="mb-0">When forced indoors, I follow a number of sci-fi and fantasy genre movies and television shows, I am an aspiring chef, and I spend a large amount of my free time exploring the latest technology advancements in the front-end web development
                                world.
                            </p>
                        </div>
                    </section>
                    <hr class="fe-hr">

                    <!-- contato -->
                    <section class="fe-perfil-section-contato" id="contato">
                        <div>
                            <h2>Contato</h2>
                            <!-- mensagem -->
                            <div class="col-md-6">
                                <div class="card fe-card-contato">
                                    <form id="fe-perfil-enviar-mensagem" action="" method="" novalidate="">
                                        <div class="card-header">
                                            <h4 class="card-title">Mensagem<i class="ti-email text-info pull-right"></i></h4>
                                        </div>
                                        <div class="card-content">
                                            <div class="form-group">
                                                <label class="control-label">
                                                    Seu nome <star>*</star>
                                                </label>
                                                <input class="form-control" name="nome-visitante" type="text" required="true" autocomplete="on">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">
                                                    Seu e-mail <star>*</star>
                                                </label>
                                                <input class="form-control" name="email-visitante" type="text" required="true" email="true" autocomplete="on">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">
                                                    Mensagem <star>*</star>
                                                </label>
                                                <textarea class="form-control" name="mensagem-visitante" required="true" autocomplete="off" rows="4"></textarea>
                                            </div>
                                            <div class="category"><star>*</star> Campos obrigatórios</div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-rotate">
                                                <span class="btn-label">
                                                    <i class="fas fa-sync fa-spin"></i>&nbsp;
                                                </span>
                                                Enviar mensagem
                                            </button>
                                            <div class="clearfix"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- mapa -->
                            <div class="col-md-6">
                                <div class="card fe-card-mapa">
                                    <div class="card-header">
                                        <h4 class="card-title text-info">Local<i class="fa fa-map-marked-alt text-success pull-right"></i></h4>
                                    </div>
                                    <div class="card-content">
                                        <div id="map" class="fe-mapa"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        
        <!-- importação do rodapé -->
	    <?php include_once("../../assets/public/footer.php"); ?>
    </div>
</body>

<!-- importação do javascript -->
<?php include_once("../../assets/public/javascript.php"); ?>

</html>