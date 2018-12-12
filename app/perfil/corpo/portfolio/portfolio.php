<style>
    .fe-card-portfolio-ajuste {
        margin-right: -25px;
    }

    .fe-card-portfolio {
        padding: 20px;
        width: 15em;
        background-color: #ffffff;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        cursor: pointer;
        border-radius: 3px;
        display: inline-block;

        margin-right: 25px;
        margin-bottom: 28px;
    }

    .fe-card-portfolio:hover .fe-card-portfolio-top {
        height: 40px;
    }

    .fe-card-portfolio:hover .fe-card-portfolio-top .fe-card-portfolio-icon {
        -webkit-transform: translateX(-50%) translateY(-50%) scale(3);
                transform: translateX(-50%) translateY(-50%) scale(3);
    }

    .fe-card-portfolio:hover .fe-card-portfolio-corpo {
        height: 170px;
    }

    .fe-card-portfolio:hover .fe-card-portfolio-corpo .fe-card-portfolio-itens li {
        margin-left: -40px;
        list-style-type: none;
        -webkit-transform: translateX(0);
                transform: translateX(0);
        transition-timing-function: cubic-bezier(0, 1.5, 1, 1);
        transition-duration: 0.5s;
    }

    .fe-card-portfolio:hover .fe-card-portfolio-corpo .fe-card-portfolio-itens li:nth-child(1) {
        transition-delay: 0.25s;
    }

    .fe-card-portfolio:hover .fe-card-portfolio-corpo .fe-card-portfolio-itens li:nth-child(2) {
        transition-delay: 0.5s;
    }

    .fe-card-portfolio:hover .fe-card-portfolio-corpo .fe-card-portfolio-itens li:nth-child(3) {
        transition-delay: 0.75s;
    }

    .fe-card-portfolio:hover .fe-card-portfolio-corpo .fe-card-portfolio-itens li:nth-child(4) {
        transition-delay: 1s;
    }

    .fe-card-portfolio:hover .fe-card-portfolio-corpo .fe-card-portfolio-itens li:nth-child(5) {
        transition-delay: 1.25s;
    }

    .fe-card-portfolio:hover .fe-card-portfolio-corpo .fe-card-portfolio-itens li:nth-child(6) {
        transition-delay: 1.5s;
    }

    .fe-card-portfolio .fe-card-portfolio-top {
        position: relative;
        background-color: #ffffff;
        height: 170px;
        margin: -20px -20px 20px -20px;
        transition: height 0.5s;
        overflow: hidden;
        border-radius: 3px;
    }

    .fe-card-portfolio .fe-card-portfolio-top .fe-card-portfolio-icon {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translateY(-50%) translateX(-50%);
                transform: translateY(-50%) translateX(-50%);
        display: block;
        width: 100%;
        height: 170px;
        transition: -webkit-transform 0.5s;
        transition: transform 0.5s;
        transition: transform 0.5s, -webkit-transform 0.5s;
    }

    .fe-card-portfolio .fe-card-portfolio-corpo {
        height: 40px;
        transition: height 0.5s;
        overflow: hidden;
        margin: -10px;
    }

    .fe-card-portfolio .fe-card-portfolio-corpo .fe-card-portfolio-titulo {
        font-size: 1.4em;
        font-weight: 600;
        text-transform: uppercase;
        margin-top: -4px;
    }
    .fe-card-portfolio .fe-card-portfolio-corpo .fe-card-portfolio-descricao {
        color: #9E9E9E;
        font-style: italic;
        margin-top: -10px;
    }

    .fe-card-portfolio .fe-card-portfolio-corpo .fe-card-portfolio-itens {
        margin-top: 10px;
        color: #424242;
    }

    .fe-card-portfolio .fe-card-portfolio-corpo .fe-card-portfolio-itens li {
        margin-top: 5px;
        transition-duration: 0;
        transition-delay: 0.5s;
        -webkit-transform: translateX(-100%);
                transform: translateX(-100%);
    }
</style>

