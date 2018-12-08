<!-- rodapé -->
<footer class="footer">
    <div class="container-fluid">
        <div class="copyright pull-right">
            &copy;
            <script>
                document.write(new Date().getFullYear());
            </script>, Desenvolvido por <a class="fe-pointer" onclick="modal.card('dev-contato')" data-toggle="tooltip" data-placement="top" title="Saiba mais">Felipe Sales</a>
        </div>
    </div>
</footer>

<script>
    modal = {
        card: function(type) {
            if (type == 'dev-contato') {
                swal({
                    html:`
                    <div class="card-user fe-dev-contato">
                        <div class="image">
                            <img src="https://media.giphy.com/media/Y6pDMTysYTQ2I/giphy.gif">
                        </div>
                        <div class="card-content">
                            <div class="author">
                                <img class="avatar border-white" src="../../assets/img/perfil/usuario/felipe.png">
                                <p class="card-title">
                                    Felipe Sales
                                    <br>
                                    <small>Desenvolvedor Front-End</small>
                                    <br>
                                </p>
                            </div>
                            <p class="description text-center">
                                Ser desenvolvedor é uma viagem
                                <br>
                                onde a próxima parada é a
                                <br>
                                solução de um problema.
                                <br>
                                <a href="#" target="_blank" class="fe-cor-tema fe-autor-card-dev fe-right" data-toggle="tooltip" data-placement="left" title="Conheça o autor">- Thales Valentim</a>
                                <i class="far fa-edit fe-cor-tema fe-right"></i>&ensp;
                            </p>
                            <div>
                                <a href="#" class="btn btn-wd btn-info">
                                    <span class="btn-label">
                                        <i class="ti-search"></i>
                                    </span>
                                    visualizar perfil
                                </a>
                            </div>
                            <br>
                        </div>
                        <hr>
                        <div class="text-center">
                            <div class="row">
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
                                    <a title="YouTube" href="https://www.youtube.com/user/FelipeSales007/videos" target="_blank">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                    <a title="E-mail" href="#contato" class="fe-scroll-trigger">
                                        <i class="fas fa-envelope"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>`,
                    width: 350,
                    showCloseButton: true,
                    showConfirmButton: false
                });
            }
        }
    }
</script>