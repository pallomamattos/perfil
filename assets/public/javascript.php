<!-- Core JS. Extra: TouchPunch para biblioteca de toque dentro do jquery-ui.min.js -->
<script src="../../assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="../../assets/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="../../assets/js/perfect-scrollbar.min.js" type="text/javascript"></script>
<script src="../../assets/js/bootstrap.min.js" type="text/javascript"></script>

<!-- Plugin de validação de formulários -->
<script src="../../assets/js/jquery.validate.min.js"></script>

<!-- Promise Library for SweetAlert2 trabalhando no IE -->
<script src="../../assets/js/es6-promise-auto.min.js"></script>

<!-- Plugin para Date Time Picker e Full Calendar Plugin -->
<script src="../../assets/js/moment.min.js"></script>

<!-- Data Time Picker Plugin está incluído neste arquivo js -->
<script src="../../assets/js/bootstrap-datetimepicker.js"></script>

<!-- Plugin do selecionador -->
<script src="../../assets/js/bootstrap-selectpicker.js"></script>

<!-- Switch para marcar plug-ins de entrada -->
<script src="../../assets/js/bootstrap-switch-tags.js"></script>

<!-- Gráfico de Porcentagem de Círculo -->
<script src="../../assets/js/jquery.easypiechart.min.js"></script>

<!-- Plugin Gráficos -->
<script src="../../assets/js/chartist.min.js"></script>

<!-- Plugin de Notificações -->
<script src="../../assets/js/bootstrap-notify.js"></script>

<!-- Plugin Sweet Alert 2 -->
<script src="../../assets/js/sweetalert2.js"></script>

<!-- Plugin de mapa vetorial -->
<script src="../../assets/js/jquery-jvectormap.js"></script>

<!-- Plug-in do Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxzHbOyAX8iURfjI9KCfny7-91Kaq0yD4"></script>

<!-- Plugin do Assistente -->
<script src="../../assets/js/jquery.bootstrap.wizard.min.js"></script>

<!-- Plugin de tabela de inicialização -->
<script src="../../assets/js/bootstrap-table.js"></script>

<!-- Plugin para DataTables.net -->
<script src="../../assets/js/jquery.datatables.js"></script>

<!-- Plugin de Calendário Completo -->
<script src="../../assets/js/fullcalendar.min.js"></script>

<!-- Paper Dashboard PRO Core javascript e métodos para fins de demonstração -->
<script src="../../assets/js/paper-dashboard.js"></script>

<!-- Paper Dashboard PRO DEMO métodos, não incluí-lo no projeto -->
<!-- <script src="../../assets/js/demo.js"></script> -->

<!-- javascript by Developer -->
<script>
    // função para o abrir e fechar dos collapse do menu lateral
    $(".fe-menu-lateral").click(function() {
        if ($("div").hasClass("in")) {
            $(".in").collapse("hide");
        } else {
            $(".in").collapse("show");
        }
    });

    /*
    $(".fe-menu-aberto").click(function() {
        $(".fe-menu-aberto").removeClass("open");
        $(this).addClass("open");
    });
    */

    // função para o fechar o menu lateral quando clica no menu mobile
    $(".fe-fechar-menu-mobile").click(function() {
        $("html").removeClass("nav-open");
        mobile_menu_visible = 0;

        setTimeout(function() {
            $layer.remove();
            $toggle.removeClass("toggled");
        }, 400);
    });

    // função para mostrar tooltip
    $("*").mouseleave(function() {
        $('[data-toggle="tooltip"]').tooltip();
        $('[data-toggle="tooltip"]').tooltip("hide");
    });

    // função para o marcar o link como ativo
    $(".fe-fechar-menu-mobile li").click(function() {
        $(".fe-fechar-menu-mobile li.active").removeClass("active");
        $(this).addClass("active");
    });

    // função para animar o scroll
    $(document).ready(function() {
        var scrollLink = $(".js-scroll-trigger");

		scrollLink.bind("click", function(e) {
            e.preventDefault();

            var target = $(this).attr("href");

            $("html, body").stop().animate({
                scrollTop: $(target).offset().top
            }, 1900, function() {
                location.hash = target;
                          
                $("html").removeClass("nav-open");
                mobile_menu_visible = 0;

                setTimeout(function() {
                    $layer.remove();
                    $toggle.removeClass("toggled");
                }, 1900);
            });
            return false;
		});
 
        $(window).scroll(function() {
            var scrollbarLocation = $(this).scrollTop();
            
            scrollLink.each(function() {
                var sectionOffset = $(this.hash).offset().top - 20;
                
                if (sectionOffset <= scrollbarLocation) {
                    $(this).parent().addClass("active");
                    $(this).parent().siblings().removeClass("active");
                }
            });
        });
    }).scroll();
</script>