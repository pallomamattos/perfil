// para o fechar o menu lateral quando clica no menu mobile
$(".fe-fechar-menu-mobile").click(function() {
    $("html").removeClass("nav-open");
    mobile_menu_visible = 0;

    $layer = $('<div class="close-layer"></div>');
    $toggle = $('.navbar-toggle');

    setTimeout(function() {
        $layer.remove();
        $toggle.removeClass("toggled");
    }, 400);
});

// para mostrar tooltip
$("*").mouseleave(function() {
    $('[data-toggle="tooltip"]').tooltip();
    $('[data-toggle="tooltip"]').tooltip("hide");
});

// para o marcar o link como ativo
$(".fe-fechar-menu-mobile li").click(function() {
    $(".fe-fechar-menu-mobile li.active").removeClass("active");
    $(this).addClass("active");
});

// para copiar
$(".copiar").click(function() {
    $(".copiar").select();
    var copiar = document.execCommand("copy");
    if(copiar) {
        alert("Copiado");
    } else {
        alert("Erro ao copiar, seu navegador pode não ter suporte a essa função.");
    }
    return false;
});

// validação
$().ready(function() {
    $('#fe-perfil-enviar-mensagem').validate();
});

// para noficicação
function showNotification(posicao, lado, icone, mensagem) {
    $.notify({
        icon: icone,
        message: mensagem
    },{
        type: type[2],
        placement: {
            from: posicao,
            align: lado
        }
    });
}

// para os selects personalizados
if ($(".selectpicker").length != 0) {
    $(".selectpicker").selectpicker();
}

// para pegar o ano atual
$().ready(function() {
    var ano = new Date();
    document.getElementById("fe-ano-rodape").innerHTML = ano.getFullYear();
});

// para quando a tela esta em carregamento
var i = setInterval(function() {
    $('html,body').animate({scrollTop: 0},'fast');
    clearInterval(i);
    $(".fe-carregando").fadeOut("slow");
    $(".fe-carregado").fadeIn("slow");
});