<section class="fe-perfil-section" id="portfolio">
    <div>
        <h2 class="fe-letra-quadrada fe-letra-media">Portfólio</h2>
        <br><br>
        
        <div class="fe-card-portfolio-ajuste">
        
            <div class="fe-card-portfolio-mostrar">
                <div class="fe-card-portfolio">
                    <header class="fe-card-portfolio-top">
                        <img class="fe-card-portfolio-icon" src="http://www.edlainezamora.com.br/images/tecnologia/html.png" alt=" ">
                    </header>
                    <div class="fe-card-portfolio-corpo">
                        <h2 class="fe-card-portfolio-titulo">Chamado</h2>
                        <div class="fe-card-portfolio-descricao">Bootstrap</div>
                        <ul class="fe-card-portfolio-itens">
                            <li>HTML5</li>
                            <li>CSS</li>
                            <li>Javascript</li>
                            <li>Jquery</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="fe-card-portfolio-mostrar">
                <div class="fe-card-portfolio">
                    <header class="fe-card-portfolio-top">
                        <img class="fe-card-portfolio-icon" src="http://www.edlainezamora.com.br/images/tecnologia/html.png" alt=" ">
                    </header>
                    <div class="fe-card-portfolio-corpo">
                        <h2 class="fe-card-portfolio-titulo">Chamado</h2>
                        <div class="fe-card-portfolio-descricao">Bootstrap</div>
                        <ul class="fe-card-portfolio-itens">
                            <li>HTML5</li>
                            <li>CSS</li>
                            <li>Javascript</li>
                            <li>Jquery</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="fe-card-portfolio-mostrar">
                <div class="fe-card-portfolio">
                    <header class="fe-card-portfolio-top">
                        <img class="fe-card-portfolio-icon" src="http://www.edlainezamora.com.br/images/tecnologia/html.png" alt=" ">
                    </header>
                    <div class="fe-card-portfolio-corpo">
                        <h2 class="fe-card-portfolio-titulo">Chamado</h2>
                        <div class="fe-card-portfolio-descricao">Bootstrap</div>
                        <ul class="fe-card-portfolio-itens">
                            <li>HTML5</li>
                            <li>CSS</li>
                            <li>Javascript</li>
                            <li>Jquery</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="fe-card-portfolio-mostrar">
                <div class="fe-card-portfolio">
                    <header class="fe-card-portfolio-top">
                        <img class="fe-card-portfolio-icon" src="http://www.edlainezamora.com.br/images/tecnologia/html.png" alt=" ">
                    </header>
                    <div class="fe-card-portfolio-corpo">
                        <h2 class="fe-card-portfolio-titulo">Chamado</h2>
                        <div class="fe-card-portfolio-descricao">Bootstrap</div>
                        <ul class="fe-card-portfolio-itens">
                            <li>HTML5</li>
                            <li>CSS</li>
                            <li>Javascript</li>
                            <li>Jquery</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="fe-card-portfolio-mostrar">
                <div class="fe-card-portfolio">
                    <header class="fe-card-portfolio-top">
                        <img class="fe-card-portfolio-icon" src="http://www.edlainezamora.com.br/images/tecnologia/html.png" alt=" ">
                    </header>
                    <div class="fe-card-portfolio-corpo">
                        <h2 class="fe-card-portfolio-titulo">Chamado</h2>
                        <div class="fe-card-portfolio-descricao">Bootstrap</div>
                        <ul class="fe-card-portfolio-itens">
                            <li>HTML5</li>
                            <li>CSS</li>
                            <li>Javascript</li>
                            <li>Jquery</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="fe-card-portfolio-mostrar">
                <div class="fe-card-portfolio">
                    <header class="fe-card-portfolio-top">
                        <img class="fe-card-portfolio-icon" src="http://www.edlainezamora.com.br/images/tecnologia/html.png" alt=" ">
                    </header>
                    <div class="fe-card-portfolio-corpo">
                        <h2 class="fe-card-portfolio-titulo">Chamado</h2>
                        <div class="fe-card-portfolio-descricao">Bootstrap</div>
                        <ul class="fe-card-portfolio-itens">
                            <li>HTML5</li>
                            <li>CSS</li>
                            <li>Javascript</li>
                            <li>Jquery</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="fe-card-portfolio-mostrar">
                <div class="fe-card-portfolio">
                    <header class="fe-card-portfolio-top">
                        <img class="fe-card-portfolio-icon" src="http://www.edlainezamora.com.br/images/tecnologia/html.png" alt=" ">
                    </header>
                    <div class="fe-card-portfolio-corpo">
                        <h2 class="fe-card-portfolio-titulo">Chamado</h2>
                        <div class="fe-card-portfolio-descricao">Bootstrap</div>
                        <ul class="fe-card-portfolio-itens">
                            <li>HTML5</li>
                            <li>CSS</li>
                            <li>Javascript</li>
                            <li>Jquery</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="fe-card-portfolio-mostrar">
                <div class="fe-card-portfolio">
                    <header class="fe-card-portfolio-top">
                        <img class="fe-card-portfolio-icon" src="http://www.edlainezamora.com.br/images/tecnologia/html.png" alt=" ">
                    </header>
                    <div class="fe-card-portfolio-corpo">
                        <h2 class="fe-card-portfolio-titulo">Chamado</h2>
                        <div class="fe-card-portfolio-descricao">Bootstrap</div>
                        <ul class="fe-card-portfolio-itens">
                            <li>HTML5</li>
                            <li>CSS</li>
                            <li>Javascript</li>
                            <li>Jquery</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="fe-card-portfolio-mostrar">
                <div class="fe-card-portfolio">
                    <header class="fe-card-portfolio-top">
                        <img class="fe-card-portfolio-icon" src="http://www.edlainezamora.com.br/images/tecnologia/html.png" alt=" ">
                    </header>
                    <div class="fe-card-portfolio-corpo">
                        <h2 class="fe-card-portfolio-titulo">Chamado</h2>
                        <div class="fe-card-portfolio-descricao">Bootstrap</div>
                        <ul class="fe-card-portfolio-itens">
                            <li>HTML5</li>
                            <li>CSS</li>
                            <li>Javascript</li>
                            <li>Jquery</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="fe-card-portfolio-mostrar">
                <div class="fe-card-portfolio">
                    <header class="fe-card-portfolio-top">
                        <img class="fe-card-portfolio-icon" src="http://www.edlainezamora.com.br/images/tecnologia/html.png" alt=" ">
                    </header>
                    <div class="fe-card-portfolio-corpo">
                        <h2 class="fe-card-portfolio-titulo">Chamado</h2>
                        <div class="fe-card-portfolio-descricao">Bootstrap</div>
                        <ul class="fe-card-portfolio-itens">
                            <li>HTML5</li>
                            <li>CSS</li>
                            <li>Javascript</li>
                            <li>Jquery</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="fe-card-portfolio-mostrar">
                <div class="fe-card-portfolio">
                    <header class="fe-card-portfolio-top">
                        <img class="fe-card-portfolio-icon" src="http://www.edlainezamora.com.br/images/tecnologia/html.png" alt=" ">
                    </header>
                    <div class="fe-card-portfolio-corpo">
                        <h2 class="fe-card-portfolio-titulo">Chamado</h2>
                        <div class="fe-card-portfolio-descricao">Bootstrap</div>
                        <ul class="fe-card-portfolio-itens">
                            <li>HTML5</li>
                            <li>CSS</li>
                            <li>Javascript</li>
                            <li>Jquery</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="fe-card-portfolio-mostrar">
                <div class="fe-card-portfolio">
                    <header class="fe-card-portfolio-top">
                        <img class="fe-card-portfolio-icon" src="http://www.edlainezamora.com.br/images/tecnologia/html.png" alt=" ">
                    </header>
                    <div class="fe-card-portfolio-corpo">
                        <h2 class="fe-card-portfolio-titulo">Chamado</h2>
                        <div class="fe-card-portfolio-descricao">Bootstrap</div>
                        <ul class="fe-card-portfolio-itens">
                            <li>HTML5</li>
                            <li>CSS</li>
                            <li>Javascript</li>
                            <li>Jquery</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="fe-card-portfolio-mostrar">
                <div class="fe-card-portfolio">
                    <header class="fe-card-portfolio-top">
                        <img class="fe-card-portfolio-icon" src="http://www.edlainezamora.com.br/images/tecnologia/html.png" alt=" ">
                    </header>
                    <div class="fe-card-portfolio-corpo">
                        <h2 class="fe-card-portfolio-titulo">Chamado</h2>
                        <div class="fe-card-portfolio-descricao">Bootstrap</div>
                        <ul class="fe-card-portfolio-itens">
                            <li>HTML5</li>
                            <li>CSS</li>
                            <li>Javascript</li>
                            <li>Jquery</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="fe-card-portfolio-mostrar">
                <div class="fe-card-portfolio">
                    <header class="fe-card-portfolio-top">
                        <img class="fe-card-portfolio-icon" src="http://www.edlainezamora.com.br/images/tecnologia/html.png" alt=" ">
                    </header>
                    <div class="fe-card-portfolio-corpo">
                        <h2 class="fe-card-portfolio-titulo">Chamado</h2>
                        <div class="fe-card-portfolio-descricao">Bootstrap</div>
                        <ul class="fe-card-portfolio-itens">
                            <li>HTML5</li>
                            <li>CSS</li>
                            <li>Javascript</li>
                            <li>Jquery</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <button id="fe-mostrar-portfolio" class="btn btn-info fe-center-x">Mostrar mais</button>
    </div>
</section>
<hr class="fe-hr">