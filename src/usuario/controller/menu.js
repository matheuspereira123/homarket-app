$(document).ready(function() {
    $(".btn-pesquisar").click(function() {
        var dados = $("#pesquisa").serialize()
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: 'src/usuario/model/pesquisa.php',
            data: dados,
            success: function(dados) {

            }
        })
    })
    $('.btn-sair').click(function() {
        $.ajax({
            url: 'src/usuario/model/logout.php',
            success: function(dados) {
                $(location).attr('href', 'index.php')
            }
        })
    })

})