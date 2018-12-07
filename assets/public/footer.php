<!-- rodapé -->
<footer class="footer">
    <div class="container-fluid">
        <div class="copyright pull-right">
            &copy;
            <script>
                document.write(new Date().getFullYear());
            </script>, Desenvolvido por <a class="fe-pointer" onclick="modal.card('dev-contato')">Felipe Sales</a>
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
                            <img src="https://www.metro1.com.br/noticias/65380,national-geographic-cita-salvador-entre-os-28-lugares-para-visitar-em-2019-3.jpg" alt="..."/>
                        </div>
                        <div class="card-content">
                            <div class="author">
                                <img class="avatar border-white" src="../../assets/img/perfil/usuario/felipe.png">
                                <h4 class="card-title">Felipe Sales<br />
                                    <a href="#"><small>@felipesales007</small></a>
                                </h4>
                            </div>
                            <p class="description text-center">
                                Ser desenvolvedor é uma viagem<br>
                                onde a próxima parada é a<br>
                                solução de um problema
                            </p>
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