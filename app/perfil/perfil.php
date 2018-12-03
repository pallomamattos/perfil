<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- importação do head -->
	<?php include_once("../../assets/public/head.php"); ?>
    <title>Perfil</title>
</head>

<body>
    <!-- menu lateral -->
    <div class="sidebar" data-background-color="brown" data-active-color="danger">
        <!-- dica 1: você pode alterar a cor do fundo da barra lateral usando: data-background-color="white | brown" -->
        <!-- dica 2: você pode mudar a cor do botão ativo usando: data-active-color="primary | info | success | warning | danger" -->
        <!-- logo -->
        <div class="logo">
            <a class="simple-text logo-normal">
                <img class="fe-logo-perfil" src="../../assets/img/perfil/logo-perfil.png" alt="perfil">
            </a>
        </div>
        <!-- menu -->
        <div class="sidebar-wrapper">
            <!-- foto do perfil -->
            <img class="fe-foto fe-center-x" src="../../assets/img/perfil/usuario/felipe.png">
            <!-- menu do perfil -->
            <ul class="nav fe-fechar-menu-mobile">
                <li class="active">
                    <a style="padding-top: 20px;" class="nav-link js-scroll-trigger" href="#sobre">
                        <p style="text-align: center; margin-bottom: -24px;">Sobre</p>
                    </a>
                </li>
                <li>
                    <a  style="padding-top: 20px;" class="nav-link js-scroll-trigger" href="#experiencias">
                        <p style="text-align: center; margin-bottom: -24px;">Experiências</p>
                    </a>
                </li>
                <li>
                    <a  style="padding-top: 20px;" class="nav-link js-scroll-trigger" href="#educacao">
                        <p style="text-align: center; margin-bottom: -24px;">Educação</p>
                    </a>
                </li>
                <li>
                    <a  style="padding-top: 20px;" class="nav-link js-scroll-trigger" href="#habilidades">
                        <p style="text-align: center; margin-bottom: -24px;">Habilidades</p>
                    </a>
                </li>
                <li>
                    <a  style="padding-top: 20px;" class="nav-link js-scroll-trigger" href="#portfolio">
                        <p style="text-align: center; margin-bottom: -24px;">Portfólio</p>
                    </a>
                </li>
                <li>
                    <a  style="padding-top: 20px;" class="nav-link js-scroll-trigger" href="#certificacoes">
                        <p style="text-align: center; margin-bottom: -24px;">Certificações</p>
                    </a>
                </li>
            </ul>
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
                <div class="navbar-brand fe-logo-nome">Felipe Sales</div>
            </div>
        </div>
    </nav>

    <!-- painel -->
    <div class="main-panel">
        <!-- corpo -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- sobre -->
                    <section class="resume-section p-3 p-lg-5 d-flex d-column" id="sobre">
                        <div class="my-auto">
                            <!-- nome -->
                            <h1 class="mb-0">
                                <span class="text-primary">Felipe</span> Sales
                            </h1>
                            <!-- endereço -->
                            <div class="subheading mb-5">Rua Varandas da Serra, nº 185 · Novo Horizonte, Salvador - BA · CEP: 41218-168 · (71) 99140-2371 ·
                                <a href="mailto:felipesales007@hotmail.com" data-toggle="tooltip" data-placement="top" title="Enviar uma mensagem">felipesales007@hotmail.com</a>
                            </div>
                            <!-- frase -->
                            <p class="lead mb-5">
                                Por mais que a ciência evolua e que a tecnologia avance jamais ela vai decifrar a mente humana, pois cada cabeça é um mundo e cada ser humano uma história, jamais caberá numa tese ou num fundamento. Isso faz da humanidade e seu imaginário imensamente complexos e hierárquicos.
                                <br><a href="#" class="text-primary fe-right">Afonso Allan</a>
                            </p>
                            <!-- social -->
                            <div class="social-icons">
                                <a href="https://www.linkedin.com/in/felipesales007" target="_blank">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="https://github.com/felipesales007" target="_blank">
                                    <i class="fab fa-github"></i>
                                </a>
                                <a href="https://www.facebook.com/felipesales007" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://www.instagram.com/felipesales007/" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="https://www.youtube.com/user/FelipeSales007/videos" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </section>
                    <hr class="m-0">

                    <!-- experiências -->
                    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experiencias">
                        <div class="my-auto">
                            <h2 class="mb-5">Experience</h2>

                            <div class="resume-item d-flex flex-column flex-md-row mb-5">
                                <div class="resume-content mr-auto">
                                    <h3 class="mb-0">Senior Web Developer</h3>
                                    <div class="subheading mb-3">Intelitec Solutions</div>
                                    <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution.
                                        User generated content in real-time will have multiple touchpoints for offshoring.</p>
                                </div>
                                <div class="resume-date text-md-right">
                                    <span class="text-primary">March 2013 - Present</span>
                                </div>
                            </div>

                            <div class="resume-item d-flex flex-column flex-md-row mb-5">
                                <div class="resume-content mr-auto">
                                    <h3 class="mb-0">Web Developer</h3>
                                    <div class="subheading mb-3">Intelitec Solutions</div>
                                    <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close
                                        the loop on focusing solely on the bottom line.</p>
                                </div>
                                <div class="resume-date text-md-right">
                                    <span class="text-primary">December 2011 - March 2013</span>
                                </div>
                            </div>

                            <div class="resume-item d-flex flex-column flex-md-row mb-5">
                                <div class="resume-content mr-auto">
                                    <h3 class="mb-0">Junior Web Designer</h3>
                                    <div class="subheading mb-3">Shout! Media Productions</div>
                                    <p>Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the
                                        start-up mentality to derive convergence on cross-platform integration.</p>
                                </div>
                                <div class="resume-date text-md-right">
                                    <span class="text-primary">July 2010 - December 2011</span>
                                </div>
                            </div>

                            <div class="resume-item d-flex flex-column flex-md-row">
                                <div class="resume-content mr-auto">
                                    <h3 class="mb-0">Web Design Intern</h3>
                                    <div class="subheading mb-3">Shout! Media Productions</div>
                                    <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
                                </div>
                                <div class="resume-date text-md-right">
                                    <span class="text-primary">September 2008 - June 2010</span>
                                </div>
                            </div>

                        </div>

                    </section>
                    <hr class="m-0">

                    <!-- educação -->
                    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="educacao">
                        <div class="my-auto">
                            <h2 class="mb-5">Education</h2>

                            <div class="resume-item d-flex flex-column flex-md-row mb-5">
                                <div class="resume-content mr-auto">
                                    <h3 class="mb-0">University of Colorado Boulder</h3>
                                    <div class="subheading mb-3">Bachelor of Science</div>
                                    <div>Computer Science - Web Development Track</div>
                                    <p>GPA: 3.23</p>
                                </div>
                                <div class="resume-date text-md-right">
                                    <span class="text-primary">August 2006 - May 2010</span>
                                </div>
                            </div>

                            <div class="resume-item d-flex flex-column flex-md-row">
                                <div class="resume-content mr-auto">
                                    <h3 class="mb-0">James Buchanan High School</h3>
                                    <div class="subheading mb-3">Technology Magnet Program</div>
                                    <p>GPA: 3.56</p>
                                </div>
                                <div class="resume-date text-md-right">
                                    <span class="text-primary">August 2002 - May 2006</span>
                                </div>
                            </div>

                        </div>
                    </section>
                    <hr class="m-0">

                    <!-- habilidades -->
                    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="habilidades">
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
                                    <i class="fa-li fa fa-check"></i> Mobile-First, Responsive Design</li>
                                <li>
                                    <i class="fa-li fa fa-check"></i> Cross Browser Testing &amp; Debugging</li>
                                <li>
                                    <i class="fa-li fa fa-check"></i> Cross Functional Teams</li>
                                <li>
                                    <i class="fa-li fa fa-check"></i> Agile Development &amp; Scrum</li>
                            </ul>
                        </div>
                    </section>
                    <hr class="m-0">

                    <!-- interesses -->
                    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="portfolio">
                        <div class="my-auto">
                            <h2 class="mb-5">Interests</h2>
                            <p>Apart from being a web developer, I enjoy most of my time being outdoors. In the winter, I am an avid skier and novice ice climber. During the warmer months here in Colorado, I enjoy mountain biking, free climbing, and kayaking.</p>
                            <p class="mb-0">When forced indoors, I follow a number of sci-fi and fantasy genre movies and television shows, I am an aspiring chef, and I spend a large amount of my free time exploring the latest technology advancements in the front-end web development
                                world.
                            </p>
                        </div>
                    </section>
                    <hr class="m-0">

                    <!-- certificações -->
                    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="certificacoes">
                        <div class="my-auto">
                            <h2 class="mb-5">Awards &amp; Certifications</h2>
                            <ul class="fa-ul mb-0">
                                <li>
                                    <i class="fa-li fa fa-trophy text-warning"></i> Google Analytics Certified Developer</li>
                                <li>
                                    <i class="fa-li fa fa-trophy text-warning"></i> Mobile Web Specialist - Google Certification</li>
                                <li>
                                    <i class="fa-li fa fa-trophy text-warning"></i> 1
                                    <sup>st</sup> Place - University of Colorado Boulder - Emerging Tech Competition 2009</li>
                                <li>
                                    <i class="fa-li fa fa-trophy text-warning"></i> 1
                                    <sup>st</sup> Place - University of Colorado Boulder - Adobe Creative Jam 2008 (UI Design Category)</li>
                                <li>
                                    <i class="fa-li fa fa-trophy text-warning"></i> 2
                                    <sup>nd</sup> Place - University of Colorado Boulder - Emerging Tech Competition 2008</li>
                                <li>
                                    <i class="fa-li fa fa-trophy text-warning"></i> 1
                                    <sup>st</sup> Place - James Buchanan High School - Hackathon 2006</li>
                                <li>
                                    <i class="fa-li fa fa-trophy text-warning"></i> 3
                                    <sup>rd</sup> Place - James Buchanan High School - Hackathon 2005</li>
                            </ul>
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