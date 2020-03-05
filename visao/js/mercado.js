$(document).ready(function() {
    function hideLoading() {
        setTimeout(function() { $('#loader').hide() }, 3000)
    }
    $('#loader').show()
    $('#loader').hide()


    $('#produtos').click(function() {
        $('#loader').show()

        $('.modal-title').append('Nossos Produtos')
        $('.modal-body').append(body)

        $('#modalBunitinhu').modal('show')
        $('#loader').hide()
    })

    $(':input').on('focus', function() {
        this.dataset.placeholder = this.placeholder;
        this.placeholder = '';
    }).on('blur', function() {
        this.placeholder = this.dataset.placeholder;
    });

    $('.btn-pesquisa').click(function(){
        swal.fire('Erro','Produto não encontrado','danger')
    })


})