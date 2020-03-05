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

$('.cadastrar').click(function() {
    $('.modal-title').empty()
    $('.modal-body').empty()

    let body = `

    <div class="img-fluid">
        <div class="text-center">
            <img src="imagens/ponto de exclamação.png">
        </div>
    </div>
    <div class="text-center">
    <h1 class="Text-center marelo">Somente para Funcionários</h1>
    </div><br><br>
    

    
    <h3>Faça seu login</h3>
                <hr>
                <form action="" class="form">
                    <div class="form-group">
                        <label><b>Email</b></label>
                        <input type="email" placeholder="Digite seu E-mail" class="form-control">
                    </div>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Formato correto de Email:</strong> ****@gmail.com
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="form-group ">
                        <label class=""><b>Senha</b> </label>
                        <input type="password" placeholder="Digite sua senha" class="form-control ">
                    </div>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Atenção!</strong> Não é permitido dar espaço em sua senha
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <hr>
                    <div class="form-group">
                        <a href="addProd.html" class="btn btn-outline-success btn-circle">Entrar</a>
                        
                    </div>

    `

    $('.modal-title').append('Área Restrita')
    $('.modal-body').append(body)

    $('#modalBunitinhu').modal('show')

})
$('.remove').click(function() {
    $('.modal-title').empty()
    $('.modal-body').empty()

    let body = `

    <div class="img-fluid">
        <div class="text-center">
            <img src="imagens/ponto de exclamação.png">
        </div>
    </div>
    <div class="text-center">
    <h1 class="Text-center marelo">Somente para Funcionários</h1>
    </div><br><br>
    

    
    <h3>Faça seu login</h3>
                <hr>
                <form action="" class="form">
                    <div class="form-group">
                        <label><b>Email</b></label>
                        <input type="email" placeholder="Digite seu E-mail" class="form-control">
                    </div>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Formato correto de Email:</strong> ****@gmail.com
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="form-group ">
                        <label class=""><b>Senha</b> </label>
                        <input type="password" placeholder="Digite sua senha" class="form-control ">
                    </div>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Atenção!</strong> Não é permitido dar espaço em sua senha
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <hr>
                    <div class="form-group">
                        <a href="removeProd.html" class="btn btn-outline-success btn-circle">Entrar</a>
                        
                    </div>

    `

    $('.modal-title').append('Área Restrita')
    $('.modal-body').append(body)

    $('#modalBunitinhu').modal('show')

})

// $('#btn').click(function() {
//     $('#add').removeClass('mdi-cart-plus mdi-36px')
//     $('#add').addClass('mdi-check mdi-36px')
// })















// $('.cadastrar').click(function() {

//     const swalWithBootstrapButtons = Swal.mixin({
//         customClass: {
//             confirmButton: 'btn btn-success',
//             cancelButton: 'btn btn-danger'
//         },
//         buttonsStyling: false
//     })

//     swalWithBootstrapButtons.fire({
//         title: 'Área Restrita!',
//         text: "Somente Funcionários",
//         icon: 'warning',
//         showCancelButton: true,
//         confirmButtonText: 'Sou um funcionário',
//         cancelButtonText: 'Voltar',
//         reverseButtons: true
//     }).then((result) => {
//             if (result.value) {
//                 swalWithBootstrapButtons.fire(
//                     'Insira seu nome de usuário',
//                     input: 'text',
//                     inputAttributes: {
//                         autocapitalize: 'off'
//                     },
//                     showCancelButton: true,
//                     confirmButtonText: 'Logar',
//                     showLoaderOnConfirm: true,
//                     preConfirm: (login) => {
//                         return fetch(`//api.github.com/users/${login}`)
//                             .then(response => {
//                                 if (!response.ok) {
//                                     throw new Error(response.statusText)
//                                 }
//                                 return response.json()
//                             })
//                             .catch(error => {
//                                 Swal.showValidationMessage(
//                                     `Request failed: ${error}`
//                                 )
//                             })
//                     },
//                     allowOutsideClick: () => !Swal.isLoading()
//                 }).then((result) => {
//                 if (result.value) {
//                     Swal.fire({
//                         title: `${result.value.login}'s avatar`,
//                         imageUrl: result.value.avatar_url
//                     })
//                 }
//             })
//         )
//     }
//     else if (
//         /* Read more about handling dismissals below */
//         result.dismiss === Swal.DismissReason.cancel
//     ) {
//         swalWithBootstrapButtons.fire(
//             'Voltando para a área de produtos',
//             'Aproveite os nosso produtos)',
//             'success'
//         )
//     }
// })




// { <p class="text-right"><i class="mdi mdi-check-outline mdi-36px"></i></p> }