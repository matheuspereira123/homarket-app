$(document).ready(function() {

    $('.btn-sair').click(function() {
        $.ajax({
            url: 'src/usuario/model/logout.php',
            success: function(dados) {
                $(location).attr('href', 'index.php')
            }
        })
    })

})