// para o abrir e fechar dos collapse do menu lateral
$(".fe-menu-lateral").click(function() {
    if ($("div").hasClass("in")) {
        $(".in").collapse("hide");
    } else {
        $(".in").collapse("show");
    }
});