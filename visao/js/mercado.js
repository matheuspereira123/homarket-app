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
        <div class="col-md-6 col-6 text-center">
            <i class="mdi mdi-timetable mdi-36px text-center"></i>
            <p class="text-center">Horarios de atendimento</p>
        </div>
        <div class="col-md-6 col-6 text-center">
            <i class="mdi mdi-phone mdi-36px text-center"></i>
            <p class="text-center">Fale conosco</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-6 text-center">
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
        <div class="col-md-6 col-6 text-center">
            <p>(14) 99847-3460</p>
            <p>(14) 99847-3460</p><br>

            <i class="mdi mdi-email mdi-36px"></i>
            <p>Matheuspghc1@gmail.com</p>
        </div>
    </div>
        `
    $('.modal-title').append('Suporte técnico')
    $('.modal-body').append(body)
    $('#modalBunitinhu').modal('show')

})

// $(':input').on('focus', function() {
//     this.dataset.placeholder = this.placeholder;
//     this.placeholder = '';
// }).on('blur', function() {
//     this.placeholder = this.dataset.placeholder;
// });

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