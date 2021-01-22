$(document).ready(function() {
    $('.btn-login').click(function(e) {

        e.preventDefault()

        var dados = $("#form-login").serialize()

        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: 'src/usuario/model/login.php',
            data: dados,
            success: function(dados) {
                if (dados.icone == 'success') {
                    $(".input100").val('')
                    Swal.fire({
                        icon: dados.icone,
                        html: '<h2 style="color:white;">' + dados.msg + '</h2>',
                        background: 'rgb(39, 39, 61)',
                        showCancelButton: false,
                        showConfirmButton: true,
                        confirmButtonText: 'Ok',
                    }).then((result) => {
                        if (result.value) {
                            $(location).attr('href', 'menu.php')
                        }
                    })
                } else {
                    Swal.fire({
                        icon: dados.icone,
                        html: '<h2 style="color:white;">' + dados.msg + '</h2>',
                        background: 'rgb(39, 39, 61)',
                        showCancelButton: true,
                        showConfirmButton: false,
                        cancelButtonColor: '#2778c4',
                        cancelButtonText: 'Ok',
                    })
                }
            }
        })
    })
})