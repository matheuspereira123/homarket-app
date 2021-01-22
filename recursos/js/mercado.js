$('#produtos').click(function() {
    $('#loader').show()

    $('.modal-title').append('Nossos Produtos')
    $('.modal-body').append(body)

    $('#modalBunitinhu').modal('show')
    $('#loader').hide()
})

$('.atendimento-index').click(function(e) {
        e.preventDefault()
        $('.modal-title').empty()
        $('.modal-body').empty()

        let body = `
        <div class="row">
        <div class="col-md-12 col-12 text-center">
            <i class="mdi mdi-timetable mdi-36px text-center"></i>
            <p class="text-center">Horarios de atendimento</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-12 text-center">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Dia da semana</th>
                        <th scope="col">Período</th>
                        <th scope="col">Horário</th>
                        <th scope="col">Período</th>
                        <th scope="col">Horário</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Segunda-feira</th>
                        <td>Manhã</td>
                        <td>07:00 ás 11:30 AM</td>
                        <td>Tarde</td>
                        <td>01:00 ás 06:00 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Terça-feira</th>
                        <td>Manhã</td>
                        <td>07:00 ás 11:30 AM</td>
                        <td>Tarde</td>
                        <td>01:00 ás 06:00 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Quarta-feira</th>
                        <td>Manhã</td>
                        <td>07:00 ás 11:30 AM</td>
                        <td>Tarde</td>
                        <td>01:00 ás 06:00 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Quinta-feira</th>
                        <td>Manhã</td>
                        <td>07:00 ás 11:30 AM</td>
                        <td>Tarde</td>
                        <td>01:00 ás 06:00 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Sexta-feira</th>
                        <td>Manhã</td>
                        <td>07:00 ás 11:30 AM</td>
                        <td>Tarde</td>
                        <td>01:00 ás 06:00 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Sábado/Domingo</th>
                        <td>Manhã</td>
                        <td>07:00 ás 12:00 AM</td>
                        <td>Tarde</td>
                        <td>---</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
        `
        $('.modal-title').append('Suporte técnico')
        $('.modal-body').append(body)
        $('#modalBunitinhu').modal('show')

    })
    //Arroz
    // $('#btn-pesquisa').click(function(e) {
    //         e.preventDefault()
    //         $('.modal-title').empty()
    //         $('.modal-body').empty()

//         let body = `

//     <div class="img-fluid">
//         <div class="text-center">
//             <img src="imagens/arroz.jpg" height="250px" width="250px">
//         </div>
//     </div>
//     <div class="text-center">
//     <h3 class="Text-center text-danger">Arroz Branco camil</h3>
//     <h4 class="text-center text-success">R$4,99</h4>
//     </div><br><br>



//     <div class="row text-center">

//             <div class="col-md-4">
//                 <a href="" class="btn btn-outline-success btn-sm"><i class="mdi mdi-cart-plus mdi-36px"></i></a>
//             </div>
//             <div class="col-md-4">
//                 <a href="" class="btn btn-outline-info btn-sm"><i class="mdi mdi-information-outline mdi-36px"></i></a>
//             </div>
//             <div class="col-md-4">
//                 <a href="" class="btn btn-outline-danger btn-sm"><i class="mdi mdi-cart-remove mdi-36px"></i></a>
//             </div>
//     </div>
//     `

//         $('.modal-title').append('Produto pesquisado')
//         $('.modal-body').append(body)

//         $('#modalBunitinhu').modal('show')

//     })
//Feijão
// $('#btn-pesquisa').click(function(e) {
//         e.preventDefault()
//         $('.modal-title').empty()
//         $('.modal-body').empty()

//         let body = `

//     <div class="img-fluid">
//         <div class="text-center">
//             <img src="imagens/feijao.png" height="250px" width="250px">
//         </div>
//     </div>
//     <div class="text-center">
//     <h3 class="Text-center text-danger">Feijão Preto Kicaldo</h3>
//     <h4 class="text-center text-success">R$4,99</h4>
//     </div><br><br>



//     <div class="row text-center">

//             <div class="col-md-4">
//                 <a href="" class="btn btn-outline-success"><i class="mdi mdi-cart-plus mdi-36px"></i></a>
//             </div>
//             <div class="col-md-4">
//                 <a href="" class="btn btn-outline-info"><i class="mdi mdi-information-outline mdi-36px"></i></a>
//             </div>
//             <div class="col-md-4">
//                 <a href="" class="btn btn-outline-danger"><i class="mdi mdi-cart-remove mdi-36px"></i></a>
//             </div>
//     </div>
//     `

//         $('.modal-title').append('Produto pesquisado')
//         $('.modal-body').append(body)

//         $('#modalBunitinhu').modal('show')

//     })
//Macarrão
// $('#btn-pesquisa').click(function(e) {
//     e.preventDefault()
//     $('.modal-title').empty()
//     $('.modal-body').empty()

//     let body = `

//     <div class="img-fluid">
//         <div class="text-center">
//             <img src="imagens/macarrao.jpg" height="250px" width="250px">
//         </div>
//     </div>
//     <div class="text-center">
//     <h3 class="Text-center text-danger">Macarrão Galo Selmi</h3>
//     <h4 class="text-center text-success">R$4,99</h4>
//     </div><br><br>



//     <div class="row text-center">

//             <div class="col-md-4">
//                 <a href="" class="btn btn-outline-success"><i class="mdi mdi-cart-plus mdi-36px"></i></a>
//             </div>
//             <div class="col-md-4">
//                 <a href="" class="btn btn-outline-info"><i class="mdi mdi-information-outline mdi-36px"></i></a>
//             </div>
//             <div class="col-md-4">
//                 <a href="" class="btn btn-outline-danger"><i class="mdi mdi-cart-remove mdi-36px"></i></a>
//             </div>
//     </div>
//     `

//     $('.modal-title').append('Produto pesquisado')
//     $('.modal-body').append(body)

//     $('#modalBunitinhu').modal('show')

// })










// Quando não estiver nada digitado
$('#btn-pesquisa').click(function(e) {
        e.preventDefault()
        Swal.fire('Erro', 'Digite o produto desejado', 'error')
    })
    // Quando não tiver o produto no estoque

// $('#btn-pesquisa').click(function(e) {
//     e.preventDefault()
//     Swal.fire('Atenção', 'O produto não foi encontrado', 'warning')
// })