$(document).ready(function() {
    $(".celular").mask('(99) 99999-9999')
    $('.cep').mask('00000-000')
    $(".rg").mask('99.999.999-9')
    $(".cpf").mask('999.999.999-99')
    $('.btn-cadastrar').click(function(e) {

        e.preventDefault()

        let dados = new FormData(document.getElementById('form-cadastro'))

        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: 'src/usuario/model/cadastro.php',
            data: dados,
            nimeType: 'multipart/form-data',
            cache: false,
            contentType: false,
            processData: false,
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
                            $(location).attr('href', 'menu.html')
                        }
                    })
                } else {
                    Swal.fire({
                        icon: dados.icone,
                        html: '<h2 style="color:white;">' + dados.msg + '</h2>',
                        background: 'rgb(39, 39, 61)',
                        showCancelButton: true,
                        showConfirmButton: false,
                        cancelButtonColor: '#d9534f',
                        cancelButtonText: 'Não',
                    }).then((result) => {
                        if (result.value) {
                            $(location).attr('href', 'menu.html')
                        }
                    })
                }
            }
        })
    })
})