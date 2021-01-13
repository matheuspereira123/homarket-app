function hideLoading() {
    setTimeout(function() { $('#loader').hide() }, 3000)
}

$(document).ready(function() {
    $('#loader').show()
    let home = `
    <div id="loader" class="container-fluid bg-dark  fixed-top">
    <div class="row text-center">
        <div class="col-12 text-center">
            <img src="imagens/preloader.gif" class="img-loader">
        </div>
    </div>
</div>
    `

    hideLoading()
})

$('#produtos').click(function() {
    $('.modal-title').empty()
    $('.modal-body').empty()




    let body = `

    
    <ul>
    
    
    <p><img src="imagens/Leite.jpg" height="280" width="250"></p>
    <h5 class="text-danger">Leite Italac</h5>
    <p>R$2,50</p>
    <a href="#" class="btn btn-outline-success text-center"><i class="mdi mdi-cart-plus mdi-24px "></i></a>
    <a href="#" class="btn btn-outline-info text-center"><i class="mdi mdi-information-outline mdi-24px "></i></a>
    <hr>
    <p><img class="offset-1" src="imagens/leite_condensado.png" width="150" height="120"></p>
    <h5 class="text-danger">Leite Condensado</h5>
    <p> R$5,00</p>
    <a href="#" class="btn btn-outline-success text-center"><i class="mdi mdi-cart-plus mdi-24px "></i></a>
    <a href="#" class="btn btn-outline-info text-center"><i class="mdi mdi-information-outline mdi-24px "></i></a>
    <hr>
    <p><img src="imagens/veja.jpg" width="200" height="180"></p>
    <h5 class="text-danger">Veja</h5>
    <p>R$2,50</p>
    <a href="#" class="btn btn-outline-success text-center"><i class="mdi mdi-cart-plus mdi-24px "></i></a>
    <a href="#" class="btn btn-outline-info text-center"><i class="mdi mdi-information-outline mdi-24px "></i></a>

</ul>
    `

    $('.modal-title').append('Veja alguns de nossos produtos')
    $('.modal-body').append(body)

    $('#modalBunitinhu').modal('show')
})



$('#btn-add').click(function(e) {
    e.preventDefault()
    Swal.fire('Adicionado!', 'O produto foi adicionado ao estoque', 'success')
})
$('#btn-remove').click(function(e) {
    e.preventDefault()
    Swal.fire('Removido!', 'O produto foi removido do estoque', 'success')
})